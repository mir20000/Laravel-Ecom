@extends('main')
@section('login')
    
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 my-3 p-3 card border-warning mb-3">
            <form>
                <h2>Login</h2>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection