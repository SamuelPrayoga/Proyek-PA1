@include('Admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Reply Komentar</h1>
        <div class="card-body">


            <form action="{{route('datakomentar.updatekomentar',$editkomentar->KomentarID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="Username" class="form-control" value="{{$editkomentar->Username}}">
                </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="Email" class="form-control" value="{{$editkomentar->Email}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">UserAddress</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="UserAddress" class="form-control" value="{{$editkomentar->UserAddress}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Subjek Komentar</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="SubjekKomentar" class="form-control" value="{{$editkomentar->SubjekKomentar}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Isi Komentar</label>
                    <div class="col-sm-9">
                        <textarea name="IsiKomentar" cols="20" rows="5" style="width: 100%;">{{$editkomentar->IsiKomentar}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Tanggal Komentar</label>
                    <div class="col-sm-9">
                        <input type="date" name="TanggalKomentar" class="form-control" value="{{$editkomentar->TanggalKomentar}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Reply Komentar</label>
                    <div class="col-sm-9">
                        <textarea name="reply" cols="20" rows="5" style="width: 100%;">{{$editkomentar->reply}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="Gambar" type="file" id="formFileMultiple" multiple >{{$editkomentar->Gambar}}
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

@include('Admin.footerAdmin')
