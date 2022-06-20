<!doctype html>
<html lang="en">
  <head>
    <title>UKDW App - @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  <body>
      <div class="container-fluid">
        <div class="row">
         <div class="col-lg-12 bg-success  py-4 ">
          <div class="dropdown float-right">
          <button class="btn btn dropdown-toggle" type="button" id="dropdownmenubutton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-file-person-fill"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownmenubutton">
            <a class="dropdown-item active" href="#">matthew bill</a>
            <a class="dropdown-item active" href="/user">data pengguna</a>
            <a class="dropdown-item active" href="/logout">keluar</a>
          </div>
          </div>   
        </div>   
        </div>  
        <div class="row">
          <div class="col-lg-2 border vh-100 text-center">
            <div class="nav flex-column nav-pills bg-white"role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-0 p-2 border" href="/home"  >Home</a>
                <a class="nav-link rounded-0 p-2 border " href="/mahasiswa">MAHASISWA</a>
                <a class="nav-link rounded-0 p-2 border active " href="/dosen " >DOSEN</a>
                <a class="nav-link rounded-0 p-2 border " href="/produk" >PRODUK</a>
                <a class="nav-link rounded-0 p-2 border " href="/user" >USER</a>
            </div>        
        </div>
          @include('layouts.Tdsn')
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>