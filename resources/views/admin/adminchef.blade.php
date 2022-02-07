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
    <div class="content-wrapper">
        <div class="container-scroller" style="width: 102%">
            @include('admin.navbar')
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body">

                    <h4 class="card-title">Daftar Chef</h4>

<div class="table">
            <table class="w-full">
            <tr class="text-center font-bold">
            <th class="border px-5 py-2">Nama Chef</th>
            <th class="border px-5 py-2">Spesialis</th>
            <th class="border px-5 py-2">Foto</th>
            <th class="border px-5 py-2">action</th>
        </tr>

        @foreach ($data as $data)

        <tr align="center">
            <td class="border px-5 py-2">{{ $data->name }}</td>
            <td class="border px-5 py-2">{{ $data->speciality }}</td>
            <td ><img height="300" width="300" src="/fotochef/{{ $data->image}}"></td>
            <td class="border px-5 py-2">
                <a href="{{ url('/updatechef',$data->id) }}"class="btn btn-sm btn-danger" >Update</a><br><br>
                <a href="{{ url('/deletechef',$data->id) }}"class="btn btn-sm btn-warning">Delete</a></td>
        </tr>

        @endforeach


    </table>
</div>
                  </div>
                </div>
            </div>
        </div>
    </div>


    </div>
   @include('admin.adminscript')
  </body>
</html>
