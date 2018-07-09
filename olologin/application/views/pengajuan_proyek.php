<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Form Pengajuan Proyek</h5>
      <div class="card-body">
        <form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nama Pengajuan*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Distribusi*</label>
		      <input type="text" class="form-control" id="inputPassword4" placeholder="-"/>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputAddress">Tanggal Pengajuan*</label>
		      <input type="text" class="form-control" id="inputAddress" placeholder="-"/>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Alamat*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/>
		    </div>
		  </div>
		  
		  	<div class="form-group">
		      <label for="inputEmail4">Data Aset*</label> <br>
		      <div class="form-check form-check-inline">
		        <input class="form-check-input" type="radio" name="gridRadios" id="inlineRadio1" value="1">
		        <label class="form-check-label" for="inlineRadio1">Tanah</label>
		      </div>
		      <div class="form-check form-check-inline">
		        <input class="form-check-input" type="radio" name="gridRadios" id="inlineRadio2" value="2">
		        <label class="form-check-label" for="inlineRadio2">Wisma & Rumah Dinas</label>
		      </div>
		      <div class="form-check form-check-inline">
		        <input class="form-check-input" type="radio" name="gridRadios" id="inlineRadio3" value="3">
		        <label class="form-check-label" for="inlineRadio3">Gudang</label>
		      </div>
		      <div class="form-check form-check-inline">
		        <input class="form-check-input" type="radio" name="gridRadios" id="inlineRadio4" value="4">
		        <label class="form-check-label" for="inlineRadio4">Bangunan & Kantor</label>
		      </div><br>
		    <!-- output user area -->
			    <br>
			    <div id="olo1" style="display:none">
				  <div class="form-group">
				  	<label for="inputAddress">Pilih Data Aset Tanah*</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>-</option>
				      <option>Tanah Kantor Distribusi 1 (Gedung Utama & Lahta)</option>
				    </select>
				  </div>
				</div>
				<div id="olo2" style="display:none">
				  <div class="form-group">
				  	<label for="inputAddress">Pilih Data Aset Wisma & Rumah Dinas*</label>
				    <select class="form-control" id="exampleFormControlSelect2">
				      <option>-</option>
				      <option>Rumah Jabatan General Manager</option>
				    </select>
				  </div>
				</div>
				<div id="olo3" style="display:none">
				  <div class="form-group">
				  	<label for="inputAddress">Pilih Data Aset Gudang*</label>
				    <select class="form-control" id="exampleFormControlSelect2">
				      <option>-</option>
				      <option>Rumah Jabatan General Manager</option>
				    </select>
				  </div>
				</div>
				<div id="olo4" style="display:none">
				  <div class="form-group">
				  	<label for="inputAddress">Pilih Data Aset Bangunan & Kantor*</label>
				    <select class="form-control" id="exampleFormControlSelect2">
				      <option>-</option>
				      <option>Rumah Jabatan General Manager</option>
				    </select>
				  </div>
				</div>

				<!-- JS user area -->
				<script type="text/javascript">
					$(function(){
						$(":radio.form-check-input").click(function(){
							$("#olo1, #olo2, #olo3, #olo4").hide()
							if($(this).val() == "1"){
								$("#olo1").show();
							}else if($(this).val() == "2"){
								$("#olo2").show();
							}else if($(this).val() == "3"){
								$("#olo3").show();
							}else if($(this).val() == "4"){
								$("#olo4").show();
							}
						});
					});
				</script>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail4">Nilai Pengajuan*</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="-"/><br>
		      <label for="inputEmail4">Data Pendukung*</label>
		    
	        <div class="custom-file">
			  
			  <input type="file" class="custom-file-input" id="customFile">
			  <label class="custom-file-label" for="customFile">Upload File (.zip atau .rar)</label>
			</div>

			<h6 style="color: red; margin-top: 20px;">Peringatan*</h6>
			<ol style="margin-left: -20px;">
				<li>Data Pendukung tidak boleh melebihi dari 50 MB</li>
				<li>Format data dalam bentul .zip atau .rar</li>
			</ol>
		</div>
		  <!-- <fieldset class="form-group">
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
		    </div> <br> -->
		        <!-- output user area -->
			   <!--  <div id="olo1" style="display:none">
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Area*  (Wajib pilih area untuk Level User Area)</label >
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>-</option>
				      <option>Malang</option>
				      <option>Surabaya</option>
				    </select>
				  </div>
				</div> -->
				<!-- JS user area -->
				<!-- <script type="text/javascript">
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
				</script> -->
		<!--   </fieldset> -->
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