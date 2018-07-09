<head>
    <title><?= $title ?></title>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <h5 class="card-header">Grafik Proyek</h5>
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

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    </div>
  </div>
  <br>