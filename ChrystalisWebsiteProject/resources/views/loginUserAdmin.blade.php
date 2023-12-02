@extends('mainLayout.layout')

@section('title', 'Watch')



@section('content')

    <!-----------------------------
      LOGIN Section
-------------------------------->

    <main class="main-selection">
      <div class="button-container">
        <a href="{{ route('login') }}" class="styled-button">Log In as User</a>
        <a href="admin-login.html" class="styled-button">Log In as Admin</a>
      </div>
    </main>

    <!-----------------------------
      LAST SECTION  
-------------------------------->

@endsection
