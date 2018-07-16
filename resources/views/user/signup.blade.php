@extends('layouts.master')

@section('title')
	Shopping Cart | User Sign Up
@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<h1>Sign Up</h1>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	</div>
	@endif
	<form action="{{ route('user.signup') }}" method="post">
		<div class="form-group">
			<label for="email">E-Mail</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Sign Up</button>
		<input type="hidden" name="_token" value="{{ Session::token() }}">
	</form>
	</div>
</div>
@endsection