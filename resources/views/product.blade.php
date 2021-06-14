@extends('master')

@section('content')

<div class="container mb-7">
    <div class="bd-example mx-2 mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($products as $product)
                <div class="carousel-item slider {{$product['id']==4? 'active' : ''}}">
                    <a href="detail/{{$product['id']}}">
                        <img class="mx-auto d-block img-slider" src="{{$product['image']}}" alt="First slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$product['name']}}</h5>
                        <p>{{$product['description']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="product-wrapper mx-2 ">
        <h3>Newly Added</h3>
        <div class="trending-section mb-4">
            @foreach($newitems as $newitem)
            <div class="trending-item">
                <a href="detail/{{$newitem->id}}">
                    <img class="img-trending" src="{{$newitem->image}}" class="d-block w-100" alt="...">
                    <h6>{{$newitem->name}}</h6>
                    <p>{{$newitem->author}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection