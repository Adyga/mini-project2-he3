@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">About</li>
        </ol>
        <div class="item home-full-item"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/NJIT_Highlanders_wordmark.svg/1280px-NJIT_Highlanders_wordmark.svg.png"
                    alt=""
                    class="img-fluid">
            <div class="container-fluid h-100 py-5">
            </div>
            <div class="search-area d-flex align-items-center justify-content-center">
            <h1 class="feature-heading">About the Mini Project 2</h1>
        </div>

        <!-- START THE FEATURES -->

        <hr class="feature-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="feature-heading"><a href="first">First, <span class="text-muted">create the page.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="mb-30px"><a href="first"><img
                                src="https://images.freeimages.com/images/large-previews/c99/globe-with-internet-symbol-plant-1633954.jpg"
                                alt="..." class="img-fluid"></a>
                    <p><a href="first" class="btn btn-light">View Details</a></p>
                </div>
            </div>
        </div>

        <hr class="feature-divider">

        <div class="row feature">
            <div class="col-md-7 order-md-2">
                <h2 class="feature-heading"><a href="second">Second, <span class="text-muted">run unit tests.</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="mb-30px"><a href="second"><img
                                src="https://images.freeimages.com/images/large-previews/d8b/settings-1241475.jpg"
                                alt="..." class="img-fluid"></a>
                    <p><a href="second" class="btn btn-light">View Details</a></p>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="feature-heading"><a href="last">And lastly, <span class="text-muted">perform database functions.</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <div class="mb-30px"><a href="last"><img
                                src="https://images.freeimages.com/images/large-previews/58e/blue-chrome-website-buttons-3-1144972.jpg"
                                alt="..." class="img-fluid"></a>
                    <p><a href="last" class="btn btn-light">View Details</a></p>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

@endsection