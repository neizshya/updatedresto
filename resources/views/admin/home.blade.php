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
            <h3 class="page-title"> Halaman Admin</h3>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                  <H1>Halo ADMIN!</H1>
        </div>
    </div>
          </div>
    </div>






   @include('admin.adminscript')
  </body>
</html>
