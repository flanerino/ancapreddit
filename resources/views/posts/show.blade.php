@extends('layouts.ancap')

@section('content')


  <div class="row">
    <div class="col-md-12">
      <h2> {{$post->title}} </h2>
      <p> {{$post->description}} </p>
      <p> {{$post->created_at->diffforHumans()}} </p>
    </div>
  </div>

  <div class="form-group">
    <a href="{{ route('posts_path') }}" class="btn btn-info" style="min-width: 75px;"> Back </a>
  </div>
@endsection
