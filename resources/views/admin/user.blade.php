<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="content-wrapper">
    <div class="container-scroller" style="width: 102%">
        @include('admin.navbar')
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">

                <h4 class="card-title">Daftar User</h4>
        <div class="container" id="container-user">
            <table class="w-full" id="tableUser">
                <tr class="text-center font-bold" style="background-color: #009DAE;">
                    <th class="border px-5 py-2">Nama</th>
                    <th class="border px-5 py-2">Email</th>
                    <th class="border px-5 py-2">Action</th>
                </tr>
                @foreach ($data as $user)
                <tr>
                    <td class="border px-5 py-2">{{$user->name}}</td>
                    <td class="border px-5 py-2">{{$user->email}}</td>
                    @if ($user->hasRole('admin'))

                    <td class="border px-5 py-2 text-center"><span>Tidak Diijinkan</span></td>
                    @else
                    <td class="border px-5 py-2 text-center"><a id="deleteUser" href="{{url('/deleteuser',$user->id)}}">Delete</a></td>

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
