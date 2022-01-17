@extends('layout.app')

@section('content')
<div class="container">
  <div class="row row-cols-1">
    @foreach ($posts as $post)
    <div class="col">
      <div class="card">
        <div class="row row-cols-3 align-items-center">
          <div class="col d-flex align-items-center">
            <img src="https://picsum.photos/200/300" alt="">
            <h3>{{$post->author}}</h3>
          </div>
          <div class=" col">{{$post->text}}</div>
          <div class="col">{{$post->date}}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection