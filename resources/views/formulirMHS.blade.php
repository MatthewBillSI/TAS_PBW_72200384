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
         <div class="col-lg-12 bg-success  py-4 "></div>   
        </div>  
        <div class="row">
          @include('layouts.navbar')
          <div class="col-lg-10">
              <div class="container-fluid rounded mt-4 ">
                  <form action="/mahasiswa/simpanmahasiswa" method="post" class="pt-2 pb-2">
                    @csrf
                    <div class="form-group w-25">
                        <label >nim</label>
                        <input type="number" name="nim" class="form-control" placeholder="masukan nim" required >  
                      </div>
                      <div class="form-group w-25">
                        <label >nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama" required  >  
                      </div>
                      <label >gender</label>
                      <div class="form-check w-25">
                        <input type="radio" name="gender" value="1" class="form-check-input">
                        <label >laki-laki</label> 
                      </div>
                      <div class="form-check w-25">
                        <input type="radio" name="gender" value="2" class="form-check-input">
                        <label >perempuan</label> 
                      </div>
                      <div class="form-group w-25">
                        <label >jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="sistem informasi">sistem informasi</option>    
                            <option value="management">management</option>    
                            <option value="perternakan">perternakan</option>    
                            <option value="TI">TI</option>    
                            <option value="industri">industri</option>    
                            <option value="perhotelan">perhotelan</option>    
                        </select>  
                      </div>
                      <label >bidang minat </label>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang[]" value="kesejahteraan sosial" class="form-check-input" >
                        <label >kesejahteraan sosial</label>  
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang[]" value="mekanik" class="form-check-input" >
                        <label >mekanik</label>  
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang[]" value="industri" class="form-check-input" >
                        <label >industri</label>  
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang[]" value="kuliner" class="form-check-input" >
                        <label >kuliner</label>  
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