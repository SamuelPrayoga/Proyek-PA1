@include('Admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Edit Organisasi</h1>
        <div class="card-body">


            <form action="{{route('dataorganisasi.updateorganisasi',$editorganisasi->organisasiID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{$editorganisasi->nama}}">
                </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="jabatan" aria-label="Default select example" >
                            <option value="{{$editorganisasi->jabatan}}">{{$editorganisasi->jabatan}}</option>
                            <option value="Lurah">Lurah</option>
                            <option value="Sekretaris Lurah">Sekretaris Lurah</option>
                            <option value="Kasi. Pemerintahan">Kasi. Pemerintahan</option>
                            <option value="Kasi. Pembangunan">Kasi. Pembangunan</option>
                            <option value="Kasi. Pelayanan Umum">Kasi. Pelayanan Umum</option>
                            <option value="STAF">STAF</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                            <option value="PNS/ASN">PNS/ASN</option>
                            <option value="Non-PNS/ASN">Non-PNS/ASN</option>
                            <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" cols="20" rows="5" style="width: 100%;">{{$editorganisasi->alamat}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" multiple >{{$editorganisasi->gambar}}
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

@include('Admin.footerAdmin')
