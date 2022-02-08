<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    @include('admin.navbar')
    @include('admin.nav')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Tambah Daftar Menu </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Daftar Menu</li>
              </ol>
            </nav>
          </div>
          <div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

            <form action="{{url('/uploadmakanan')}}" method="post" enctype="multipart/form-data" id="formMenu" class="forms-sample">
                @csrf
                <div class="form-group">
                    <span>Nama</span>
                    <input type="text"  name="nm_makanan" placeholder="Masukan Nama Makanan" style="color:black" required>
                </div>
                <div class="form-group">
                    <span>Harga</span>
                    <input type="text" name="harga" placeholder="Harga" style="color:black" required>
                </div>
                <div class="form-group">
                    <span>Foto</span>
                    <input type="file" name="gb_makanan" required style="color: #fff;">
                </div>
                <div class="form-group">
                    <span>Deskripsi</span>
                    <input type="text" name="deskripsi" placeholder="Masukan Deskripsi Makanan" style="color:black" required>
                </div>


            </form>
            <button  class="btn btn-outline-light btn-fw" type="submit" form="formMenu" >Simpan</button>
            <a button class="btn btn-outline-dark btn-fw" href="{{route('makanan')}}">Batalkan</button></a>
        </div>

        </div>


        </div>
        </div>
    </div>





   @include('admin.adminscript')





  </body>
</html>

