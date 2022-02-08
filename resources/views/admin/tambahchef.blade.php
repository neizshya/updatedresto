<x-app-layout>

</x-app-layout><!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    @include('admin.navbar')
    @include('admin.nav')
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Tambah Chef</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Chef</li>
                  </ol>
                </nav>
              </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
            <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data" id="formchef">

                @csrf

                <div>
                    <label>Nama</label>
                    <input style="color: black;" type="text" name="name" required="" placeholder="Masukan Nama">
                </div>
                <div>
                    <label>Spesialis</label>
                    <input style="color: black;" type="text" name="speciality" required="" placeholder="Masukan Spesialis">
                </div>
                <div>
                    <label>Instagram</label>
                    <input style="color: black;" type="text" name="insta" placeholder="Masukan Instagram">
                </div>
                <div>
                    <input type="file" name="image" required="">
                </div>
                <br>

            </form>
            <button  class="btn btn-outline-light btn-fw" type="submit" form="formchef" >Simpan</button>
            <a button class="btn btn-outline-dark btn-fw" href="{{route('chef')}}">Batalkan</button></a>
        </div>

    </div>


    </div>
    </div>
</div>





@include('admin.adminscript')





</body>
</html>

