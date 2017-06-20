@extends('layouts.ancap')

@section('content')

<small class="form-group">

  <a href="{{ route('create_post_path') }}" class="btn btn-primary" style="min-width: 75px;"> Create </a>

</small>

@foreach($posts as $post)

<div class="row">

  <div class="col-md-12">

    <h2><a href="{{ route('post_path', ['post' => $post->id] ) }}"> {{$post->title}} </a> </h2>

    @if(Auth::check() && $post->user_id == Auth::user()->id)
    <small class="pull-right">

      <a href="{{ route('edit_post_path', ['post' => $post->id] ) }}" class="btn btn-info" style="min-width: 75px;"> Edit </a>

      <form action="{{ route('delete_post_path', ['post' => $post->id] ) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger" style="min-width: 75px;">Delete </button>

      </form>

    </small>
    @endif
    <p> Posted {{$post -> created_at -> diffforHumans() }} </p>

  </div>

</div>
<hr>

@endforeach
{{ $posts->render() }}
@endsection
