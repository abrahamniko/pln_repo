<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard')?>"><i class="fas fa-tachometer-alt"></i> Beranda</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('area')?>"><i class="fas fa-map-marked-alt"></i> Area</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('rayon')?>"><i class="fas fa-map-marker-alt"></i> Rayon</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('user')?>"><i class="fas fa-user"></i> User</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-hotel"></i> Aset
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('tanah')?>">Tanah</a>
          <a class="dropdown-item" href="<?php echo site_url('gudang')?>">Gudang</a>
          <a class="dropdown-item" href="<?php echo site_url('bangunan')?>">Bangunan</a>
          <a class="dropdown-item" href="<?php echo site_url('wisma')?>">Wisma/Rumah</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-clipboard-list"></i> Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Status Kepemilikan</a>
          <a class="dropdown-item" href="#">Status Kelayakan</a>
          <a class="dropdown-item" href="#">Status Layer</a>
          <a class="dropdown-item" href="#">Status Pendayagunaan</a>
          <a class="dropdown-item" href="#">Status Rumah</a>
          <a class="dropdown-item" href="#">Status Tanah</a>
          <a class="dropdown-item" href="#">Status Terjual</a>
          <a class="dropdown-item" href="#">Plant</a>
          <a class="dropdown-item" href="#">Provinsi</a>
          <a class="dropdown-item" href="#">Lokasi</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-building"></i> Pengajuan Proyek</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-book"></i> Rekap</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i>  Grafik</a>
      </li>
    </ul>
  </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="far fa-user"></i> <?php echo $this->session->userdata('username');?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo 'login/logout'?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="far fa-bell"></i> Pesan</a>
        </li>
      </ul>
  </div>
</nav>