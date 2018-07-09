<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="" style="margin: -40px 70px 0 70px;">
    <div class="card">
      <h5 class="card-header text-white bg-primary"><i class="fas fa-stream"></i> Form Wisma/Rumah</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">ID*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Nama*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Tanah*</label >
		    <select class="form-control" id="exampleFormControlSelect1">
		      <option>-</option>
		      <option>Tanah Kantor Distribusi 1 (Gedung Utama & Lahta)</option>
		    </select>
		  </div>
		  <div class="form-row">
			  <div class="form-group col-md-4">
			    <label for="inputAddress">Harga*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="inputAddress">Luas*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="inputAddress">No. IMB*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			</div>
			<div class="form-row">
			  <div class="form-group col-md-4">
			    <label for="exampleFormControlSelect1">Status Terjual*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>-</option>
			      <option>Proses Lelang</option>
			      <option>Tidak Dijual</option>
			      <option>Belum terjual</option>
			      <option>Terjual</option>
			    </select>
			  </div>
			  <div class="form-group col-md-4">
			    <label for="exampleFormControlSelect1">Status Layak*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>-</option>
			      <option>Layak</option>
			      <option>Tidak Layak</option>
			    </select>
			  </div>
			  <div class="form-group col-md-4">
			    <label for="exampleFormControlSelect1">Status Rumah*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>-</option>
			      <option>Rumah Jabatan</option>
			      <option>Rumah Operasional 1</option>
			      <option>Rumah Operasional 2</option>
			      <option>Rumah Operasional 3</option>
			      <option>Wisma</option>
			    </select>
			  </div>
		  </div>
		</form>
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="submit" class="btn btn-primary">Simpan</button>
	   <button type="reset" class="btn btn-danger">Reset</button>
	  </div>
    </div>
  </div>
</body>