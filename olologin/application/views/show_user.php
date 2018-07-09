    <div class="" style="margin: 10px 70px 0 70px;">>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <h5 class="card-header text-white bg-primary"><i class="fas fa-table"></i> Data Tabel User</h5>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr style="text-align: center;">
                  <th >No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>JK</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  foreach ($user as $a) {
                    echo "<tr>
                          <td style='text-align: center;'>$no</td>
                          <td>$a->nama</td>
                          <td>$a->email</td>
                          <td>$a->alamat</td>
                          <td>+62-$a->nohp</td>
                          <td>$a->jenkel</td>
                          <td>$a->username</td>
                          <td style='text-align: center;'>$a->status</td>
                          <td style='text-align: center;'>".anchor('user/edit/'.$a->id_user,'<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></button>')." 
                              ".anchor('user/hapus/'.$a->id_user,'<button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>')."</td>
                        </tr>";
                        $no++;
                    }
                  ?>        
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>