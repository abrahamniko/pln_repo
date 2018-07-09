<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="" style="margin: -40px 70px 0 70px;">
    <div class="card">
      <h5 class="card-header text-white bg-primary"><i class="fas fa-stream"></i> Form Rayon</h5>
      <div class="card-body">
        <?php
      		if($this->session->userdata('aksi')==true) {
         		echo form_open('rayon/edit_simpan');
            	echo form_hidden('no_id',$no_id['no_id']);
            }else{
            	echo form_open('rayon/input_simpan');
            } ?>
		  <div class="form-row">
		      <div class="form-group col-md-6">
			    <label>ID Area*</label ><?php if($this->session->userdata('aksi')==true) { echo ' (Sebelumnya : '.$no_id['id_area'].'-'.$no_id['nama_area'].')';}?>
			    <select class="form-control" name="no_id_area" required>
			      <?php echo "<option value=''>Pilih Area</option>";
		       			foreach ($list as $a) {
                    	echo '<option value='.$a->no_id.'>'.$a->id_area.'-'.$a->nama_area.'</option>';
                    }
		       	?>	      
			    </select>
			  </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">ID Rayon*</label>
		       <?php 
		      	if($this->session->userdata('aksi')==true) {
		      		echo '<input type="text" class="form-control" name="id_rayon" value="'.$no_id['id_rayon'].'" placeholder="Masukan ID Rayon" required>';
		       	}else{
		       		echo '<input type="text" class="form-control" name="id_rayon" placeholder="Masukan ID Rayon" required>';	 
		       	} ?>		     
		    </div>
		  </div>
		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Nama*</label>
			    <?php 
		      	if($this->session->userdata('aksi')==true) {
		      		echo '<input type="text" class="form-control" name="nama_rayon" value="'.$no_id['nama_rayon'].'" placeholder="Masukan Nama Rayon" required>';
		       	}else{
		       		echo '<input type="text" class="form-control" name="nama_rayon" placeholder="Masukan Nama Rayon" required>';	 
		       	} ?>			  
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Alamat*</label>
			    <?php 
		      	if($this->session->userdata('aksi')==true) {
		      		echo '<input type="text" class="form-control" name="alamat" value="'.$no_id['alamat'].'" placeholder="Masukan Nama Rayon" required>';
		       	}else{
		       		echo '<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>';	 
		       	} ?>	
			  </div>
		  </div>
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="submit" class="btn btn-primary">Simpan</button>
	   <?php echo form_close();?>
	  </div>
    </div>
  </div>
</body>