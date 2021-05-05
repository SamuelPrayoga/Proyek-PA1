@include('Admin.navadmin')
            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Struktur Organisasi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Alamat</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($strukturorganisasi as $org)
                                        <tr>
                                            <td>{{$org->organisasiID}}</td>
                                            <td>{{$org->nama}}</td>
                                            <td>{{$org->jabatan}}</td>
                                            <td>{{$org->status}}</td>
                                            <td>{{$org->alamat}}</td>
                                            <td><img src="{{url('img/organisasi/'.$org->gambar)}}" width="80px" height="80px" alt=""></td>
                                            <td width="20%"><button type="button" class="btn btn-primary" onclick="window.location.href='/editorganisasi/{{$org->organisasiID}}'"><i
                                                        class="fas fa-edit"></i>
                                                    Edit</button>
                                                <button type="button" class="btn btn-danger" onclick="window.location.href='/hapusorganisasi/{{$org->organisasiID}}'" ><i class="fas fa-trash-alt"></i>
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
            <button type="button" class="btn btn-info" onclick="window.location.href='/tambahorganisasi'"><i class="fas fa-plus"></i> Tambah Data Komentar</button>


@include('admin.footerAdmin')
