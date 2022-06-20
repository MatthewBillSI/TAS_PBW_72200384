<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
         <div class="col-lg-12 bg-primary py-4 "></div>   
        </div>  
        <div class="row">
          @include('layouts.navbar')
          <div class="col-lg-10">
              <div class="container-fluid rounded mt-4 ">
                  <form action="/user/updateuser/{{$user->id}}" method="post" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                      <label >nik</label>
                      <input type="number" name="nik" class="form-control" placeholder="masukan nik" value="{{$user->nik_user}}"  >  
                    </div>
                      <div class="form-group w-25">
                        <label >nama</label>
                        <input type="text" name="name" class="form-control" placeholder="masukan nama" value="{{$user->name}}" >  
                      </div>
                      <label >no_telp</label>
                      <div class="form-group w-25">
                        <input type="number" name="no_telp"class="form-control" placeholder="masukan no telp" value="{{$user->no_telp}}">
                      </div>
                      <label >password</label>
                      <div class="form-group w-25">
                        <input type="password" name="password"class="form-control" placeholder="masukan password" value="{{$user->password}}">
                      </div>
                      <div class="form-group pt-4">
                       <input type="submit" value="simpan" class="btn btn-outline-primary"> 
                    </div>
                  </form>
                  
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