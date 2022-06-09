<?php
require_once 'app/functions/MY_model.php';
$dosens = get("SELECT * FROM dosen");

$no = 1;

$title = 'dosen';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Dosen</h4>
          <a href="?page=tambah-dosen" class="btn btn-primary round waves-effect waves-light">
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
                    <th>NIP</th>
                    <th>Gol/Pangkat</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dosens as $dosen) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dosen['dsn']; ?></td>
                      <td><?= $dosen['nip']; ?></td>
                      <td><?= $dosen['gol']; ?></td>
                      <td><?= ($dosen['jk'] == 'l' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td><?= $dosen['alamat']; ?></td>
                      <td><?= $dosen['telp']; ?></td>
                      <td>
                        <a href="?page=edit-dosen&id=<?= $dosen['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-dosen&id=<?= $dosen['id']; ?>" class="btn-hapus">
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
<?php $title = 'dosen'; ?>