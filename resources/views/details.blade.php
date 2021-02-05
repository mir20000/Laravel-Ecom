@extends('main')
@section('index')
    
<div class="container my-5" style="padding-bottom: 200px">
    <div class="row">
        <div class="col-sm-8">
            <img src="../{{$product['gallery']}}" alt="" class="img-fluid">
        </div>
        <div class="col-sm-4">
            <h1>{{$product['name']}}</h1>
            <h4><strong>Price:</strong> Rs. {{$product['price']}}</h4>
            <h5><strong>Category:</strong> {{ucfirst($product['category'])}}</h5>
            <p><strong>Description:</strong> {{$product['description']}}</p>
            <br>
            <div class="row">
                <div class="p-1">
                    <form action="/buynow" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button type="submit" class="btn btn-info">Buy Now</button>
                    </form>
                </div>
                <div class="p-1">
                    <form action="/addtocart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection