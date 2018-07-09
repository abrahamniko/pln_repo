<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Lokasi</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputPassword4">ID*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputPassword4">Nama*</label>
		      <input type="textarea" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="exampleFormControlSelect1">Plant*</label >
		      <select class="form-control" id="exampleFormControlSelect1">
		        <option>-</option>
		        <option>OLOLOLO</option>
		      </select>
			</div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Alamat*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Kode Pos*</label>
		      <input type="textarea" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputPassword4">Kecamatan*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputPassword4">Kabupaten*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputPassword4">Provinsi*</label>
		      <input type="textarea" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Latitude*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Longitude*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
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