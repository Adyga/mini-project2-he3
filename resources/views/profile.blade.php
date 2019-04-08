@extends('layouts.app')

@section('title', 'profile')

@section('content')
    <section class="hero">
        <div class="container">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">{{ Auth::user()->firstname }} profile        </li>
            </ol>
            <!-- Hero Content-->
            <div class="hero-content pb-5 text-center">
                <h1 class="hero-heading">{{ Auth::user()->firstname }}'s profile</h1>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Maecenas sollicitudin. </p></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">

                    <div class="block mb-5">
                        <div class="block-header"><strong class="text-uppercase">Personal details</strong></div>
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Maecenas sollicitudin. In rutrum. In convallis. Nunc tincidunt ante vitae massa. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Fusce dui leo, imperdiet in.</p></div>
                        </div>
                        <div class="block-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">First name:</label>
                                            {{ Auth::user()->firstname }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="lastname" class="form-label">Last name:</label>
                                            {{ Auth::user()->lastname }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email:  </label>
                                            {{ Auth::user()->email }}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mb-5">
                    <div class="customer-sidebar card border-0">
                        <div class="customer-profile"><a href="#" class="d-inline-block"><img src="https://images.unsplash.com/photo-1544815083-0aac11f03017?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="img-fluid rounded-circle customer-image"></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection