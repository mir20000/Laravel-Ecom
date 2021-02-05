@extends('main')
@section('index')
    
<div class="container my-5">
    <h4>My orders</h4>
    <div class="row">
        <table class="table">
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td style="max-width: 400px"><img class="img-thumbnail" src="../{{$order->gallery}}" alt="Card image cap"></td>
                    <td><h4>{{$order->name}}</h4><br><h5>Rs.{{$order->price}}</h5></td>
                    <td><a href="#" class="btn btn-primary">More Details</a></td>
                  </tr>
              @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection