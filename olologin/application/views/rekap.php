<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Rekap Proyek</h5>
      <div class="card-body">
        <form>
		    <div class="form-row">
		      <div class="form-group col-md-3">
		        <input type="text" class="form-control" id="inputPassword4" placeholder="Dari Tanggal">
		      </div>
		      <div class="form-group col-md-3">
		        <input type="text" class="form-control" id="inputPassword4" placeholder="Sampai Tanggal">
		      </div>&nbsp;
          <div class="form-group">
  	        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Tampilkan</button> &nbsp;
          </div>
          <div class="form-group">
  	        <button type="reset" class="btn btn-success"><i class="fas fa-download"></i> Cetak PDf</button>
          </div>
        </div>
      </form>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Distribusi</th>
                  <th>Rayon</th>
                  <th>Area</th>
                  <th>Alamat</th>
                  <th>Tahun</th>
                  <th>Nilai (Rp)</th>
                  <th>Persetujuan</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  <td>Edinburgh</td>
                  
                </tr>
              </tbody>
            </table>
          </div>

    </div>
    </div>
  </div>
  <br>