<?php
require 'connect.php';

$id = $_GET['id'];

$queryDelete = "DELETE FROM pasien WHERE id_pasien = $id";
$resultDelete = mysqli_query($conn, $queryDelete);
if ($resultDelete) {
    header('Location: ../view/pasien.php');
} else {
    echo "Gagal";
}
?>