<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
          <div class="brand-logo"></div>
          <h2 class="brand-text mb-0">SIAKAD</h2>
        </a></li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="<?php echo is_active(''); ?> nav-item">
        <a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>

      <li class="<?php echo is_active('mahasiswa'); ?> nav-item"><a href="?page=mahasiswa"><i class="feather icon-user"></i><span class="menu-title" data-i18n="mahasiswa">Mahasiswa</span></a>
      </li>

      <li class="<?php echo is_active('dosen'); ?> nav-item"><a href="?page=dosen"><i class="feather icon-user"></i><span class="menu-title" data-i18n="dosen">Dosen</span></a>
      </li>

    </ul>
  </div>
</div>
<!-- END: Main Menu-->