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
    <div class="content-wrapper">
        <div class="container-scroller" style="width: 102%">
            @include('admin.navbar')
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body">

                    <h4 class="card-title">Update Chef</h4>
    <form action="{{ url('/updatefoodchef',$data->id) }}" method="Post" enctype="multipart/form-data">

        @csrf

        <div>
            <label>Nama Chef</label>
            <input style="color: black;" type="text" name="name" value="{{ $data->name }}">
        </div>
        <div>
            <label>Spesialis</label>
            <input style="color: black;" type="text" name="speciality" value="{{ $data->speciality }}">

        </div>
        <div>
            <label>Foto Lama</label>
            <img height="200" widht="200" src="/fotochef/{{ $data->image }}">
        </div>
        <div>
            <label>Foto Baru</label>
            <input type="file" name="image" required="">
        </div>
        <div>
            <input style="color: red;" type="submit" value="Update Chef">
        </div>
    </form>

    </div>
   @include('admin.adminscript')
  </body>
</html>
