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
    <footer>
        <section id="conclusion">
            <div class="copyright-bottom text-center">
                <p class="m-1">
                    &copy; Copyright Chrystalis 2023-2024. All Rights Reserved
                </p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Privacy</a></li>
                    <li class="list-inline-item"><a href="{{ asset('Images\HomePage\privacyp.png') }}">Terms</a></li>
                    <li class="list-inline-item"><a href="{{route('contactus')}}">Support</a></li>
                    <li class="list-inline-item"><a href="{{ route('t2detail')}}">user test</a></li>
                    <li class="list-inline-item"><a href="#">Back to top</a></li>
                </ul>
            </div>
        </section>
    </footer>






</x-app-layout>