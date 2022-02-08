<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

      <style>
h1 {text-align: center;}

      </style>
          <base href="/public">
   @include('admin.admincss')
  </head>
  <body>
    @include('admin.navbar')
    @include('admin.nav')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Ubah Chef </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ubah  Chef</li>
              </ol>
            </nav>
          </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body">
    <form action="{{ url('/updfoodchef',$data->id) }}" method="Post" enctype="multipart/form-data" id="updatechef">
        @csrf

        <div class="form-group">
            <span>Nama Chef</span><br>
            <input style="color: black;" type="text" name="name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <span>Spesialis</span><br>
            <input style="color: black;" type="text" name="speciality" value="{{ $data->speciality }}">
        </div>
        <div class="form-group">
            <span>Instagram</span><br>
            <input style="color: black;" type="text" name="insta" value="{{$data->insta}}">
        </div>
        <div class="form-group">
            <label>Foto Lama</label>
            <img width="150" src="/fotochef/{{ $data->image }}">
        </div>
        <div class="form-group">
            <span>Foto Baru</span><br>
            <input type="file" name="image" required="">
        </div>

    </form>
    <br>
    <button  class="btn btn-outline-light btn-fw" type="submit" form="updatechef" >Simpan</button>
        <a button class="btn btn-outline-dark btn-fw" href="{{route('chef')}}">Batalkan</button></a>

    </div>
   @include('admin.adminscript')
  </body>
</html>
