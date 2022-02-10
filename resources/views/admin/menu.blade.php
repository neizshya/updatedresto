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

    <div class="col-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">

            <div class="table-responsive" style="color: #fff;">
                <table class="table table-hover">
                       <tr class="text-center font-bold">
                           <th >Nama Menu</th>
                           <th >Harga</th>
                           <th >Deskripsi</th>
                           <th >Foto menu</th>
                           <th >Action</th>
                       </tr>
                       @foreach ($data as $data)
                       <tr align="center">
                        <td >{{$data->nm_makanan}}</td>
                        <td >{{$data->harga}}</td>
                        <td >{{$data->deskripsi}}</td>
                        <td ><img  src="/FotoMakanan/{{$data->gb_makanan}}" height="300"></td>
                        <td >
                            <a href="{{url('/updateview',$data->id)}} " class="btn btn-sm btn-warning" id="updateMenu"> Update</a> <br><br>
                            <a href="{{url('/deletemenu',$data->id)}} " class="btn btn-sm btn-danger" id="delMenu">Delete</a>

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

