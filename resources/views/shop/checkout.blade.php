@extends('layouts.master')

@section('title')
	Online shop of hoodies
@endsection

@section('content')
	<div class="row" style="justify-content: center;">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1 style="margin-top: 30px;">Checkout</h1>
			<h4>Your total: ${{$total}}</h4>			
			<form action="{{route('checkout')}}" method="post">
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Name</label>
						      <input type="text" class="form-control" name="name" id="name" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Surname</label>
						      <input type="text" class="form-control" name="surname" id="surname">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Address</label>
						    <input type="text" class="form-control" name="address" id="address" >
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">City</label>
						      <input type="text" class="form-control"  name="city" id="city">
						    </div>
						  </div>

				<button type="submit" class="btn btn-info">Buy now</button>
			{{ csrf_field()}}
			</form>
		</div>
	</div>		
@endsection