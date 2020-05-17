@extends('layouts.admin')
@section('title','Create Users')
@section('content')
<h1>Edit Users</h1>

<div class="col-sm-3">
	<img height='150' src="{{$user->photo ? $user->photo->file :'https://via.placeholder.com/150

C/O https://placeholder.com/'}}" class="img-responsive img-rounded">
</div>


<div class="col-sm-9">
<!-- We do form Model Binding -->

{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
	<div class="form-group">
    	{!! Form::label('name', 'Name:') !!}
    	{!! Form::text('name',null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::label('email', 'Email:') !!}
    	{!! Form::email('email',null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::label('role_id', 'Role:') !!}
    	{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::label('is_active', 'Status:') !!}
    	{!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
	</div>

	<div>
		{!! Form::label('photo_id', 'Upload file:') !!}
		{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::submit('Create User',null, ['class'=>'btn btn-success']) !!}
	</div>

{!! Form::close() !!}


{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
	
	<div class="form-group">

		{!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
	</div>

{!! Form::close() !!}

</div>

	@include('includes.form_error')

@endsection