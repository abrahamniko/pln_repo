    <div class="container">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <h5 class="card-header">Data Tabel Area</h5>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr style="text-align: center;">
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
                          <td style='text-align: center;'>$a->no_id</td>
                          <td>$a->id_area</td>
                          <td>$a->nama_area</td>
                          <td>$a->alamat</td>
                          <td style='text-align: center;'>$a->status</td>
                          <td style='text-align: center;'>".anchor('area/edit/'.$a->no_id,'<button type="button" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></button>')." 
                              ".anchor('area/hapus/'.$a->no_id,'<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>')."</td>
                        </tr>";
                    }
                  ?>

                  <!-- <td> -->
                    <!-- Button trigger modal -->
                    <!-- <a href="#" class="badge badge-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-check"></i> Aktif</a> -->
                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    </div> -->

                    <!-- Button trigger modal -->
                  <!--   <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-times"></i> Nonaktif</a> -->
                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  </td>-->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>