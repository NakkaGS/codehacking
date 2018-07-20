@extends('layouts.admin')

@section('content')

	<h1>Create user</h1>

	{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true])  !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:')!!}
		{!! Form::text('name', null, ['class'=>'form-control'])  !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:')!!}
		{!! Form::email('email', null, ['class'=>'form-control'])  !!}
	</div>

	<div class="form-group"> <!-- To add on DB you must modify in app/User.php -->
		{!! Form::label('role_id', 'Role:')!!}
		{!! Form::select('role_id', [''=> 'Choose Options'] + $roles, null, ['class'=>'form-control'])  !!} <!-- Select Form Type 1 -->
	</div>

	<div class="form-group"> <!-- To add on DB you must modify in app/User.php -->
		{!! Form::label('is_active', 'Status:')!!}
		{!! Form::select('is_active', array('1' => 'Active', '0' => 'No Active'), null, ['class'=>'form-control']) !!} <!-- Select Form Type 2 -->
	</div>

	<div class="form-group"> <!-- To add on DB you must modify in app/User.php -->
		{!! Form::label('photo_id', 'Files:')!!}
		{!! Form::file('photo_id') !!} 
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Password:')!!}
		{!! Form::password('password', ['class'=>'form-control']) !!} 
	</div>

	<div class="form-group">
		{!! Form::submit('Create User', ['class'=> 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

	@include('includes.form_error')


@stop