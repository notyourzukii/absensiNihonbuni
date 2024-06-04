<?php
    include('../../../connection/connection.php');
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
    <link rel="shortcut icon" href="../../../dist/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../dist/style/style-form.css">
    <title>Edit Member</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Edit Member</h1>
        <div class="card">
            <div class="logo">
                <img src="../../../dist/image/logo.png" alt="">
            </div>
            <div id="form" class="card-form">
                <form action="insert.php" method="POST">
                    <input type="hidden" name="id">
                    <div class="input-form">
                        <label>Nama</label>
                        <input type="text" name="nama">
                    </div>
                    <div class="input-form" >
                        <label>Kelas</label>
                        <input type="text" name="kelas" oninput="this.value = this.value.toUpperCase()" >
                    </div>
                    <div class="input-form" >
                        <label>Kelas Peminatan</label>
                        <select name="kelas_peminatan" class="form-control">
                            <option value="bahasa">Bahasa</option>
                            <option value="bahasa">Animanga</option>
                        </select>
                    </div>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>

    </script>
</body>
</html>
