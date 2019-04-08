@extends('layouts.app')

@section('content')
    <!-- START THE FEATURES -->

    <hr class="feature-divider">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/about">About</a></li>
            <li class="breadcrumb-item active">First</li>
        </ol>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="feature-heading">First, <span class="text-muted">create the page.</span></h2>
            <ul>
                <li>Make a new Laravel site.</li>
                <li>Generate the authentication.</li>
                <li>Create a database seed that inserts 50 users</li>
                <li>Create a factory for cars that sets the make field to either ford / honda / toyota</li>
                <li>Create a database seed to generate 50 cars.</li>
                <li>Create a new model called car and add 3 properties to it: Make, Model, and year</li>
                <li>Create a controller, route, and view to show a contact form and add it to the main menu of your
                    site.
                </li>
                <li>Create a controller, route, and view to show an about page and add it to the main menu of your
                    site.
                </li>
            </ul>
            <p class="lead"></p>
        </div>
        <div class="col-md-5 order-md-1">
            <div class="mb-30px"><a><img src="https://images.freeimages.com/images/large-previews/c99/globe-with-internet-symbol-plant-1633954.jpg" alt="..." class="img-fluid"></a>
                <p> <a href="about" class="btn btn-light">Return to about</a></p>
            </div>
        </div>
    </div>
    </div>
@endsection