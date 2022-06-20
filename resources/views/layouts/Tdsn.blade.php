<div class="col-lg-10 vh-100 mt-4 ">
    <a name="" id="" class="btn btn-primary" href="/dosen/formulir" role="button"><i class="bi bi-plus-square-fill"></i>ADD dosen BARU</a>
        <form class="form-inline my-2 my-lg-0 float-right" method='GET' action="/dosen/cari"> 
          <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    <table class="table table-hover mt-4">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nidn</th>
            <th scope="col">nama</th>
            <th scope="col">status</th>
            <th scope="col">jafung</th>
            <th scope="col">pakar</th>
            <th scope="col">update/delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $d)
            <tr>
                <td>{{$d -> id}}</td>
                <td>{{$d -> nidn}}</td>
                <td>{{$d -> nama}}</td>
                <td>{{$d -> status}}</td>
                <td>{{$d -> jafung}}</td>
                <td>{{$d -> pakar}}</td>
                <td>
                  <a href="/dosen/editdosen/{{$d-> id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                  <a href="/dosen/deletedosen/{{$d-> id}}" class="btn btn-outline-primary"><i class="bi bi-x-square"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      <div class="row">
        <div class="col-md-5">
          <span >data perpage= {{$dosen -> count()}}</span>  
          <span>total dosen = {{$dosen -> total()}}</span> 
        </div>
        <div class="col-md-5">
        <span>{{$dosen -> links()}}</span> 
      </div>
      </div>
  
  
      
  </div>