<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM mahasiswa WHERE id = '$id'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=mahasiswa';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=mahasiswa';</script>";
}
