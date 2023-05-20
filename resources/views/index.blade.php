@extends('home_master')
@section('content')
    <section class="main">
        <div>
            <h2>Home page<br><span>Electronic voting</span></h2>
            <h3>The Hashemite Kingdom of Jordan</h3>
            <a href="#Sign in" class="main-btn">Tap here to continue </a>
        </div>
    </section>
    <section class="cards" id="Sign in">
        <h2 class="title">To Sign Up</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="{{route('register')}}">
                        <h3>Sign up to vote</h3>
                        <p>The Jordanian Parliments electronic security vote</p>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="{{ route('login') }}">
                        <h3>Log in to vote</h3>
                        <p>The Jordanian Parliments electronic security vote</p>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
