<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form User</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Nama*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Email*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Alamat*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">No HP*</label>
		      <div class="input-group">
		        <div class="input-group-prepend">
		          <div class="input-group-text">+62</div>
		        </div>
		        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		      </div>
		    </div>
		  </div>
	      <div class="form-group">
		    <label for="exampleFormControlSelect1">Jenis Kelamin*</label >
		    <select class="form-control" id="exampleFormControlSelect1">
		      <option>Pilih Jenis Kelamin</option>
		      <option>Laki-Laki</option>
		      <option>Perempuan</option>
		    </select>
		  </div>
		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Username*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Alamat">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputAddress">Password*</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Alamat">
			  </div>
		  </div>
		</form>
		<form>
		Pilih Level : 
		<input type="radio" name="rad" id="rad1" value="1" class="rad"/> Form1 
		<input type="radio" name="rad" id="rad2" value="2" class="rad"/> Form2
			<!-- form yang mau ditampilkan-->
			<div id="form1" style="display:none">
				Input1: <input name="input" type="text"/>
			</div>
			<div id="form2" style="display:none">
				Input2: <input name="input" type="text"/>
			</div>
		</form>
		<!-- tambahkan jquery-->
		
		<script type="text/javascript">
			$(function(){
				$(":radio.rad").click(function(){
					$("#form1, #form2").hide()
					if($(this).val() == "1"){
						$("#form1").show();
					}else{
						$("#form2").show();
					}
				});
			});
		</script>
      </div>
	  <div class="card-footer text-muted text-center">
	   <button type="button" class="btn btn-primary">Simpan</button>
	   <button type="button" class="btn btn-danger">Reset</button>
	  </div>
    </div>
  </div>
  <br>
</body>