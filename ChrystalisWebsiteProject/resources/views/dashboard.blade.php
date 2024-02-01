<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div-->

    <style>
        a {
            text-decoration: none;
        }
    </style>


    <!-- Bootstrap icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--
  -->

    <link rel="stylesheet" href="{{ asset('assets/css/css-pages/dashboard.css')}}" />

    <!-----------------------------
      User Account
-------------------------------->


    <div>
        <h2 class="text-center my-3 py-3"> Welcome to your Dashboard, {{ Auth::user()->name }}!
        </h2>
    </div>

    <main class="user-main">
        <section id="founders-profile">
            <div class="text-founder1">
                <ul>
                    <li>

                        <div class="founder-box4-skills">
                            <img src="{{ asset('Images\HomePage\user-pp.png') }}" alt="java-logo" class="lang-logos" />
                            <div>
                                <h3>{{ Auth::user()->name }}</h3>
                            </div>

                            <section class="user-links">
                                <a href="{{route('previousod')}}">
                                    <h4>Order History</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="{{route('cartlist')}}">
                                    <h4>Cart</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="{{ route('profile.edit') }}" class="styleless">
                                    <h4>{{ __('Account Settings') }}</h4>
                                </a>
                            </section>

                            <section class="user-links">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <h4>{{ __('Log Out') }}</h4>
                                    </x-nav-link>
                                </form>


                            </section>
                        </div>
                    </li>

                    <li>
                        <div class="founder-box4-skills">
                            <h3 style="padding-top: 10px">Help and Support</h3>
                            <section class="user-links">
                                <a href="{{route('contactus')}}" style="text-decoration:none;">
                                    <h4>Customer Support</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="{{route('contactus')}}" style="text-decoration:none;">
                                    <h4>Digital Service Support</h4>
                                </a>
                            </section>
                            <section class="user-links">
                                <a href="{{route('contactus')}}" style="text-decoration:none;">
                                    <h4>Contact Us</h4>
                                </a>
                            </section>
                        </div>
                    </li>
                </ul>

                <div class="founder-box2">
                    <h3>Account Details</h3>

                    <h4>Personal Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Your Name</p>
                        <p>DOB: XX/XX/XX</p>
                        <p>Email: sampleemail@email.com</p>
                        <p>Phone: +44 XXXX XXX XXX</p>
                        <p>Current Password: *******</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit Details </a>
                        </p>
                    </section>

                    <h4>Saved Addresses</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Your Name</p>
                        <p>35 London Road, KINGSTON UPON THAMES, KT17 8BM</p>
                        <p>United Kingdom</p>
                        <p>Phone: +44 XXXX XXX XXX</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit </a><a href="#" class="styleless"> | Remove </a>
                        </p>
                    </section>

                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Address </a>
                        </p>
                    </section>

                    <h4>Saved Payment Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Card Name: Your Name</p>
                        <p>Visa Debit ending in XXXX</p>
                        <p style="padding: 15px; color: black">
                            <a href="#" class="styleless"> Edit </a><a href="#" class="styleless"> | Remove </a>
                        </p>
                    </section>
                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Payment Option </a>
                        </p>
                    </section>

                    <h4>Gift Cards and Vouchers</h4>
                    <section class="user-links">
                        <p style="font-weight: 500; padding-bottom: 5px">
                            Your Balance: £0.00
                        </p>
                    </section>
                    <section class="user-links">
                        <p style="padding-bottom: 5px">
                            <a href="#" class="styleless"> Add New Gift Card/Voucher </a>
                        </p>
                    </section>
                </div>
            </div>
        </section>
    </main>

    @yield('footer')
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark pt-4" style="background-color: #eceff1">


        <!-- Section: Social media -->
        <section id="conclusion" class="d-flex justify-content-between p-4 text-white"
            style="background-color: #969696">

            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="text-md-start mt-5 px-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md col-lg col-xl mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Chrystalis</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Thank you for choosing Chrystalis. We look forward to being a
                            part of your special moments and helping you express your unique
                            style and individuality through our stunning jewelry collection.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md col-lg col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Information</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="{{route('welcome')}}" class="list-inline-item">Home page</a>
                        </p>
                        <p>
                            <a href="{{route('products')}}" class="list-inline-item">Browse Our Catalogue</a>
                        </p>
                        <p>
                            <a href="{{route('contactus')}}" class="list-inline-item">Contact Us</a>
                        </p>
                        <p>
                            <a href="{{route('aboutus')}}" class="list-inline-item">About Us</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md col-lg col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="{{route('dashboard')}}" class="list-inline-item">Your Account</a>
                        </p>
                        <p>
                            <a href="{{route('cartlist')}}" class="list-inline-item">Your Cart</a>
                        </p>
                        <p>
                            <a href="{{route('previousod')}}" class="list-inline-item">Previous Orders</a>
                        </p>
                        <p>
                            <a href="{{ route('profile.edit') }}" class="list-inline-item">Account Settings</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md col-lg col-xl mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact Us</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <i class="fas fa-home mr-1"></i> 33 Road, Birmingham, B87 8HG
                        </p>
                        <p><i class="fas fa-envelope mr-1"></i> chrystalis@example.com</p>
                        <p><i class="fas fa-phone mr-1"></i> + 44 2345 678 098</p>
                        <p><i class="fas fa-print mr-1"></i> + 44 2342 567 389</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); text-decoration: none">
            © Copyright Chrystalis 2023-2024. All Rights Reserved

            <ul class="list-inline pt-2">
                <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Privacy</a></li>
                <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Terms</a></li>
                <li class="list-inline-item"><a href="{{route('contactus')}}">Support</a></li>
                <li class="list-inline-item"><a href="#">Back to top</a></li>
            </ul>
        </div>


        </section>
    </footer>






</x-app-layout>