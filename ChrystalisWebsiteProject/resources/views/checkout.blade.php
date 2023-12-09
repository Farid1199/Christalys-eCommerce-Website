@extends('mainLayout.layout')

@section('title', 'Cart List')

@section('content')


<style>
    .container {
        max-width: 960px;
    }

    .border-top {
        border-top: 1px solid #e5e5e5;
    }

    .border-bottom {
        border-bottom: 1px solid #e5e5e5;
    }

    .border-top-gray {
        border-top-color: #adb5bd;
    }

    .box-shadow {
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
    }

    .lh-condensed {
        line-height: 1.25;
    }
</style>

<hr class="featurette-divider" />

<hr class="my-5">

<div class="container h-100 w-100">
    <div class="text-center"></div>

    <div class="row">


        <div class="col-xl-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">10</span>
            </h4>
            <ul class="list-group mb-3">

                @foreach($products as $item)

                <li class="list-group-item d-flex justify-content-between lh-condensed">


                    <div>
                        <a href="detail/{{$item->id}}" style="text-decoration:none;">
                            <h6 class="my-0">{{$item->name}}</h6>
                        </a>
                    </div>
                    <span class="text-muted">{{$item->price}}</span>
                </li>

                @endforeach
            </ul>

        </div>


        <div class="col-xl-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-xl-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required />
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required />
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required />
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" />
                </div>

                <div class="row">
                    <div class="col-xl-5 mb-3">
                        <label for="zip">City</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required />
                        <div class="invalid-feedback">City required.</div>
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="zip">Region</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required />
                        <div class="invalid-feedback">Region required.</div>
                    </div>
                    <div class="col-xl-3 mb-3">
                        <label for="zip">Post Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="AB12 3CD" required />
                        <div class="invalid-feedback">Post Code required.</div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info" />
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4" />

                <h4 class="mb-3">Payment</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                            required />
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required />
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required />
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">Name on card is required</div>
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required />
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required />
                        <div class="invalid-feedback">Expiration date required</div>
                    </div>
                    <div class="col-xl-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required />
                        <div class="invalid-feedback">Security code required</div>
                    </div>
                </div>
                <a class="btn btn-primary btn-lg btn-block py-2 my-3" href="{{route('ordercm')}}">Proceed Payment</a>
            </form>
        </div>



        <script>
            // JavaScript for disabling form submissions if there are invalid fields
            (function () {
                "use strict";

                window.addEventListener(
                    "load",
                    function () {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName("needs-validation");

                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(
                            forms,
                            function (form) {
                                form.addEventListener(
                                    "submit",
                                    function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add("was-validated");
                                    },
                                    false
                                );
                            }
                        );
                    },
                    false
                );

            });

        </script>
    </div>
















    @endsection