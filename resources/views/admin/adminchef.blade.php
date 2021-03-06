<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
h1 {text-align: center;}



      </style>
   @include('admin.admincss')
  </head>
  <body>
    @include('admin.navbar')
    @include('admin.nav')
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Daftar Chef</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Chef</li>
                  </ol>
                </nav>
              </div>

            <div class="col-lg-112 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body">

            <div class="table-responsive" style="color: #fff;">
            <table class="table table-hover">
            <tr class="text-center font-bold">
            <th>Nama Chef</th>
            <th>Spesialis</th>
            <th>Instagram</th>
            <th>Foto</th>
            <th>action</th>
        </tr>

        @foreach ($data as $data)

        <tr align="center">
            <td>{{ $data->name }}</td>
            <td>{{ $data->speciality }}</td>
            <td>{{ $data->insta }}</td>
            <td><img height="300" width="300" src="/fotochef/{{ $data->image}}"></td>
            <td>
                <a href="{{ url('/pdchef',$data->id) }}"class="btn btn-sm btn-warning" >Update</a><br><br>
                <a href="{{ url('/deletechef',$data->id) }}"class="btn btn-sm btn-danger">Delete</a></td>
        </tr>

        @endforeach


    </table>
</div>
                  </div>
                </div>
            </div>
        </div>

   @include('admin.adminscript')
  </body>
</html>
