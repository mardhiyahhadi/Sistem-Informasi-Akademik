<?php
session_start();
require_once '../../functions/MY_model.php';
$mhs = $_POST['mhs'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO mahasiswa VALUES('', '$nim', '$mhs', '$jk',  '$alamat', '$telp', '$jurusan', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=mahasiswa";</script>';
} else {
  echo mysqli_error($conn);
}
