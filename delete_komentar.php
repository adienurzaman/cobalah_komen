<?php
session_start();
include 'koneksi.php';
include 'csrf.php';
$id = $_POST['komentar_id'];
$query = "DELETE FROM tbl_komentar WHERE komentar_id = '$id' ";
$data = $db1->prepare($query);
if ($data->execute()) {
    $json['status'] = true;
} else {
    $json['status'] = false;
}

echo json_encode($json);
