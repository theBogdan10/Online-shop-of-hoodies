
@extends('layouts.master')

@section('title')
	Online shop of hoodies
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group" style="margin-top: 20px; ">
					@foreach($products as $product)
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<strong>{{$product['item']['description'] }}</strong>
							<span class="badge badge-info">{{$product['price']}} $</span>
							<div class="btn-group">
								<ul class="dropdown-menu">
									<li><a href="#" style="">Reduce by 1</a></li>
									<li><a href="#">Reduce by All</a></li>
								</ul>
							</div>
							<span class="badge badge-secondary" >{{$product['qty']}}</span>
						</li>
					@endforeach
				</ul>	
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" style="margin-top: 20px;">
				<strong>Total : {{$totalPrice}} $</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{route('checkout')}}" type="btn" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No items in Cart!</h2>
			</div>
		</div>
	@endif
@endsection