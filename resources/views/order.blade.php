@extends('master')

@section('content')

<div class="container mb-4">
    <div class="product-wrapper mx-2 ">
        <h3>Order amounts</h3>
        <div class="result-section my-4">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>Rp {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Rp 10000</td>
                    </tr>
                    <tr>
                        <td>Total amount</td>
                        <td>Rp {{$total+10000}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 offset-md-3">
        <form>
            <div class="form-group">
                <textarea type="email" class="form-control" placeholder="Write your address"></textarea>
                <small id="emailHelp" class="form-text text-muted">Be sure to write the correct and precise address.</small>
            </div>
            <div class="form-group">
                <h5>Payment method</h5>
                <input type="radio" id="transfer" name="payment" value="transfer">
                <label for="transfer">Manual transfer</label><br>
                <input type="radio" id="va" name="payment" value="va">
                <label for="va">Virtual account</label><br>
                <input type="radio" id="visa" name="payment" value="visa">
                <label for="visa">VISA</label><br>
                <input type="radio" id="qris" name="payment" value="qris">
                <label for="qris">QRIS</label> 
            </div>
                <button type="submit" class="btn btn-success btn-lg">Place order</button>
            </form>
        </div>
    </div>
</div>

@endsection