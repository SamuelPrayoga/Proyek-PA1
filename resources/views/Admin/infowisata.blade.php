@include('Admin.navadmin')
            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Objek Wisata
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Wisata</th>
                                            <th>Info Wisata</th>
                                            <th>Gambar Wisata</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wisata as $wisata)
                                        <tr>
                                            <td>{{$wisata->NamaWisata}}</td>
                                            <td>{{$wisata->InfoWisata}}</td>
                                            <td><img src="{{url('img/blog/'.$wisata->GambarWisata)}}" width="120px" height="90px" alt=""></td>
                                            <td width="20%"><button type="button" class="btn btn-warning" onclick="window.location.href='/infowisata/editwisata/{{$wisata->WisataID}}'"><i
                                                        class="fas fa-edit"></i>
                                                    Edit</button>
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
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahwisata'"><i class="fas fa-plus"></i> Tambah Data Wisata</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger" onclick="window.location.href='/infowisata/delete/{{$wisata->WisataID}}'">Hapus</button>
        </div>
      </div>
    </div>
  </div>

@include('Admin.footerAdmin')
