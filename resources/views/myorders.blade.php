@extends('master')

@section('content')

<div class="container mb-4">
    <div class="product-wrapper mx-2 ">
        <div class="row">
            <div class="col-9">
                <h3>My Orders</h3>
            </div>
        </div>
        <div class="result-section my-4">
            <h4>Products</h4>
            @foreach($orders as $product)
            <div class="result-item">
                <div class="row pb-2 ">
                    <div class="col-2">
                        <a href="detail/{{$product->id}}">
                            <img class="img-result" src="{{$product->image}}" class="d-block w-100" alt="...">                 
                        </a>
                    </div>
                    <div class="col-4 pt-4">
                        <h5><a href="detail/{{$product->id}}">{{$product->name}}</a></h5>
                        <h6>{{$product->description}}</h6>                    
                    </div>
                    <div class="col-4">
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td>{{$product->address}}</td>
                                </tr>
                                <tr>
                                    <td>Payment</td>
                                    <td>:</td>
                                    <td>{{$product->payment_method}}</td>
                                </tr>
                                <tr>
                                    <td>Payment status</td>
                                    <td>:</td>
                                    <td>{{$product->payment_status}}</td>
                                </tr>
                                <tr>
                                    <td>Delivery status</td>
                                    <td>:</td>
                                    <td>{{$product->status}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection