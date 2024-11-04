@extends('layouts.web')
@section('title', 'Home') 

@section('content')
    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="hero-image">
            <!-- Hero Image: Banner for the homepage -->
            <img src="{{ asset('img/banner.png') }}" class="img-fluid" alt="Hero Image">
        </div>
        <div class="hero-text">
            <!-- Main heading and subheading for the hero section -->
            <h1>Discover Your Beauty Essentials</h1>
            <p>Shop the latest in skincare, haircare, makeup, and wellness.</p>
            <!-- Button linking to the products page -->
            <a href="/products" class="btn btn-primary">Shop Now</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products py-5">
        <div class="container">
            <h2 class="text-center">Featured Products</h2>
            <div class="row">
                <!-- Example Product Card (You can replicate this for multiple products) -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Product image -->
                        <img src="{{ asset('img/lipstick.png') }}" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <!-- Product title and price -->
                            <h5 class="card-title">Baddie Berry</h5>
                            <p class="card-text">Rs. 2999/-</p>
                            <!-- Button to add the product to the cart -->
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Product image -->
                        <img src="{{ asset('img/serum1.png') }}" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <!-- Product title and price -->
                            <h5 class="card-title">Glow Up Elixir</h5>
                            <p class="card-text">Rs. 3499/-</p>
                            <!-- Button to add the product to the cart -->
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Product image -->
                        <img src="{{ asset('img/spf.png') }}" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <!-- Product title and price -->
                            <h5 class="card-title">SunKissed Tint</h5>
                            <p class="card-text">Rs 1799/-</p>
                            <!-- Button to add the product to the cart -->
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Button to scroll back to the top of the page -->
        <button id="goTopBtn" class="go-top" >Top</button>

    </section>
@endsection
