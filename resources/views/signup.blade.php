@extends('main')
@section('index')
    
<div class="container" style="margin-bottom: 75px; margin-top:75px">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 my-3 p-3 card border-warning mb-3">
            <form action="signup" method="POST">
                <h2>SignUp</h2>
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Your Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">SignUp</button>
              </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

@endsection