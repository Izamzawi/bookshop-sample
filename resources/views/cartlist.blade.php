<?php 

use App\Http\Controllers\ProductController;

$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}

?>

@extends('master')

@section('content')

<div class="container mb-4">
    <div class="product-wrapper mx-2 ">
        <div class="row">
            <div class="col-9">
                <h3>Cart items</h3>
            </div>
        </div>
        <div class="result-section my-4">
            @if($total == 0)
            <p>Your cart is empty. Choose some product first.</p>
            <div class="col-md-4 offset-md-4">
                <p class="btn btn-secondary btn-lg">Place order</p>
            </div>
            @else
            @foreach($products as $product)
            <div class="result-item">
                <div class="row pb-2 ">
                    <div class="col-2">
                        <a href="detail/{{$product->id}}">
                            <img class="img-result" src="{{$product->image}}" class="d-block w-100" alt="...">                 
                        </a>
                    </div>
                    <div class="col-6 pt-4">
                        <h5><a href="detail/{{$product->id}}">{{$product->name}}</a></h5>
                        <h5>Rp {{$product->price}}</h5>                    
                        <h6>{{$product->writer}}</h6>                    
                        <h6>{{$product->description}}</h6>                    
                    </div>
                    <div class="col pt-5">
                        <a href="/removeItem/{{$product->carts_id}}" class="btn btn-warning">Remove</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4 offset-md-4">
            <a href="order" class="btn btn-success btn-lg">Place order</a>
        </div>
        @endif
    </div>
</div>

@endsection