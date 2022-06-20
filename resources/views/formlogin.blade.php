
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="/user/ceklogin" method="POST">
    @csrf
    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="card-body">
      @if (session('alert'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('alert')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>

    <div class="form-floating">
      <input type="number" name="no_telp" class="form-control" 
      @error('no_telp') is-invalid @enderror id="floatingInput" placeholder="+62">
      @error('no_telp')
      <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      <label for="floatingInput">no_telp</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="floatingPassword" placeholder="Password">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</main>


    
  </body>
</html>
