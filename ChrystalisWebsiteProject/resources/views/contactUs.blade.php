@extends('mainLayout.layout')

@section('title', 'Contact Us')



@section('content')

<!-- <link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" /-->


<!--
CONTACT US CONTENT 

-->

<hr class="my-5">
<hr class="my-5">

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md col-lg col-xl mx-auto mb-4">
            <!-- Contact Details -->
            <div class="text-center">
                <h6 class="text-uppercase fw-bold">Contact Us</h6>
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

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="my-2 text-center">Contact Chrystalis!</h1>

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
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" name="contactForm">
                        @csrf
                        <!-- Form Fields -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                        </div>
                      
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">












@endsection



