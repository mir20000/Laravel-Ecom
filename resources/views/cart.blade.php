@extends('main')
@section('index')
    
<div class="container my-5">
    <div class="row">
        
        @foreach ($cartitems as $item)
        <div class="col-sm-4"></div>
        <div class="col-sm-4 py-2">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="../{{$item->gallery}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">Rs. {{$item->price}}</p>
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from the cart</a>
            </div>
        </div>
        </div>
        <div class="col-sm-4"></div>

        @endforeach   
        
        
    </div>
    
</div>

@endsection