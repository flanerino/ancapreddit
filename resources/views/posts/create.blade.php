@extends('layouts.ancap')

@section('content')

  @if(count($errors) > 0)
    <div class="alret alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li> {{$error}} </li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('store_post_path')}}" method="POST">

     {{ csrf_field() }}

    <!-- Title Field -->

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" value="" />
      </div>

    <!-- Description Field -->

        <div class="form-group">
          <label for="description">Descripcion:</label>
          <input type="text" name="description" class="form-control" value="" />
        </div>


    <!-- Url Field -->

          <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" name="url" class="form-control" value="" />
          </div>

          <div class="form-group">
            <button type="submit" class="btn-btn-primary"> Create Post </button>
          </div>
      </form>

@endsection
