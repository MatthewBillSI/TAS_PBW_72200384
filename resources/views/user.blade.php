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
         <div class="col-lg-12 bg-primary py-4 ">
          <div class="dropdown float-right">
          <button class="btn btn dropdown-toggle" type="button" id="dropdownmenubutton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-file-person-fill"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownmenubutton">
            <a class="dropdown-item active" href="#">user {{Auth::user()->name ?? ""}}</a>
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
                <a class="nav-link rounded-0 p-2 border " href="/dosen " >DOSEN</a>
                <a class="nav-link rounded-0 p-2 border " href="/produk" >PRODUK</a>
                <a class="nav-link rounded-0 p-2 border active" href="" >USER</a>
            </div>        
        </div>
          <div class="col-lg-10 vh-100 mt-4 ">
            <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i>ADD pengguna BARU</a>
                <form class="form-inline my-2 my-lg-0 float-right" method='GET' action="/dosen/cari"> 
                  <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
              @if (session('delete'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
            <table class="table table-hover mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nik</th>
                    <th scope="col">nama</th>
                    <th scope="col">no telp</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        <td>{{$u -> id}}</td>
                        <td>{{$u -> nik_user}}</td>
                        <td>{{$u -> name}}</td>
                        <td>{{$u -> no_telp}}</td>>
                        <td>
                          <a href="/user/edituser/{{$u-> id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                          <button type="submit" class="btn btn-outline-danger" onclick="return confirm('yakin untuk menghapus data?')"> 
                            <a href="/user/deleteuser/{{$u-> id}}"><i class="bi bi-x-square"></i></a>  
                          </button>                        
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-5">
                <span>{{$user -> links()}}</span> 
              </div>
              </div>
          
          
              
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>