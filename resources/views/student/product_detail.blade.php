@extends('layouts.web')
@section('title', 'Baddie Berry - Product Detail')

@section('content')
<section class="hero text-center">
        <div class="hero-image">
            <!-- Hero Image: Banner for the homepage -->
            <img src="{{ asset('img/banner.png') }}" class="img-fluid" alt="Hero Image">
        </div>
        <div class="hero-text">
            <!-- Main heading and subheading for the hero section -->
            <h1>Baddie Berry</h1>
            <p>Discover the bold and vibrant world of Baddie Berry—where luscious lips meet stunning shades.</p>
            <!-- Button linking to the products page -->
            <a href="/products" class="btn btn-primary">Go Back</a>
        </div>
    </section>
    <!-- Product Detail Section -->
    <section class="product-detail py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Product Image -->
                    <img src="{{ asset('img/lipstick.png') }}" class="img-fluid" alt="Baddie Berry">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-between">
                    <div>
                        <h1>Baddie Berry</h1>
                        <p class="price">Rs. 2999/-</p>
                        <p class="description">
                            Experience the bold and vibrant color of Baddie Berry. Our premium lipstick offers long-lasting wear and hydration for your lips. Available in six stunning shades: 
                            <strong>Berry Bliss, Ruby Red, Pink Petal, Mauve Magic, Coral Crush, and Sunset Orange.</strong>
                        </p>
                        <!-- Shade Selection -->
                        <div class="shade-selection">
                            <h4>Select a Shade:</h4>
                            <select class="form-control">
                                <option value="berry_bliss">Berry Bliss</option>
                                <option value="ruby_red">Ruby Red</option>
                                <option value="pink_petal">Pink Petal</option>
                                <option value="mauve_magic">Mauve Magic</option>
                                <option value="coral_crush">Coral Crush</option>
                                <option value="sunset_orange">Sunset Orange</option>
                            </select>
                        </div>
                    </div>
                    <!-- Button to add the product to the cart -->
                    <a href="#" class="btn btn-success mt-3">Add to Cart</a>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="reviews mt-5">
                <h2>Customer Reviews</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Average Rating: ★★★★☆ (4.0)</h5>
                        <p class="card-text">Total Reviews: 4</p>
                    </div>
                </div>

                <div class="review">
                    <h5>Eman Atif</h5>
                    <p>★★★★★</p>
                    <p>I absolutely love this lipstick! The color is stunning and it lasts all day.</p>
                </div>
                <div class="review">
                    <h5>Duaa Khalid</h5>
                    <p>★★★★☆</p>
                    <p>Great product, but I wish it came in more shades!</p>
                </div>
                <div class="review">
                    <h5>Habiba Tanveer</h5>
                    <p>★★★★★</p>
                    <p>Best lipstick I've ever used! Highly recommend!</p>
                </div>
                <div class="review">
                    <h5>Areeba Nasir</h5>
                    <p>★★☆☆☆</p>
                    <p>Worst lipstick ever!</p>
                </div>

                <!-- Add Review Form -->
                <div class="add-review mt-4">
                    <h3>Leave a Review</h3>
                    <form action="#" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select class="form-control" id="rating" name="rating" required>
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="review">Your Review</label>
                            <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Button to scroll back to the top of the page -->
        <button id="goTopBtn" class="go-top"><i class="fas fa-arrow-up"></i></button>

    </section>
@endsection
