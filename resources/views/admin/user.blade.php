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
            <h3 class="page-title"> Daftar User </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar User</li>
              </ol>
            </nav>
          </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">

                <div class="table-responsive">
                    <table class="table" style="color: #fff;">
                <tr class="text-center font-bold" >
                    <th class="border px-5 py-2">Nama</th>
                    <th class="border px-5 py-2">Email</th>
                    <th class="border px-5 py-2">Action</th>
                </tr>
                @foreach ($data as $user)
                <tr class="text-center">
                    <td class="border px-5 py-2">{{$user->name}}</td>
                    <td class="border px-5 py-2">{{$user->email}}</td>
                    @if ($user->hasRole('admin'))

                    <td class="border px-5 py-2 text-center"><span>Tidak Diijinkan</span></td>
                    @else
                    <td class="border px-5 py-2 text-center"><a id="deleteUser" href="{{url('/deleteuser',$user->id)}}" class="btn btn-sm btn-danger">Delete</a></td>

                    @endif

                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
    </div>

   @include('admin.adminscript')
  </body>
</html>
