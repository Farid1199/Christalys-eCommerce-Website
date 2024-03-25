@extends('mainLayout.layout')

@section('title', 'Product Catalogue')

@section('content')

<style>

    #bg{ 
        background-image: url('{{ asset("Images/CatalogueImg/Banner.jpg") }}');
        background-size: cover; 

    }
    body {
        background-image: url('{{ asset("Images/HomePage/texture.png") }}');
        background-size: cover; 
    }

    .category-box {
        background-color: #ffffff; /* White background */
        border: 2px solid #ffd700; /* Gold outline */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Slightly darker shadow for more depth */
        cursor: pointer; /* Changes cursor appearance to suggest clickable area */
        margin-bottom: 20px; /* Added margin between category boxes */
    }

    .category-box-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }

    .category-box-content img {
        max-width: 40%; /* Image size adjusted */
        height: auto;
        margin-left: 20px; /* Added margin between image and text */
    }

    .main-content, .category {
        padding: 20px;
        margin-top: 20px;
    }

    /* Change background color for main content section */
    .main-content {
        background-color: #f9f5eb; /* Light beige background */
    }
</style>

<link rel="stylesheet" href="{{ asset('assets/css/css-pages/product.css')}}">
<script>
    Holder.addTheme("thumb", {
        bg: "#55595c",
        fg: "#eceeef",
        text: "Thumbnail",
    });

    // Direct clicks on category boxes to the corresponding link
    document.addEventListener("DOMContentLoaded", function() {
        const categories = document.querySelectorAll('.category-box, .category-box-dark');
        categories.forEach(category => category.addEventListener("click", function() {
            const link = this.querySelector('a').href;
            window.location.href = link;
        }));
    });
</script>

<!-----------------------------
    MAIN CONTENT
-------------------------------->

<div class="has-bg-img position-relative overflow-hidden p-3 p-md-5 text-center main-content"
style="background-image: url('{{ asset("Images/CatalogueImg/Banner.jpg") }}'); background-size: cover; position: relative;"  >

    <div class="col-md-6 p-lg-5 mx-auto my-5 bg-light rounded shadow">
        <h1 class="display-4 font-weight-normal">Discover Chrystalis</h1>
        <p class="lead font-weight-normal">
            Discover the perfect
            expression of your style and individuality with Chrystalis –
            where every piece tells a story as unique as you are.
        </p>
        <a class="btn btn-outline-secondary" href="{{ route('search')}}">Browse Catalogue</a>
    </div>
</div>



<!-- Ring -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="category-box mr-md-3 px-3 px-md-5 text-center overflow-hidden"  >
        <!-- Rose gold gradient overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;  "></div>
        <div class="category-box-content" style="color: black;">
            <img src="{{ asset('Images\CatalogueImg\gold-rings-.png') }}" alt="Ring" style="max-width:30%;"/>
            <div>
                <h2 class="display-5 ">Rings</h2>
                <p class="lead">Discover our exquisite collection of rings</p>
                <p><a href="rings" class="btn btn-secondary my-2">Visit</a></p>
            </div>
        </div>
    </div>
</div>



<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- Necklaces -->
    <div class="category-box mr-md-3 px-3  px-md-5 text-center overflow-hidden">
        <div class="category-box-content">
            <div>
                <h2 class="display-5">Necklaces</h2>
                <p class="lead">Adorn yourself with our stunning necklace collection</p>
                <p><a href="necklaces" class="btn btn-secondary my-2">Visit</a></p>
            </div>
            <img src="{{ asset('Images\CatalogueImg\Neckless1.jpeg') }}" alt="Necklace" style="max-width:30%;"/>
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- Bracelets -->
    <div class="category-box mr-md-3  px-3  px-md-5 text-center overflow-hidden">
        <div class="category-box-content">
            <img src="{{ asset('Images\CatalogueImg\bracelet - 2.jpg') }}" alt="Bracelet" style="max-width:30%;"/>
            <div>
                <h2 class="display-5">Bracelets</h2>
                <p class="lead">Description of the bracelet product</p>
                <p><a href="bracelets" class="btn btn-secondary my-2">Visit</a></p>
            </div>
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- Earrings -->
    <div class="category-box mr-md-3  px-3  px-md-5 text-center overflow-hidden">
        <div class="category-box-content">
            <div>
                <h2 class="display-5">Earrings</h2>
                <p class="lead">Enhance your beauty with our elegant earrings</p>
                <p><a href="earrings" class="btn btn-secondary my-2">Visit</a></p>
            </div>
            <img src="{{ asset('Images\CatalogueImg\earrings - 1.jpg') }}" alt="Earrings"  style="max-width:30%;"/>
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- Watches -->
    <div class="category-box mr-md-3  px-3  px-md-5 text-center overflow-hidden">
        <div class="category-box-content">
            <img src="{{ asset('Images\CatalogueImg\Watch-1.jpg') }}" alt="Watches" style="max-width:30%;"/>
            <div>
                <h2 class="display-5">Watches</h2>
                <p class="lead">Explore our timeless and elegant watches</p>
                <p><a href="watches" class="btn btn-secondary my-2">Visit</a></p>
            </div>
        </div>
    </div>
</div>


 <!-- Coming Soon -->
 <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
 <div class="category-box mr-md-3  px-3  px-md-5 text-center overflow-hidden" onclick="window.location='#';">
    <div class="py-3">
      <h2 class="display-5">Coming Soon</h2>
      <p class="lead">Coming Soon</p>
    
    </div>
  </div>
</div>
</div>