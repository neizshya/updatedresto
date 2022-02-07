<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="content-wrapper">
    <div class="container-scroller" style="width:fit-content;">
    @include('admin.navbar')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

            <h4 class="card-title">Tambah Daftar Menu</h4>

        <div class="container" id="container-menu">
            <form action="{{url('/uploadmakanan')}}" method="post" enctype="multipart/form-data" id="formMenu" class="forms-sample">
                @csrf
                <div class="form-group">
                    <span>Nama</span>
                    <input type="text" name="nm_makanan" placeholder="Masukan Nama Makanan" required>
                </div>
                <div class="form-group">
                    <span>Harga</span>
                    <input type="text" name="harga" placeholder="Harga" style="width: 150px;" required>
                </div>
                <div class="form-group">
                    <span>Foto</span>
                    <input type="file" name="gb_makanan" required style="color: #fff; font-weight: bold;">
                </div>
                <div class="form-group">
                    <span>Deskripsi</span>
                    <input type="text" name="deskripsi" placeholder="Masukan Deskripsi Makanan" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-primary btn-fw" type="submit" id="simpanMenu" value="Simpan">Simpan</button>
                </div>
            </form>
        </div>

        </div>


        </div>
        </div>
    </div>





   @include('admin.adminscript')





  </body>
</html>

