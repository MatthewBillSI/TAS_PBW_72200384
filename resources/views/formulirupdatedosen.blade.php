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
            <div class="col-lg-2 border vh-100 text-center">
              <div class="nav flex-column nav-pills bg-white"role="tablist" aria-orientation="vertical">
                  <a class="nav-link rounded-0 p-2 border" href="/home"  >Home</a>
                  <a class="nav-link rounded-0 p-2 border " href="/mahasiswa">MAHASISWA</a>
                  <a class="nav-link rounded-0 p-2 border active " href="/dosen " >DOSEN</a>
                  <a class="nav-link rounded-0 p-2 border " href="/produk" >PRODUK</a>
                  <a class="nav-link rounded-0 p-2 border " href="/user" >USER</a>
              </div>        
          </div>
          <div class="col-lg-10">
              <div class="container-fluid rounded mt-4 ">
                @php
                  $pakar = explode(',',$dosen ->pakar);  
                @endphp  
                <form action="/dosen/updatedosen/{{$dosen->id}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label >nidn</label>
                        <input type="number" name="nidn" class="form-control" placeholder="masukan nidn" value="{{$dosen->nidn}}" >  
                      </div>
                      <div class="form-group w-25">
                        <label >nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama" value="{{$dosen->nama}}" >  
                      </div>
                      <label >status</label>
                      <div class="form-check w-25">
                        <input type="radio" name="status" value="dosen tetap"{{$dosen->status=='dosen tetap' ? 'checked':'' }} class="form-check-input">
                        <label >dosen tetap</label> 
                      </div>
                      <div class="form-check w-25">
                        <input type="radio" name="status" value="dosen tidak tetap"{{$dosen->status =='dosen tidak tetap' ? 'checked':'' }} class="form-check-input">
                        <label >dosen tidak tetap</label> 
                      </div>
                      <div class="form-group w-25">
                        <label >jabatan fungsional </label>
                        <select name="jafung" class="form-control">
                            <option value="tenaga pengajar"{{$dosen->jafung == 'tenaga pengajar'?'selected':''}}>tenaga pengajar</option>    
                            <option value="asisten ahli"{{$dosen->jafung == 'asisten ahli'?'selected':''}} >asisten ahli</option>    
                            <option value="lektor"{{$dosen->jafung == 'lektor'?'selected':''}}>lektor</option>    
                            <option value="lektor kepala"{{$dosen->jafung == 'lektor kepala'?'selected':''}} >lektor kepala</option>    
                            <option value="guru besar"{{$dosen->jafung == 'guru besar'?'selected':''}} >guru besar</option>    
                        </select>  
                      </div>
                      <label >bidang keahlian </label>
                      <div class="form-check w-25">
                        <input type="checkbox" name="pakar[]" value="artificial intelegance"{{in_array('artificial intelegance',$pakar)?'checked':''}} class="form-check-input" >
                        <label >artificial intelegance</label>  
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="pakar[]" value="web engineer"{{in_array('web engineer',$pakar)?'checked':''}} class="form-check-input" >
                        <label >web engineer</label>  
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="pakar[]" value="db angineer"{{in_array('db angineer',$pakar)?'checked':''}} class="form-check-input" >
                        <label >db angineer</label>  
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