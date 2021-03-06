@extends('layouts.app')
@section('title', 'ProductByBrand')
@section('content')


	<section>
		<div class="container">
			<div class="row">

                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">{{ $brand->name }}-({{ $brand->products()->count() }})</h2>
                    @if ($products->count()>0)
                    @foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <a href="{{ route('details',$product->slug) }}" >

                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ url('storage/product/'.$product->image)}}" alt="" />
                                        <p> {{$product->name}}</h2>
                                        <p>Code: {{$product->code}}</h2>
                                        <p>${{$product->price}}</h2>
                                        <p>{!! Str::limit($product->description, 20, '...') !!}
                                    </div>

                            </div>
                            </a>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="{{ $product->id }}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Add to wishlis</a></li>
                                    <li><a href="{{ route('add.cart',$product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
<h2> Not found.</h2>
                    @endif
                </div><!--features_items-->









			</div>
		</div>
	</section>

@endsection
