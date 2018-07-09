    <div style="margin: 30px 70px 0 70px;">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <h5 class="card-header text-white bg-primary"><i class="fas fa-table"></i> Data Tabel Rayon</h5>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr style="text-align: center;">
                  <th>No</th>
                  <th>ID</th>                  
                  <th>Area</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  foreach ($rayon as $a) {
                    echo "<tr>
                          <td style='text-align: center;'>$no</td>
                          <td>$a->id_rayon</td>
                          <td>$a->id_area".'-'."$a->nama_area</td>
                          <td>$a->nama_rayon</td>
                          <td>$a->alamat</td>
                          <td style='text-align: center;'>$a->status</td>
                          <td style='text-align: center;'>".anchor('rayon/edit/'.$a->no_id,'<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></button>')." 
                              ".anchor('rayon/hapus/'.$a->no_id,'<button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>')."</td>
                        </tr>";
                        $no++;
                    }
                  ?>
                    <!-- Button trigger modal 
                    <a href="#" class="badge badge-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-check"></i> Aktif</a>
                    //Modal 
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin data area dinonaktifkan ?</div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Yakin</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    Button trigger modal
                    <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-times"></i> Nonaktif</a>
                    //Modal
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">Apakah anda yakin data area diaktifkan ?</div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Yakin</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></i></button>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>