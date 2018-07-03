<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container">
    <div class="card">
      <h5 class="card-header">Area</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">ID*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="Tulis ID" required>
		    </div>
		    <div class="form-group col-md-6">
		      <label>Nama*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Password" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Alamat*</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
		  </div>
		</form>
      </div>
	  <div class="card-footer text-muted">
	   <button type="button" class="btn btn-primary">Simpan</button>
	   <button type="button" class="btn btn-danger">Batal</button>
	  </div>
    </div>
  </div>
</body>