@extends('layouts.web')
@section('title', 'Shopping Cart')

@section('content')
    <!-- Hero Section -->
    <section class="hero text-center py-5">
        <div class="hero-image">
            <img src="{{ asset('img/banner.png') }}" class="img-fluid" alt="Your Shopping Cart">
        </div>
        <div class="hero-text">
            <h1>Your Shopping Cart</h1>
            <p>Review the items in your cart before proceeding to checkout.</p>
        </div>
    </section>

    <!-- Cart Table -->
    <section class="cart py-5">
        <div class="container">
            <h2 class="text-center">Items in Your Cart</h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/lipstick.png') }}" alt="Baddie Berry" class="cart-img" style="width: 50px; height: auto;">
                                <span class="ms-2">Baddie Berry</span>
                            </div>
                        </td>
                        <td>Rs. 2999</td>
                        <td>1</td>
                        <td>Rs. 2999</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/serum1.png') }}" alt="Glow Up Elixir" class="cart-img" style="width: 50px; height: auto;">
                                <span class="ms-2">Glow Up Elixir</span>
                            </div>
                        </td>
                        <td>Rs. 3499</td>
                        <td>1</td>
                        <td>Rs. 3499</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/spf.png') }}" alt="SunKissed Tint" class="cart-img" style="width: 50px; height: auto;">
                                <span class="ms-2">SunKissed Tint</span>
                            </div>
                        </td>
                        <td>Rs. 1799</td>
                        <td>1</td>
                        <td>Rs. 1799</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center">
                <h4>Total: Rs. 8297</h4>
                <a href="#" class="btn btn-primary">Proceed to Checkout</a>
            </div>
        </div>
        <button id="goTopBtn" class="go-top"><i class="fas fa-arrow-up"></i></button>


    </section>
@endsection
