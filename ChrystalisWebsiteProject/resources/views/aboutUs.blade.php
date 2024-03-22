@extends('mainLayout.layout')

@section('title', 'About Us')



@section('content')



<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>. <!-- Updated to 'my-event' -->
  </p>

<style>
    body {
        background-color: #e9ecef; /* Slightly darker grey for the overall background */
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
</style>

<!--

 ABOUT US CONTENT

-->


<section class="container mt-5 px-5">

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('1f859ba1be741d46da9d', {
        cluster: 'eu'
      });
  
      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
    <h2 class="container mt-5 mb-3 text-center">About Us</h2>
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


    <!-- Backstory Section -->
    <div class="mt-5">
        <h3 class="container my-3 text-center">Our Story</h3>
        <p>
            Chrystalis was founded in [Year] with a vision to create a jewelry
            store that goes beyond just selling products – we wanted to create an
            experience. Our founders, [Founder Names], shared a deep appreciation
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
    <div class="mt-5">
        <h3 class="container my-3 text-center">Write a Review</h3>

        <form action="{{ route('review.submit') }}" method="POST" id="aboutusForm" name="aboutusForm">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label h5">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required=""/>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label h5">Your Review</label>
                <textarea class="form-control" id="review" rows="4" name="review" required=""></textarea>
            </div>
            
            <button type="submit" class="btn btn-outline-primary w-100">Submit Review</button>
        </form>


    </div>
</section>

 <!-- Map-->
 <div class="map" id="contact">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
        </div>

<hr class="my-3">






@endsection