<?php
use App\Http\Controllers\ProductController;
$cartCount= 0;
if (Session::has('user')) {
  $cartCount=ProductController::cartItemCount();
}

?>
@extends('main')
@section('index')
    
<div class="container my-5">
    <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form action="orderplace" method="POST" class="card-body">
              @csrf

              <!--Grid row-->
              <div class="md-form mb-5">
                <label for="firstName" class="">Full name</label>
                <input type="text" name="fullname" id="firstName" class="form-control" placeholder="your Name" required>
              </div>
              <!--Grid row-->

              <!--email-->
              <div class="md-form mb-5">
                <label for="email" class="">Email (optional)</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="youremail@example.com" required>
              </div>
              <!--email-->
              <div class="md-form mb-5">
                <label for="email" class="">Phone</label>
                <input type="number" name="phone" id="email" class="form-control" placeholder="9999999999" required>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <label for="address" class="">Address</label>
                <textarea type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" required></textarea>
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100" id="country" name="country" required>
                    <option value="">Choose...</option>
                    <option value="India">India</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">State</label>
                  <select class="custom-select d-block w-100" id="state" name="state" required>
                    <option value="">Choose...</option>
                    <option value="West Bengal">West Bengal</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="pin">Pin</label>
                  <input type="text" name="pin" class="form-control" id="zip" placeholder="pin code" required>
                  <div class="invalid-feedback">
                    Pin code required.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="COD" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">COD</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{$cartCount}}</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">{{$orderprice}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Delivery</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">Rs. 40</span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between">
              <span>Total </span>
              <strong>Rs. {{$orderprice+40}}</strong>
            </li>
          </ul>
          <!-- Cart -->


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

</div>

@endsection