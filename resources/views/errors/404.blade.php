@extends('front.layouts.base')
@section('content')
    <div class="main">
        <div class="page-header custom larger mb0">
            <div class="container-fluid">
                <h1>404 Page</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">404 Page</li>
                </ol>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->

        <div class="error-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="error-page-text">
                            <img src="{{ asset('images/front/images/errors/404_char.jpg') }}" class="hidden-sm hidden-xs" alt="Error Dude">
                            <h1>4<span class="text-custom">0</span>4</h1>
                            <h2>PAGE NOT FOUND</h2>
                            <p>Sorry, the page you are looking for is not available. Maybe you want to perform a search?</p>
                            <div class="action-container">
                                <a href="index.html" class="btn btn-custom">Go Home</a>
                                <a href="contact.html" class="btn btn-custom3">Contact Us</a>
                            </div><!-- End .action-container -->
                        </div><!-- End .error-page-text -->
                    </div><!-- End .col-md-6 -->

                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .error-page -->
    </div>
@endsection
@section('title','')
@section('description','')
@section('keywords','')
@section('css')
@endsection
@section('js')
@endsection