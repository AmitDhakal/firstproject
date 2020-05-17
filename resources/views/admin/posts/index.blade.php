@extends('layouts.admin')
@section('title','Posts')
@section('content')


<h1>Posts</h1>


<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
@if($posts ?? '')
	@foreach($posts ?? '' as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td><img height="50px" width="50px" src="{{$post->photo ? $post->photo->file : 'https://via.placeholder.com/150
C/O https://placeholder.com/' }}"></td>
        <td>{{$post->user->name}}</td>
      	<td>{{$post->category_id}}</td>
      	<td>{{$post->title}}</td>
      	<td>{{$post->body}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>
    @endforeach
@endif
    </tbody>

  </table>

@endsection