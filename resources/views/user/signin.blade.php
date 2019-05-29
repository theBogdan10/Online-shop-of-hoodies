@extends('layouts.master')

@section ('content')
<div class="row" style="margin-top: 50px;justify-content: center;">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign in</h1>
		<hr>
		@if(count($errors)>0) 
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach	
		</div>
		@endif
		<form action="{{route('user.signin')}}" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-info">Sign In</button>
			{{ csrf_field()}}
		</form>
		<p>Don't have an account? <a href="{{route('user.signup')}}">Sign unstead</a></p>
	</div>
</div>

@endsection