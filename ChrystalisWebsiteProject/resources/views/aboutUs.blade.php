@extends('mainLayout.layout')

@section('title', 'About Us')



@section('content')


<style>
      body {
        background-image: url('{{ asset("Images/HomePage/texture.png") }}');
        background-size: cover; /* Ensure full cover of the background */
    }
    .album {
        background-color: #f8f9fa; /* Slightly lighter grey to contrast against the body */
        border-radius: 0.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card {
        background-color: #dee2e6; /* Grey card background for better content readability */
        border: none;
    }

    .btn-outline-secondary, .btn-grey, .btn-outline-grey {
        color: #6c757d; /* Adjusting for consistency */
        border-color: #6c757d; /* Grey border for buttons */
    }

    .btn-outline-secondary:hover, .btn-grey:hover, .btn-outline-grey:hover {
        color: #fff; /* White text on hover */
        background-color: #5a6268; /* Darker grey background on hover */
        border-color: #545b62; /* Darker grey border on hover */
    }

    .btn-success, .btn-primary {
        background-color: #6c757d; /* Adjusting primary and success buttons to match grey scheme */
        border-color: #6c757d; /* Consistent border color */
    }

    .btn-success:hover, .btn-primary:hover {
        background-color: #5a6268; /* Darker grey on hover */
        border-color: #545b62; /* Darker border color on hover */
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .sticky-sm-top {
        top: 0;
        z-index: 1020;
    }

    hr.gradient {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 3%;
            margin-bottom: 3%;
            width:90%; 
            height: 5px;
            border: none;
            border-radius: 6px;
            background: linear-gradient(
                90deg,
                rgba(0, 0, 0, 1) 0%,   /* dark grey at 0% */
                rgba(50, 50, 50, 1) 21%,  /* dark gull grey at 21% */
                rgba(130, 130, 130, 1) 51%,  /* silver at 51% */
                rgba(211, 211, 211, 1) 100%  /* light grey at 100% */
        );
        }
</style>

<!--

 ABOUT US CONTENT

-->
<hr class="gradient">
<section class="container mt-5 px-5 bg-light">
    <div class="row">
        <div class="col-md-4">
            <div class="col">
                <div class="row-md-6">
                <img class="img-thumbnail rounded my-4 py-4" src="{{ asset('Images\HomePage\hero.png') }}" alt="Generic placeholder image"
                width="100%" height="40%" />
                </div>
                <div class="row-md-6">
                <img class="img-thumbnail rounded my-4 py-4" src="{{ asset('Images\HomePage\img-2-2.jpg') }}" alt="Generic placeholder image"
                width="100%" height="40%" />
                </div>

            </div>

        </div>
        <div class="col-md-8">
            <div class="container mt-5 mb-3 text-center">
                <h2 class="display-8 text-uppercase font-weight-bold">About Us</h2>
            </div>
            <p>
                Welcome to Chrystalis, your go-to destination for exquisite jewelry. At
                Chrystalis, we believe in the power of elegance and craftsmanship to
                inspire and elevate. Our journey began with a passion for beauty and a
                commitment to providing our customers with timeless pieces that tell
                unique stories.
            </p>
            <p>
                Our collection is a celebration of artistry, attention to detail, and
                the enduring allure of graceful refinement. We take pride in curating a
                selection of rings, necklaces, bracelets, and more, each intricately
                designed to capture the essence of timeless sophistication.
            </p>
            <p>
                As a team, we are dedicated to creating a seamless and enjoyable
                shopping experience for our valued customers. Whether you're seeking a
                statement piece or a thoughtful gift, Chrystalis invites you to immerse
                yourself in a world of captivating jewelry that transcends trends.
            </p>
            <p>
                Thank you for choosing Chrystalis. We look forward to being a part of
                your special moments and helping you express your unique style and
                individuality through our stunning jewelry collection.
            </p>

            </div>
        </div>

        <div class="row mt-5">



            <div class="col-md-7">
                <!-- Backstory Section -->
                    <div class="container mt-5 mb-3 text-center">
                        <h2 class="display-8 text-uppercase font-weight-bold">Our Story</h2>
                    </div>
                    <p>
                        Chrystalis was founded in September 2023 with a vision to create a jewelry
                        store that goes beyond just selling products – we wanted to create an
                        experience. Our founders, Farid Mikidam, Dhruv Joshi, Amar Matharu, Abdul Moghees, Lukasz Majewski, Rahul Mohan and Mohammed Chiya Arslaan; shared a deep appreciation
                        for fine craftsmanship and a belief that every piece of jewelry should
                        have a story.
                    </p>
                    <p>
                        Over the years, Chrystalis has grown from a small boutique to a
                        destination for those seeking one-of-a-kind, handcrafted jewelry. Our
                        commitment to quality, artistry, and customer satisfaction has
                        remained unwavering.
                    </p>
                    <p>
                        Today, we are proud to serve a community of passionate individuals who
                        appreciate the beauty of meticulously crafted jewelry. Thank you for
                        being a part of our journey.
                    </p>
                    
                </div>
                    <div class="col-md-5">
                        <div class="col text-center py-5"> <!-- Added text-center to center the image -->
                             <img class=" rounded my-4 py-5" src="{{ asset('Images\HomePage\hero2.png') }}" alt="Generic placeholder image"
                                width="100%" height="50%"/> <!-- Changed margin-top to style attribute -->
                        </div>

                    </div>

        </div>
            </div>
        </div>
    </div>


</section>

<hr class="featurette-divider gradient" />

<section class="container mt-5 px-5" bg:light>
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
    <!-- Reviews Submission Section -->
    <div class="mt-5" width="70%">
                <div class="container mt-5 mb-3 text-center">
                <h2 class="display-8 text-uppercase font-weight-bold">Write Your Review</h2>
                    <h6 class="display-15 text-muted">Your review is at utmost importance to our website</h6>
                    <h6 class="display-15 text-muted">It will help us meet your requirements as well as reach every jewellery enthusiast's soul</h6>
                </div>

        <form action="{{ route('review.submit') }}" method="POST" id="aboutusForm" name="aboutusForm" class="p-4 shadow-sm border border-2 border-primary rounded-3">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label h5">Your Name</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name" required=""/>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label h5">Your Review</label>
                <textarea class="form-control form-control-lg" id="review" rows="4" name="review" required=""></textarea>
            </div>

            <button type="submit" class="btn btn-secondary w-100 mt-3">Submit Review</button>
        </form>


    </div>
</section>

<hr class="featurette-divider gradient" />

<section class="container mt-5 px-5 text-center">
<div class="container mt-5 mb-3 text-center">
                <h2 class="display-8 text-uppercase font-weight-bold">Reach Us Out!</h2>
                    <h6 class="display-15 text-muted">Find us on Google Maps!</h6>
                </div>
    <!-- Map-->
    <div class="map" id="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.5860758422164!2d-1.8924319241335055!3d52.486629872052355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bd2e9cf474ef%3A0xb48a787296dbcd89!2sAston%20University%20Main%20Building!5e0!3m2!1sen!2suk!4v1711146356847!5m2!1sen!2suk" width="100%" height="400px" style="border:2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </section>











@endsection