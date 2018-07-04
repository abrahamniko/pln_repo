<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Bangunan</h5>
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
			  <div class="form-group col-md-3">
			    <label for="inputAddress">Harga*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			  <div class="form-group col-md-3">
			    <label for="inputAddress">Luas*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			  <div class="form-group col-md-3">
			    <label for="inputAddress">No. IMB*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="-">
			  </div>
			  <div class="form-group col-md-3">
			    <label for="exampleFormControlSelect1">Status terjual*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>-</option>
			      <option>Proses Lelang</option>
			      <option>Tidak Dijual</option>
			      <option>Belum terjual</option>
			      <option>Terjual</option>
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
  <br>
</body>