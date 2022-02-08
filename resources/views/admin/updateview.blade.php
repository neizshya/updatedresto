<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.admincss')


  </head>
  <body>
    @include('admin.navbar')
    @include('admin.nav')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Ubah Daftar Menu </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ubah Daftar Menu</li>
              </ol>
            </nav>
          </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

        <form action="{{url('/updatemenu',$data->id)}}" method="post" enctype="multipart/form-data" id="updatemenu" class="forms-sample">
            @csrf

            <div class="form-group">
                <label>Nama Menu</label>
                <input style="color: black" type="text" name="nm_makanan" value="{{$data->nm_makanan}}" >
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input style="color: black" type="num" name="harga" value="{{$data->harga}}" >
            </div>

            <div class="form-group">
                <label>Deskripsi Menu</label>
                <input style="color: black" type="text" name="deskripsi" value="{{$data->deskripsi}}">
            </div>
            <div class="form-group">
                <label>Foto Menu Sebelum Update</label>
                <img width="150" src="/FotoMakanan/{{$data->gb_makanan}}" >
            </div>
              <div class="form-group">
                <label>Foto Menu Baru</label>
                <input style="color: black" type="file" name="gb_makanan" >
            </div>

        </form>
        <button  class="btn btn-outline-light btn-fw" type="submit" form="updatemenu" >Simpan</button>
        <a button class="btn btn-outline-dark btn-fw" href="{{route('makanan')}}">Batalkan</button></a>
          </div>
        </div>
    </div>
    </div>

   @include('admin.adminscript')
  </body>
</html>
