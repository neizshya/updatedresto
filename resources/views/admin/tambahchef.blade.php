<x-app-layout>

</x-app-layout><!DOCTYPE html>
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

            <h4 class="card-title">Tambah Chef</h4>
            <form action="{{ url('/uploadchef') }}" method="Post" enctype="multipart/form-data">

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
                    <input type="file" name="image" required="">
                </div>
                <br>
                <div>
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

