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
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="container-scroller" >

    <div class="col-sm-12 grid-margin">
        <div class="card">
          <div class="card-body">
    <h1 >Hai Admin!</h1>
    </div>
    </div>
    </div>
        </div>
    </div>
    </div>






   @include('admin.adminscript')
  </body>
</html>
