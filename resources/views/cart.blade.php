@extends('main')
@section('index')
    
<div class="container my-5">
    <div class="row text-center">
        <div class="col-sm-4"><h4>Item(s) in your cart</h4></div>
        <div class="col-sm-4"><h4>Total Price: Rs. {{$total}}</h4></div>
        @if ($total!=0)
            <div class="col-sm-4"><a href="ordernow" class="btn btn-success">Order Now</a></div>
        @endif
        
    </div>
    <div class="row"> 
        <table class="table my-4">
            <tbody>
                @foreach ($cartitems as $item)
              <tr>
                <td style="max-width: 400px"><img class="img-thumbnail" src="../{{$item->gallery}}" alt="Card image cap"></td>
                <td><h4>{{$item->name}}</h4><br><h5>Rs.{{$item->price}}</h5></td>
                <td><a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from the cart</a></td>
              </tr>
              @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection