@extends('layouts.app')

@section('content')
    <!-- START THE FEATURES -->

    <hr class="feature-divider">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/about">About</a></li>
            <li class="breadcrumb-item active">Last</li>
        </ol>

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, <span class="text-muted">perform database functions.</span></h2>
            <ul>
                <li>Create a unit test to insert a user into the users table.</li>
                <li>Create a unit test to update the name of a user in the database to Steve Smith.</li>
                <li>Create a unit test to delete a user in the database.</li>
                <li>Create a unit test to count the number of records inserted by the database seed. i.e. $userCount
                    = 50
                </li>
                <li>Create a unit test to test inserting a car.</li>
                <li>Create a unit test to test updating a car year to 2000.</li>
                <li>Create a unit test to test deleting a car.</li>
                <li>Create a unit test to test to count the number of records inserted by the database seed. i.e.
                    $carCount = 50
                </li>
                <li>Create a unit test to check if a car's year is an integer.</li>
                <li>Create a unit test to check if a car's make is either ford / honda / toyota.</li>
                <li>Create a unit tests to check that the model is a string.</li>
            </ul>
            <p class="lead"></p>
        </div>
        <div class="col-md-5 order-md-1">
            <div class="mb-30px"><a><img src="https://images.freeimages.com/images/large-previews/58e/blue-chrome-website-buttons-3-1144972.jpg" alt="..." class="img-fluid"></a>
                <p> <a href="about" class="btn btn-light">Return to about</a></p>
            </div>
        </div>
    </div>
    </div>
@endsection