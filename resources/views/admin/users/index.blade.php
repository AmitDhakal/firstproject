@extends('layouts.admin')
@section('title','Users')
@section('content')


@if(Session::has('delete_user'))
<div>
  <p class="bg-daanger">{{Session::get('delete_user')}}</p>
</div>
@endif

<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Users</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
@if($user ?? '')
	@foreach($user ?? '' as $use)
      <tr>
        <td>{{$use->id}}</td>
        <!-- Using Accessors/ See Photo Model -->
        <td><img height='50' src="{{$use->photo ? $use->photo->file:'https://via.placeholder.com/150
C/O https://placeholder.com/'}}"></td>
        <!-- To do normally -->
        <!-- <img height='50' src="/userimages/{{$use->photo ? $use->photo->file:'No Photo to display'}}"> -->
        <td><a href="{{route('users.edit', $use->id)}}">{{$use->name}}</a></td>
        <td>{{$use->email}}</td>
        <td>{{$use->role->name}}</td>
      	<td>{{$use->is_active == 1 ? 'Active':'Not Active'}}</td>
        <td>{{$use->created_at->diffForHumans()}}</td>
        <td>{{$use->updated_at->diffForHumans()}}</td>
      </tr>
    @endforeach
@endif
    </tbody>

  </table>

@endsection