<?php
require_once 'app/functions/MY_model.php';

$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
$count_mahasiswa = mysqli_num_rows($mahasiswa);

$dosen = mysqli_query($conn, "SELECT * FROM dosen");
$count_dosen = mysqli_num_rows($dosen);

// $_SESSION['title'] = 'Dashboard';
?>
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_mahasiswa; ?></h2>
          <p class="mb-0">mahasiswa</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_dosen; ?></h2>
          <p class="mb-0">dosen</p>
        </div>
      </div>
    </div>

</section>
<!-- Dashboard Analytics end -->
<!-- <script>
  var count_dokter = '<?php echo $count_dokter; ?>';
</script> -->
<?php
$addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
$prepend_style = ['assets/css/pages/dashboard.css'];
?>