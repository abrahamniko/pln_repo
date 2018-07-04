<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Area</h5>
      <div class="card-body">
      	<?php
      		if($this->session->userdata('aksi')==true) {
         		echo form_open('area/edit_simpan');
            	echo form_hidden('no_id',$no_id['no_id']);
            }else{
            	echo form_open('area/input_simpan');
            } ?>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">ID*</label>
		      <?php 
		      	if($this->session->userdata('aksi')==true) {
		       		echo '<input type="text" class="form-control" name="id_area" value="'.$no_id['id_area'].'" placeholder="Masukkan ID"/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="id_area" placeholder="Masukkan ID"/>';		 
		       	} ?>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Nama*</label>
		      <?php 
		      	if($this->session->userdata('aksi')==true) {
		       		echo '<input type="text" class="form-control" name="nama_area" value="'.$no_id['nama_area'].'" placeholder="Masukkan ID"/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="nama_area" placeholder="Masukkan Nama"/>';		 
		       	} ?>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Alamat*</label>
		    <?php 
		      	if($this->session->userdata("aksi")=='edit') {
		       		echo '<input type="text" class="form-control" name="alamat" value="'.$no_id['alamat'].'" placeholder="Masukkan Alamat"/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"/>';		 
		       	} ?>
		  </div>
		
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="submit" class="btn btn-primary">Simpan</button>
	   <button href="<?php echo site_url('area')?>" type="submit" class="btn btn-danger">Reset</button>
	  </div>
    </div>
    <?php echo form_close();?>
  </div>
  <br>
</body>