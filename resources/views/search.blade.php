@extends('main')
@section('index')
    
<div class="container my-5">
    <h4>Search results...</h4>
    <div class="row">
        
        @foreach ($queries as $query)
        <div class="col-sm-4"></div>
        <div class="col-sm-4 py-2">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="../{{$query['gallery']}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$query['name']}}</h5>
            <p class="card-text">Rs. {{$query['price']}}</p>
            <a href="product/{{$query['id']}}" class="btn btn-primary">Details</a>
            </div>
        </div>
        </div>
        <div class="col-sm-4"></div>

        @endforeach   
        
        
    </div>
    
</div>

@endsection