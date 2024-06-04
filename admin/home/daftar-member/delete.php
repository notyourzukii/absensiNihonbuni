<?php
require_once '../../../connection/connection.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $deleteQuery = "DELETE FROM data_member WHERE id = ?";
    $stmt = mysqli_prepare($connect, $deleteQuery);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header('Location: ../daftarMember.php');
        exit;
    } else {
        echo 'Failed to delete member';
    }
} else {
    echo 'Invalid ID';
}
?>
