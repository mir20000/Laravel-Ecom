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
                <div class="p-1"><button type="button" class="btn btn-primary">Buy Now</button> </div>
                <div class="p-1"><button type="button" class="btn btn-success">Add to Cart</button></div>
            </div>
        </div>
    </div>
</div>

@endsection