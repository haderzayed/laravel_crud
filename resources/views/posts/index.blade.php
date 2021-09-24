@extends('layouts.app')

@section('pageName') Index @endsection

@section('content')
        <div class="text-center">
            <a href="{{route('posts.create')}}" class="mt-4 btn btn-success">Create Post</a>
        </div>
        <table class="table m-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($postCollectionView as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->user ? $post->user->name  : 'not found'}}</td>
                  <td>{{$post->created_at}}</td>
                  <td>
                    <a href=" {{route('posts.show',['post' => $post->id])}}" class="btn btn-primary">View</a>
                      <a href="#" class="btn btn-primary">Edit</a>
                      <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" class="d-inline">
          @csrf

           @method('DELETE')

                      <!-- Button trigger modal -->

           <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
            Delete
      </button></form>

                  </td>
                </tr>
             @endforeach
            </tbody>
          </table>

@endsection
