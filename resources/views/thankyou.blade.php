@extends('layouts.app')

@section('title', 'thankyou')
@section('content')
    <div class="container">
    <div class="container-fluid">
        <div>
            <ul class="breadcrumb justify-content-start">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/contact">contact</a></li>
            </ul>
        </div>
        <h1>Thank You : {{$name}}</h1>
        <p>Your message has been received!</p>
    </div>
    </div>
@endsection