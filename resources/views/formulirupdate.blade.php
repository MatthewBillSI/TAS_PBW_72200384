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
         <div class="col-lg-12 bg-warning py-4 "></div>   
        </div>  
        <div class="row">
          @include('layouts.navbar')
          <div class="col-lg-10">
              <div class="container-fluid rounded mt-4 ">
                @php
                  $bidang = explode(',',$mahasiswa ->bidang_minat);  
                @endphp  
                <form action="/mahasiswa/updatemahasiswa/{{$mahasiswa->id}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label >nim</label>
                        <input type="number" name="nim" class="form-control" placeholder="masukan nidn" value="{{$mahasiswa->nim}}" >  
                      </div>
                      <div class="form-group w-25">
                        <label >nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama" value="{{$mahasiswa->nama}}" >  
                      </div>
                      <label >gender</label>
                      <div class="form-check w-25">
                        <input type="radio" name="gender" value="1"{{$mahasiswa->gender=='1' ? 'checked':'' }} class="form-check-input">
                        <label >laki-laki</label> 
                      </div>
                      <div class="form-check w-25">
                        <input type="radio" name="gender" value="2"{{$mahasiswa->gender =='2' ? 'checked':'' }} class="form-check-input">
                        <label >perempuan</label> 
                      </div>
                      <div class="form-group w-25">
                        <label >jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="sistem informasi"{{$mahasiswa->jurusan == 'sistem informasi'?'selected':''}}>sistem informasi</option>    
                            <option value="management"{{$mahasiswa->jurusan == 'management'?'selected':''}}>management</option>    
                            <option value="perternakan"{{$mahasiswa->jurusan == 'perternakan'?'selected':''}}>perternakan</option>    
                            <option value="TI"{{$mahasiswa->jurusan == 'TI'?'selected':''}}>TI</option>    
                            <option value="industri"{{$mahasiswa->jurusan == 'industri'?'selected':''}}>industri</option>    
                            <option value="perhotelan"{{$mahasiswa->jurusan == 'perhotelan'?'selected':''}}>perhotelan</option>    
                        </select> 
                    </div>
                    <label >bidang minat </label>
                    <div class="form-check w-25">
                      <input type="checkbox" name="bidang[]" value="kesejahteraan sosial"{{in_array('kesejahteraan sosial',$bidang)?'checked':''}}  class="form-check-input" >
                      <label >kesejahteraan sosial</label>  
                    </div>
                    <div class="form-check w-25">
                      <input type="checkbox" name="bidang[]" value="mekanik"{{in_array('mekanik',$bidang)?'checked':''}}  class="form-check-input" >
                      <label >mekanik</label>  
                    </div>
                    <div class="form-check w-25">
                      <input type="checkbox" name="bidang[]" value="industri" {{in_array('industri',$bidang)?'checked':''}} class="form-check-input" >
                      <label >industri</label>  
                    </div>
                    <div class="form-check w-25">
                      <input type="checkbox" name="bidang[]" value="kuliner"{{in_array('kuliner',$bidang)?'checked':''}} class="form-check-input" >
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