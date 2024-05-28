<?php
    include('../../connection/connection.php');
    $queryNama = $connect->prepare("SELECT id, nama FROM data_member");
    $queryNama->execute();
    $resultsNama = $queryNama->get_result();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo JC.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="shortcut icon" href="../../dist/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../dist/style/style-form.css">
    <title>Absensi Nihonbuni</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Absensi JC</h1>
        <div class="card">
            <div class="logo">
                <img src="../../dist/image/logo.png" alt="">
            </div>
            <h1 id="title" class="">yah absennya ditutup</h1>
            <div id="form" class="card-form closed">
                <form action="insert.php" method="POST">
                    <div class="input-form">
                        <label>Nama</label>
                        <select class="select2" name="id_member" id="id_member" style="width: 100%;">
                        <?php
                            while ($data = $resultsNama->fetch_assoc()) {
                                echo "<option value='" . htmlspecialchars($data['id']) . "'>" . htmlspecialchars($data['nama']) . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="input-form">
                        <label for="">Tanggal Ekskul</label>
                        <input type="text" id="datePicker" name="tanggal">
                    </div>
                    <input type="hidden" value="M" name="kehadiran">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="../../dist/js/closeForm.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            flatpickr("#datePicker", {
                enable: [
                    function(date) {
                        return (date.getDay() === 6); 
                    }],
                dateFormat: "Y-m-d",
                minDate: "today",
                maxDate: "2025-12-31",
                defaultDate: "2024-05-11",
                locale: "en",
                onChange: function(selectedDates, dateStr, instance) {
                    console.log(selectedDates);
                    console.log(dateStr);
                    console.log(instance);
                }
            });
            const formOpen = localStorage.getItem("formOpen") === "true";
            const title = document.getElementById("title");
            const form = document.getElementById("form");
            if (formOpen) {
                title.classList.add("closed");
                form.classList.remove("closed");
            } else {
                title.classList.remove("closed");
                form.classList.add("closed");
            }
        });
    </script>
</body>
</html>
