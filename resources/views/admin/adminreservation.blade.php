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
        <div class="container-scroller" style="width: 102%  ;">
    @include('admin.navbar')


    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

            <h4 class="card-title">Daftar Reservasi</h4>
    <div class="table">
        <table class="w-full">
            <tr class="text-center font-bold">
                <th class="border px-2 py-2">Nama</th>
                <th class="border px-2 py-2">Email</th>
                <th class="border px-2 py-2">No HP</th>
                <th class="border px-2 py-2">Tanggal</th>
                <th class="border px-2 py-2">Waktu</th>
                <th class="border px-2 py-2">Pesan</th>
                <th class="border px-2 py-2">Action</th>
            </tr>

            @foreach ($data as $data)


            <tr align='center'>
                <td class="border px-2 py-2">{{ $data->name }}</td>
                <td class="border px-2 py-2">{{ $data->email }}</td>
                <td class="border px-2 py-2">{{ $data->phone }}</td>
                <td class="border px-2 py-2">{{ $data->date }}</td>
                <td class="border px-2 py-2">{{ $data->time }}</td>
                <td class="border px-2 py-2">{{ $data->message }}</td>
                <td class="border px-2 py-2" id="actionMenu">
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
