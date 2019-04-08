@extends('layouts.app')

@section('content')
    <!-- START THE FEATURES -->

    <hr class="feature-divider">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/about">About</a></li>
            <li class="breadcrumb-item active">Second</li>
        </ol>

        <div class="row feature">
            <div class="col-md-7 order-md-2">
                <h2 class="feature-heading">Second, <span class="text-muted">run unit tests.</span></h2>
                <ul>
                    <li>Write a feature test to check if the register return a 200 status code.</li>
                    <li>Write a feature test to check if the login pages return a 200 status code.</li>
                    <li> Write a feature test to check if your about page returns a 200 status code.</li>
                    <li>Write a feature test to check if your contact page returns a 200 status code.</li>
                </ul>
                <p class="lead"></p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="mb-30px"><a href="second"><img src="https://images.freeimages.com/images/large-previews/d8b/settings-1241475.jpg" alt="..." class="img-fluid"></a>
                    <p> <a href="about" class="btn btn-light">Return to about</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection