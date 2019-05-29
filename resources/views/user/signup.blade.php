@extends('layouts.master')

@section ('content')
<div class="row" style="margin-top: 50px;justify-content: center;">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign up</h1>
		<hr>
		@if(count($errors)>0) 
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach	
		</div>
		@endif
		<form action="{{route('user.signup')}}" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Sign Up</button>
			{{ csrf_field()}}
		</form>
	</div>
</div>

@endsection