

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
		      <label for="inputEmail4">Nama*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Email*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-"/>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Alamat*</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="-"/>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">No HP*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/>
		    </div>
		    <div class="form-group col-md-6">
			    <label for="exampleFormControlSelect1">Jenis Kelamin*</label >
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>-</option>
			      <option>Laki-Laki</option>
			      <option>Perempuan</option>
			    </select>
			  </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Username*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Password*</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="-"/>
		    </div>
		  </div>
		  <fieldset class="form-group">
		      <label for="inputAddress">Level*</label>
		      <div class="col-md-12">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1">
		          <label class="form-check-label" for="gridRadios1">
		            User Area
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
		          <label class="form-check-label" for="gridRadios2">
		            User KD
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3">
		          <label class="form-check-label" for="gridRadios3">
		            Pengelola Aset KD
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="4">
		          <label class="form-check-label" for="gridRadios4">
		            Admin KD
		          </label>
		        </div>
		    </div> <br>
		        <!-- output user area -->
			    <div id="olo1" style="display:none">
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Area*  (Wajib pilih area untuk Level User Area)</label >
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>-</option>
				      <option>Malang</option>
				      <option>Surabaya</option>
				    </select>
				  </div>
				</div>
				<!-- JS user area -->
				<script type="text/javascript">
				$(function(){
					$(":radio.form-check-input").click(function(){
						$("#olo1").hide()
						if($(this).val() == "1"){
							$("#olo1").show();
						}else{
							$("").show();
						}
					});
				});
				</script>
		  </fieldset>
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