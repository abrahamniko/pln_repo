<style type="text/css" media="screen">
  li .nav-link:hover{
    font-weight: bold;
  }
</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light rounded" style="background-color: #000;">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url("assets/images/pln1.png")?>" style="height: 7%;" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>dashboard">Beranda</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>area">Area</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>rayon">Rayon</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>user">User</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aset</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url()?>aset_tanah">Tanah</a>
          <a class="dropdown-item" href="<?php echo base_url()?>aset_gudang">Gudang</a>
          <a class="dropdown-item" href="<?php echo base_url()?>aset_bangunan">Bangunan</a>
          <a class="dropdown-item" href="<?php echo base_url()?>aset_wisma">Wisma/Rumah</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url()?>status_kepemilikan">Status Kepemilikan</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_kelayakan">Status Kelayakan</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_layer">Status Layer</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_pendayagunaan">Status Pendayagunaan</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_rumah">Status Rumah</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_tanah">Status Tanah</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_terjual">Status Terjual</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_plant">Plant</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_provinsi">Provinsi</a>
          <a class="dropdown-item" href="<?php echo base_url()?>status_lokasi">Lokasi</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>pengajuan_proyek">Pengajuan Proyek</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>rekap">Rekap</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>grafik">Grafik</a>
      </li>
    </ul>
  </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="far fa-user"></i> <?php echo $this->session->userdata('username');?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('login/logout')?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="far fa-bell"></i> Pesan</a>
        </li>
      </ul>
  </div>
</nav>