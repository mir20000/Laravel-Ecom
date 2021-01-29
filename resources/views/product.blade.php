@extends('main')
@section('index')
    
<div class="fluid-container">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          @foreach ($datas as $item)
          <li data-target="#demo" data-slide-to="{{$item['id']-1}}" class="{{$item['id']==1?'active':''}}"></li>
          @endforeach
        </ul>
        
         <div class="carousel-inner">
        @foreach ($datas as $item)
          <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="product/{{$item['id']}}">
              <img class="darkimg" src="{{$item['gallery']}}" alt="Los Angeles" width="100%" height="100%">
              <div class="carousel-caption">
                <h3>{{$item['name']}}</h3>
                <p>{{$item['description']}}</p>
              </div>   
            </a>
          </div>
          
        @endforeach
        </div> 
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>      
</div>

<div class="fluid-container my-4">
  <h2 class="text-center">Trending Product</h2>
  <hr class="py-2">
  <div class="card-deck">
  @for ($i = 0; $i <= 5; $i++)
    <div class="card">
      <img class="card-img-top" src="{{$datas[$i]['gallery']}}" alt="{{$datas[$i]['name']}}">
      <div class="card-body">
        <h5 class="card-title">{{$datas[$i]['name']}}</h5>
        <p class="card-text">{{$datas[$i]['description']}}</p>
        <a href="product/{{$datas[$i]['id']}}">
          <button type="button" class="btn btn-outline-success ">Details</button>
        </a>
        <p class="card-text"><small class="text-muted">Category: {{$datas[$i]['category']}}</small></p>
      </div>
    </div>
  @endfor
  </div>
</div>

@endsection