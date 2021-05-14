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
                                                <button type="button" class="btn btn-danger" onclick="window.location.href='/infowisata/delete/{{$wisata->WisataID}}'" ><i class="fas fa-trash-alt"></i>
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


@include('admin.footerAdmin')
