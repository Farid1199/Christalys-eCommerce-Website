@extends('mainLayout.layout')

@section('title', 'login')



@section('content')

    <!-----------------------------
      LOGIN Section
-------------------------------->

    <main class="main-selection">
      <div class="button-container">
        <a href="{{ route('login') }}" class="styled-button">Log In</a>
      </div>
    </main>

    <!-----------------------------
      LAST SECTION  
-------------------------------->

@endsection
