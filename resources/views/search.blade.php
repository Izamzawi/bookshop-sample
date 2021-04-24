@extends('master')

@section('content')

<div class="container mb-4">
    <div class="product-wrapper mx-2 ">
        <div class="row">
            <div class="col-9">
                <h3>Search results</h3>
            </div>
            <div class="col">
                <a href="">Filter</a>
            </div>
        </div>
        <div class="result-section my-4">
            @foreach($products as $product)
            <div class="result-item">
                <div class="row mb-2">
                    <div class="col-2">
                        <a href="detail/{{$product['id']}}">
                            <img class="img-result" src="{{$product['image']}}" class="d-block w-100" alt="...">                 
                        </a>
                    </div>
                    <div class="col pt-4">
                        <h5><a href="detail/{{$product['id']}}">{{$product['name']}}</a></h5>
                        <h5>Rp {{$product['price']}}</h5>                    
                        <h6>{{$product['description']}}</h6>                    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection