<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$mhs = $_POST['mhs'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE mahasiswa SET nim = '$nim', mhs = '$mhs', alamat = '$alamat', telp = '$telp', jk = '$jk', jurusan = '$jurusan', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=mahasiswa";</script>';
} else {
  echo mysqli_error($conn);
}
