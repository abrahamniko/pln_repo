<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="" style="margin: -40px 70px 0 70px;">
    <div class="card">
      <h5 class="card-header text-white bg-primary"><i class="fas fa-stream"></i> Form Area</h5>
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
		       		echo '<input type="text" class="form-control" name="id_area" value="'.$no_id['id_area'].'" placeholder="Masukkan ID" required/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="id_area" placeholder="Masukkan ID" required/>';		 
		       	} ?>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Nama*</label>
		      <?php 
		      	if($this->session->userdata('aksi')==true) {
		       		echo '<input type="text" class="form-control" name="nama_area" value="'.$no_id['nama_area'].'" placeholder="Masukkan ID" required/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="nama_area" placeholder="Masukkan Nama" required/>';		 
		       	} ?>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Alamat*</label>
		    <?php 
		      	if($this->session->userdata("aksi")==true) {
		       		echo '<input type="text" class="form-control" name="alamat" value="'.$no_id['alamat'].'" placeholder="Masukkan Alamat" required/>';	
		       	}else{
		       		echo '<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required/>';		 
		       	} ?>
		  </div>
		
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="submit" class="btn btn-primary">Simpan</button>
	  </div>
    </div>
    <?php echo form_close();?>
  </div>
</body>