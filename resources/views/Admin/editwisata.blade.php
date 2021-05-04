@include('Admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Edit Wisata</h1>
        <div class="card-body">
            <form action="{{route('infowisata.update',$editwisata->WisataID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Wisata</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="NamaWisata" class="form-control" value="{{$editwisata->NamaWisata}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Info Wisata</label>
                    <div class="col-sm-9">
                        <textarea name="InfoWisata"  id="formFileMultiple" cols="20" rows="2" style="width: 100%;">{{$editwisata->InfoWisata}}</textarea>
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar Wisata</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" name="GambarWisata" type="file" id="formFileMultiple" multiple >{{$editwisata->GambarWisata}}
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
            </form>

        </div>
    </div>
</div>

@include('admin.footerAdmin')
