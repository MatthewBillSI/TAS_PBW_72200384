@extends('layouts.Mproduk')
@section('title', 'Produk')
@section('content')

@foreach ($posts as $post)
<div class="container">
  <div class="row">
    <div class="col-md-3 ">
      <img src="img/{{$post["image"]}}" alt="" width="200">
    </div>

    <div class="col-md-7">
      <article class="md-6 ">
        <h2>{{$post["title"]}}</h2>
        <p>{{$post["body"]}}</p>
      </article>
    </div>   

    <div class="col-md-2 nav flex-column nav-pills md-2" role="tablist" ariaorientation="vertical" >
      <a class="nav-link bg-succes text-white rounded-0 p-2 border active" href="">detail</a>
      <a class="nav-link bg-danger text-white rounded-0 p-2 border" href="">delete</a>
      <a class="nav-link bg-warning text-white rounded-0 p-2 border" href="" >edit</a>
  </div>
  </div>
</div>
<br><br><br>
@endforeach
@endsection