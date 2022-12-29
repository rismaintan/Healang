@extends('header')
@section('content')


<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p></p>
            <h1>Login</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                      <div class="card single-accordion">
                        <div class="card-header" id="headingOne">
                          {{-- <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Billing Address
                            </button>
                          </h5> --}}
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="billing-address-form">
                                <form action="index.html">
                                    <p><input type="text" placeholder="Name"></p>
                                    <p><input type="email" placeholder="Email"></p>
                                    <p><input type="text" placeholder="Address"></p>
                                    <p><input type="tel" placeholder="Phone"></p>
                                    <p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <img src="#" alt="">
                    <p>Sudah memiliki akun?</p>
                     <a href="/user" class="boxed-btn">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

