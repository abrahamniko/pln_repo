    <div class="container">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <h5 class="card-header">Data Tabel Area</h5>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($area as $a) {
                    echo "<tr>
                        <td>$a->no_id</td>
                        <td>$a->id_area</td>
                        <td>$a->nama_area</td>
                        <td>$a->alamat</td>
                        <td>$a->status</td>
                        <td>".anchor('area/edit/'.$a->no_id,'EDIT')." 
                            ".anchor('area/hapus/'.$a->no_id,'HAPUS')."</td>
                      </tr>";
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>