
@extends('layouts.app')

@section('content')
    <div class="card m-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->user  ->name }}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    <div class="card m-5">
        <div class="card-header">
          Post Info
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}} </p>
        </div>
      </div>

@endsection


@section('pageName') This Is The New Page Name @endsection
