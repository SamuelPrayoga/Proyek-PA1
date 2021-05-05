@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Tambah Organisasi</h1>
        <div class="card-body">


            <form action="{{Route('organisasi.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama" class="form-control">
                </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="jabatan" aria-label="Default select example" >
                            <option value="lurah">Lurah</option>
                            <option value="NON-PNS">Wakil Lurah</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Wakil Bendahara">Wakil Bendahara</option>
                            <option value="Anggota">Anggota</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                            <option value="PNS">PNS</option>
                            <option value="NON-PNS">NON-PNS</option>
                            <option value="Pegawai">Pegawai</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea name="alamat" cols="20" rows="5" style="width: 100%;"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
            </form>
        </div>
    </div>
</div>

@include('admin.footeradmin')
