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
                <h3 class="page-title"> Reservasi</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
                  </ol>
                </nav>
              </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

    <div class="table-responsive" style="color: #fff;">
        <table class="table table-hover">
            <tr class="text-center font-bold">
                <th >Nama</th>
                <th >Email</th>
                <th >No HP</th>
                <th >Tanggal</th>
                <th >Waktu</th>
                <th >Pesan</th>
                <th >Action</th>
            </tr>

            @foreach ($data as $data)


            <tr align='center'>
                <td >{{ $data->name }}</td>
                <td >{{ $data->email }}</td>
                <td >{{ $data->phone }}</td>
                <td >{{ $data->date }}</td>
                <td >{{ $data->time }}</td>
                <td >{{ $data->message }}</td>
                <td  id="actionMenu">
                    <a href="{{url('/deletereser',$data->id)}} " class="btn btn-sm btn-danger" id="delRes">Selesaikan <br> Reservasi</a><br><br>
                </td>
            </tr>

            @endforeach

        </table>
    </div>


    </div>
   @include('admin.adminscript')
  </body>
</html>
