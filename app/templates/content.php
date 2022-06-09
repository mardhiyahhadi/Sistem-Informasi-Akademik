<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'mahasiswa':
			require_once 'app/mahasiswa/views/index.php';
			break;
		case 'tambah-mahasiswa':
			require_once 'app/mahasiswa/views/create.php';
			break;
		case 'edit-mahasiswa':
			require_once 'app/mahasiswa/views/edit.php';
			break;
		case 'hapus-mahasiswa':
			require_once 'app/mahasiswa/proses/delete.php';
			break;
		case 'dosen':
			require_once 'app/dosen/views/index.php';
			break;
		case 'tambah-dosen':
			require_once 'app/dosen/views/create.php';
			break;
		case 'edit-dosen':
			require_once 'app/dosen/views/edit.php';
			break;
		case 'hapus-dosen':
			require_once 'app/dosen/proses/delete.php';
			break;
	}
} else {
	require_once 'app/dashboard/views/index.php';
}
