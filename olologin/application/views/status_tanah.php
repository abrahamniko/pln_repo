<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Status Tanah</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">ID*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Deskripsi*</label>
		      <input type="textarea" class="form-control" id="inputPassword4" placeholder="-">
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