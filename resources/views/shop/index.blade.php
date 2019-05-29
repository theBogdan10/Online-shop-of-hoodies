@extends('layouts.master')

@section('title')
	Online shop of hoodies
@endsection

@section('content')
    <h1><img src="img/wol.png" style="max-width: 300px;"></h1>
    <hr/>
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
    @endif
    @foreach ($products->Chunk(3) as $productChunk)
    <div class="row">
        @foreach ($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                    <div class="caption">
                        <p class="description">{{$product->description}}</p>
                        <div class="clearfix">
                            <div class="pull-left price">${{$product->price}}</div>
                            <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-secondary pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
   </div>
   @endforeach
@endsection

@section('footer')

        
@endsection

