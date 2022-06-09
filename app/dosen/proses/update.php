<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$dsn = $_POST['dsn'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$gol = $_POST['gol'];
$jk = $_POST['jk'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE dosen SET nip = '$nip', dsn = '$dsn', alamat = '$alamat', telp = '$telp', gol = '$gol', jk = '$jk', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=dosen";</script>';
} else {
  echo mysqli_error($conn);
}
