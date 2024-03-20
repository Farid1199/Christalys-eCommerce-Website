@extends('mainLayout.layout')

@section('title', 'Contact Us')



@section('content')

<!-- <link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" /-->


<!--
CONTACT US CONTENT 

-->

<hr class="my-5">
<hr class="my-5">


<!-- <h1 class="my-5 text-center">Contact Chrystalis!</h1>

Contact Form Section 
<section class="Contact-us">
    <form id="contactForm" onsubmit="return checkForm()" name="contactForm">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required="" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required="" />

        <label for="confirm-email">Confirm Email:</label>
        <input type="email" id="confirm-email" name="confirm-email" required="" />
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required="" />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required=""></textarea>

        
        <input class="btn-outline-primary" type="submit" name="submit" value="Submit" />
    </form>
</section>
-->

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md col-lg col-xl mx-auto mb-4">
            <!-- Contact Details -->
            <div class="text-center">
                <h2 class="text-uppercase fw-bold">Contact Chrystalis!</h2>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p><i class="fas fa-home mr-1"></i> 33 Road, Birmingham, B87 8HG</p>
                <p><i class="fas fa-envelope mr-1"></i> chrystalis@example.com</p>
                <p><i class="fas fa-phone mr-1"></i> +44 2345 678 098</p>
                <p><i class="fas fa-print mr-1"></i> +44 2342 567 389</p>
            </div>
            <div class="text-center">
                <p>
                    Thank you for choosing Chrystalis. We are delighted to be a part of your special moments
                    and are committed to helping you express your unique style and individuality through our
                    stunning jewelry collection.
                </p>
                <p>
                    If you have any questions, concerns, or feedback, please feel free to contact us using the
                    information above or by filling out the form below. We value your input and strive to provide
                    exceptional customer service.
                </p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="my-2 text-center">Contact Us Here!</h3>

                    <!-- Display validation errors if any -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Display success message if any -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Contact Form Section -->
                    <!-- form action="{{ route('contactus.submit') }}" method="POST" id="contactForm" name="contactForm"-->
                    <form id="contactForm" name="contactForm">
                        @csrf
                        <!-- Form Fields -->
                        <div class="form-group font-weight-bold">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                        </div>
                        <div class="form-group font-weight-bold">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required="">
                        </div>
                        <div class="form-group font-weight-bold">
                            <label for="confirm-email">Confirm Email:</label>
                            <input type="email" class="form-control" id="confirm-email" name="confirm-email"
                                required="">
                        </div>
                        <div class="form-group font-weight-bold">
                            <label for="subject">Subject:</label>
                            <input type="tel" class="form-control" id="subject" name="subject" required="">
                        </div>
                        <div class="form-group font-weight-bold">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" required=""></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="my-3 btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>












@endsection