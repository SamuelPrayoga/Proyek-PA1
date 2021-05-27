@include('Admin.navadmin')
            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Komentar dan Saran
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>User Address</th>
                                            <th>Subjek Komentar</th>
                                            <th>Isi Komentar</th>
                                            <th>Tanggal Komentar</th>
                                            <th>Gambar</th>
                                            <th>Reply</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($komentardansaran as $y)
                                        <tr>
                                            <td>{{$y->Username}}</td>
                                            <td>{{$y->Email}}</td>
                                            <td>{{$y->UserAddress}}</td>
                                            <td>{{$y->SubjekKomentar}}</td>
                                            <td width="100%">{{$y->IsiKomentar}}</td>
                                            <td>{{$y->TanggalKomentar}}</td>
                                            <td><img src="{{url('img/Testimonial/'.$y->Gambar)}}" width="200px" height="120px" alt=""></td>
                                            <td>{{$y->reply}}</td>
                                            <td width="20%"><button type="button" class="btn btn-info" onclick="window.location.href='/editkomentar/{{$y->KomentarID}}'"><i
                                                        class="fas fa-reply"></i>
                                                    Reply</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" ><i class="fas fa-trash-alt"></i>
                                                        Hapus</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahkomentar'"><i class="fas fa-plus"></i> Tambah Data Komentar</button>
          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Hapus Data Komentar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger" onclick="window.location.href='/hapuskomentar/{{$y->KomentarID}}'">Hapus</button>
        </div>
      </div>

    </div>
  </div>

@include('Admin.footerAdmin')
