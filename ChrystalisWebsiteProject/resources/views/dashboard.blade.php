<x-app-layout>
    <hr class="mb-4">

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
        <hr class="mb-3">
        <h2 class="text-center my-3 py-2"> Welcome to your Dashboard, {{ Auth::user()->name }}!
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
                                <a href="{{route('wishlist')}}">
                                    <h4>WishList</h4>
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
                            <h3 style="padding-top: 10px">Info and Support</h3>
                            <section class="user-links">
                                <a href="{{route('aboutus')}}" style="text-decoration:none;">
                                    <h4>About Us</h4>
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
                        <p style="font-weight: 500"> Username: <b>{{ Auth::user()->name }}</b></p>
                        <p>Email: <b>{{ Auth::user()->email }}</b></p>
                        <p>Current Password:<b> *******</b></p>
                        <h5 style="padding: 15px; color: black">
                            <a href="{{ route('profile.edit') }}" class="styleless badge badge-light"> Edit Details </a>
    </h5>
                    </section>

                    <h4>Saved Addresses</h4>
                    <section class="user-links">
                        <p class="mt-2">Address Line: <b>35 London Road</b></p>
                        <p>City: <b>Kingstonbury</b></p>
                        <p class="mb-2">Postcode: <b>KT17 8BM</b></p>
                    </section>

                    <h4>Saved Payment Details</h4>
                    <section class="user-links">
                        <p style="font-weight: 500">Card Name: User5</p>
                        <p>Card Number: <span id="cardNumber">************</span></p>
                        <p>Expiry date: <span id="expiryDate">**/**</span></p>
                        <p>CVC: <span id="cvc">***</span></p>
                        <h5 style="padding: 15px; color: black">
                            <a href="#" class="styleless badge badge-light" id="showHideCardDetails">Show Card Details</a>
    </h5>
                    </section>
                </div>
            </div>
        </section>
    </main>



    <script>
            const showHideButton = document.getElementById('showHideCardDetails');
            const cardNumber = document.getElementById('cardNumber');
            const expiryDate = document.getElementById('expiryDate');
            const cvc = document.getElementById('cvc');
            let isCardDetailsVisible = false;

            showHideButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default behavior for anchor tag
                event.stopPropagation(); // Stop event propagation to prevent unexpected side effects
                
                if (isCardDetailsVisible) {
                    // Hide card details
                    showHideButton.innerText = 'Show Card Details';
                    isCardDetailsVisible = false;
                    cardNumber.innerText = "************";
                    expiryDate.innerText = "**/**";
                    cvc.innerText = "***";
                } else {
                    // Show card details
                    showHideButton.innerText = 'Hide Card Details';
                    isCardDetailsVisible = true;
                    cardNumber.innerText = "4242 4242 4242 4242";
                    expiryDate.innerText = "12/34";
                    cvc.innerText = "567";
                }
            });
        </script>





</x-app-layout>