@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Tambah Wisata</h1>
        <div class="card-body">


            <form action="{{Route('blog.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Wisata</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="NamaWisata" class="form-control" >
                </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Info Wisata</label>
                    <div class="col-sm-9">
                        <textarea name="InfoWisata" id="" cols="20" rows="5" style="width: 100%;"></textarea>
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar Wisata</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" required="required"  name="GambarWisata" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Tambah</button>
            </form>
        </div>
    </div>
</div>

@include('Admin.footerAdmin')
