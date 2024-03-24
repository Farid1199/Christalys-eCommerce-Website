@extends('layouts.app')

@section('title', 'Previous Orders')

@section('content')

    <hr class="mb-5">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>


    <style>
#bg {
            background-image: url('{{ asset("Images/HomePage/login.jpg") }}');
            background-size: 100%; /* make the image smaller */
        }
        </style>

    <div class="py-12" id="bg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="border:3px solid gold">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="border:3px solid gold">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="border:3px solid gold">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

 
    @endsection
