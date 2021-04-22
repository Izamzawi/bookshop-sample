@extends('master')

@section('content')

<div class="container mb-4">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['image']}}" alt="" class="img-detail">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h5>Price : {{$product['price']}}</h5>
            <h5>Category : {{$product['category']}}</h5>
            <p>{{$product['description']}}</p>
            <br><br>
            <form action="/add_to_cart" method="POST" >
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-info">Buy now</button>
        </div>
    </div>
</div>

@endsection