@extends('mainLayout.layout')

@section('title', 'Contact Us')



@section('content')

<!-- <link rel="stylesheet" href="{{ asset('assets/css/css-pages/contactus.css')}}" /-->

<style>
   body {
        background-image: url('{{ asset("Images/HomePage/texture.png") }}');
        background-size: 100%; /* Ensure full cover of the background */
    }

    #contactFormSection {
        background-image: url('{{ asset("Images/HomePage/map-image.png") }}');
        background-size: cover; /* Ensure full cover of the background */
    }

</style>


<!--
CONTACT US CONTENT 

-->

<hr class="my-5">

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-4">
            <!-- Image Column -->
            <img src="{{ asset('Images/HomePage/contactus.jpg') }}" class="rounded img-fluid" alt="Responsive image">
            <img src="{{ asset('Images/HomePage/contactus2.jpg') }}" class=" rounded img-fluid mt-2" alt="Responsive image">
        </div>
        <div class="col-md col-lg col-xl mx-auto mb-4">
            <!-- Contact Details -->
            <div class="text-center">
                <h1 class="text-uppercase fw-bold">Contact Us</h1>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #7c4dff; height: 2px" />
                <p><i class="fas fa-home mr-1"></i> 33 Road, Birmingham, B87 8HG</p>
                <p><i class="fas fa-envelope mr-1"></i> chrystalis@example.com</p>
                <p><i class="fas fa-phone mr-1"></i> +44 2345 678 098</p>
                <p><i class="fas fa-print mr-1"></i> +44 2342 567 389</p>
            </div>
            <div class="text-center mt-5">
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

<section class="container bg-dark m-5 p-5" id="contactFormSection">
    <div class="row justify-content-center"> 
        <div class="col-md-7" >
            <div class="card shadow-lg border-0">
                <div class="card-header bg-outline-secondary text-dark py-5"  >
                    <h2 class="mb-0 text-center display-8 text-uppercase font-weight-bold">Contact Chrystalis!</h2>
                </div>
                <div class="card-body" >
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

@if(session('success'))
    <div class="text-center display-8 my-3" style="background-color: green; color: white; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="text-center display-8 my-3" style="background-color: #B22222; color: #FFFFFF; padding: 15px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 0.5s ease-out forwards;" role="alert">
        {{ session('error') }}
    </div>
@endif

<style>
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

                    <!-- Contact Form Section -->
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" name="contactForm">
                        @csrf
                        <!-- Form Fields -->
                        <div class="form-group mb-4">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control border border-1 border-dark" id="name" name="name" placeholder="Enter your name" required="">
                        </div>

                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control border border-1 border-dark" id="message" name="message" rows="5" placeholder="Leave us a message" required=""></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
















@endsection



