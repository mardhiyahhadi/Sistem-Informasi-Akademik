<?php
session_start();
require_once '../../functions/MY_model.php';
$dsn = $_POST['dsn'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$gol = $_POST['gol'];
$jk = $_POST['jk'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO dosen VALUES('', '$nip', '$dsn', '$jk',  '$alamat', '$telp', '$gol', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=dosen";</script>';
} else {
  echo mysqli_error($conn);
}
