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
                <h3 class="page-title"> Daftar Menu </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Menu</li>
                  </ol>
                </nav>
              </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

            <div class="table">
                <table class="w-full">
                       <tr class="text-center font-bold">
                           <th class="border px-5 py-2">Nama Menu</th>
                           <th class="border px-5 py-2">Harga</th>
                           <th class="border px-5 py-2">Deskripsi</th>
                           <th class="border px-5 py-2">Foto menu</th>
                           <th class="border px-5 py-2">Action</th>
                       </tr>
                       @foreach ($data as $data)
                       <tr align="center">
                        <td class="border px-5 py-2" >{{$data->nm_makanan}}</td>
                        <td class="border px-5 py-2">{{$data->harga}}</td>
                        <td class="border px-5 py-2">{{$data->deskripsi}}</td>
                        <td class="border px-5 py-2"><img  src="/FotoMakanan/{{$data->gb_makanan}}" height="300"></td>
                        <td class="border px-5 py-2">
                            <a href="{{url('/deletemenu',$data->id)}} " class="btn btn-sm btn-danger" id="delMenu">Delete</a><br><br>
                            <a href="{{url('/updateview',$data->id)}} " class="btn btn-sm btn-warning" id="updateMenu"> Ubah</a>
                        </td>
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

