@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <div class="mb-30px"><a href="home"><img
                                        src="https://images.freeimages.com/images/large-previews/9a3/site-is-under-construction-2-1241832.jpg"
                                        alt="..." class="img-fluid"></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
