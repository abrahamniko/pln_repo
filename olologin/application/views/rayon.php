<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Rayon</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		      <div class="form-group form-group col-md-6">
			    <label for="exampleFormControlSelect1">ID Area*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>Pilih Area</option>
			      <option>2</option>
			      <option>3</option>
			      <option>4</option>
			      <option>5</option>
			    </select>
			  </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">ID Rayon*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
		    </div>
		  </div>
		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Nama*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Alamat">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Alamat*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Alamat">
			  </div>
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