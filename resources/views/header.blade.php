<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
  $total=ProductController::cartItemCount();
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Arttractive</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/myorders">My Orders</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <form action="search" method="GET" class="form-inline my-2 my-lg-0">
        <input name="query" class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
      </form>
      @if (Session::has('user'))
          <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hello, {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/cart">Cart({{$total}}) &nbsp</a>
      </li>
      @else
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login &nbsp</a>
      </li>
      @endif
    </div>
  </nav>