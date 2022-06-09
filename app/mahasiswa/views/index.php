<?php
require_once 'app/functions/MY_model.php';
$mahasiswas = get("SELECT * FROM mahasiswa");

$no = 1;

$title = 'mahasiswa';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Mahasiswa</h4>
          <a href="?page=tambah-mahasiswa" class="btn btn-primary round waves-effect waves-light">
            Tambah Data
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mahasiswas as $mahasiswa) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $mahasiswa['mhs']; ?></td>
                      <td><?= $mahasiswa['nim']; ?></td>
                      <td><?= ($mahasiswa['jk'] == 'l' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td><?= $mahasiswa['alamat']; ?></td>
                      <td><?= $mahasiswa['telp']; ?></td>
                      <td><?= $mahasiswa['jurusan']; ?></td>
                      <td>
                        <a href="?page=edit-mahasiswa&id=<?= $mahasiswa['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-mahasiswa&id=<?= $mahasiswa['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'mahasiswa'; ?>