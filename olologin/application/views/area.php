<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Area</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">ID*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan ID"/>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Nama*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan Nama"/>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Alamat*</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Alamat"/>
		  </div>
		</form>
		
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="button" class="btn btn-primary">Simpan</button>
	   <button type="button" class="btn btn-danger">Reset</button>
	  </div>
    </div>
  </div>
  <br>
</body>