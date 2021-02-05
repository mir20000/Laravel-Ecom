@extends('main')
@section('index')
    
<div class="container my-5">
    <h4>Search results...</h4>
    <div class="row">
        <table class="table">
            <tbody>
                @foreach ($queries as $query)
              <tr>
                <td style="max-width: 400px"><img class="img-thumbnail" src="../{{$query['gallery']}}" alt="Card image cap"></td>
                <td><h4>{{$query['name']}}</h4><br><h5>Rs.{{$query['price']}}</h5></td>
                <td><a href="product/{{$query['id']}}" class="btn btn-primary">Details</a></td>
              </tr>
              @endforeach
            </tbody>
        </table> 
    </div>
</div>

@endsection