@extends('layouts.web')
@section('title', 'Products') 

@section('content')
    <div class="container">
<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Navbar for Categories -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories" aria-controls="navbarCategories" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCategories">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#all-products">All Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skincare">Skincare</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#haircare">Haircare</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nailcare">Nailcare</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#makeup">Makeup</a>
                </li>
            </ul>
            <!-- Search bar with icon -->
            <form class="d-flex ms-lg-auto mt-3 mt-lg-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    </nav>







        <section class="hero text-center">
            <div class="hero-image">
                <img src="{{ asset('img/banner.png') }}" class="img-fluid w-100" alt="Hero Image">
            </div>
            <div class="hero-text">
                <h1>Our Products</h1>
                <p>Discover the best skincare, haircare, makeup, and cosmetic products.</p>
            </div>
        </section>
        
        
        <!-- Product Sections -->
        <section id="all-products" class="my-5">
            <h2 class="text-center">All Products</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/lipstick.png') }}" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Baddie Berry</h5>
                            <p class="card-text">Rs. 2999/-</p>
                            <p class="card-text">
                                Unleash your inner baddie with Baddie Berry, a bold lipstick available in six gorgeous berry shades.
                            </p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <img src="{{ asset('img/serum1.png') }}" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Glow Up Elixir</h5>
                            <p class="card-text">Rs, 3499/-</p>
                            <p class="card-text">
                            This lightweight serum containing hyaluronic acid delivers deep moisture and a radiant, dewy finish. 
                            
                            </p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <img src="{{ asset('img/spf.png') }}" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">SunKissed Tint</h5>
                            <p class="card-text">Rs 1799/-</p>
                            <p class="card-text">
                                This lightweight tinted sunscreen offers sun protection while enhancing your complexion for a natural, sun-kissed finish.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/highlighter.png') }}" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Radiant Glow </h5>
                            <p class="card-text">Rs 1599/-</p>
                            <p class="card-text">This silky powder highlighter gives you a radiant, sun-kissed glow and blends effortlessly for that perfect highlight.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/shampoo.png') }}" class="card-img-top" alt="Product 5">
                        <div class="card-body">
                            <h5 class="card-title">Luxe Lather Shampoo</h5>
                            <p class="card-text">Rs 1959/-</p>
                            <p class="card-text">This gentle, sulfate-free formula cleanses while imparting moisture for beautifully nourished strands.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/cuticle.png') }}" class="card-img-top" alt="Product 6">
                        <div class="card-body">
                            <h5 class="card-title">Nourishing Cuticle Oil</h5>
                            <p class="card-text">Rs 949/-</p>
                            <p class="card-text">Infused with a blend of natural oils, this luxurious treatment hydrates and softens cuticles, promoting healthy nail growth.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/haircream.png') }}" class="card-img-top" alt="Product 7">
                        <div class="card-body">
                            <h5 class="card-title">Leave-In Luxe Cream</h5>
                            <p class="card-text">Rs 1249/-</p>
                            <p class="card-text">This lightweight formula adds moisture to the hair, reduces frizz, and enhances shine for a flawless finish.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/mascara.png') }}" class="card-img-top" alt="Product 8">
                        <div class="card-body">
                            <h5 class="card-title">Wink & Wonder Mascara</h5>
                            <p class="card-text">Rs 1499/-</p>
                            <p class="card-text">This clump-free formula delivers stunning length and volume, while the precision brush ensures effortless application.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/nailpolish.png') }}" class="card-img-top" alt="Product 9">
                        <div class="card-body">
                            <h5 class="card-title">Velvet Varnish</h5>
                            <p class="card-text">Rs 699/-</p>
                            <p class="card-text">Available in eight stunning shades, this premium nail polish glides on smoothly, offering a rich, velvety finish.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 10 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/eyeshadow.png') }}" class="card-img-top" alt="Product 10">
                        <div class="card-body">
                            <h5 class="card-title">Eye Shimmer Palette</h5>
                            <p class="card-text">Rs 2199/-</p>
                            <p class="card-text">This gorgeous collection features 12 glitter eyeshadows, each delivering vibrant color and brilliant shimmer.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 11 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/blush.png') }}" class="card-img-top" alt="Product 11">
                        <div class="card-body">
                            <h5 class="card-title">Sweet Cheeks Blush</h5>
                            <p class="card-text">Rs 1199/-</p>
                            <p class="card-text">This silky formula glides on effortlessly, providing a natural flush of color in a range of stunning shades.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 12 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/hairspray.png') }}" class="card-img-top" alt="Product 12">
                        <div class="card-body">
                            <h5 class="card-title">Glam Lock Spray</h5>
                            <p class="card-text">Rs 1399/-</p>
                            <p class="card-text">This lightweight formula provides strong hold without stiffness, adding shine while taming frizz and flyaways.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 13 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/scrub.png') }}" class="card-img-top" alt="Product 13">
                        <div class="card-body">
                            <h5 class="card-title">Glow Boost Exfoliator</h5>
                            <p class="card-text">Rs 2799/-</p>
                            <p class="card-text">This gentle exfoliating scrub sloughs away dead skin, promoting a brighter, more refined complexion.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 14 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/eyecream.png') }}" class="card-img-top" alt="Product 14">
                        <div class="card-body">
                            <h5 class="card-title">Revive Eye Cream</h5>
                            <p class="card-text">Rs 799/-</p>
                            <p class="card-text">This nourishing formula reduces puffiness, dark circles, and fine lines, leaving your eyes looking refreshed and youthful.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 15 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/nailfile.png') }}" class="card-img-top" alt="Product 15">
                        <div class="card-body">
                            <h5 class="card-title"> Velvet Buff Nail File</h5>
                            <p class="card-text">Rs 499/-</p>
                            <p class="card-text">This ultra-gentle buffing nail file polishes nails to a silky, smooth finish, creating the perfect natural shine.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 16 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/hairserum.png') }}" class="card-img-top" alt="Product 16">
                        <div class="card-body">
                            <h5 class="card-title"> Therma Glow Hair Serum</h5>
                            <p class="card-text">Rs 1499/-</p>
                            <p class="card-text">This lightweight formula shields your strands from heat damage while delivering a brilliant, glossy finish. </p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 17 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/foundation.png') }}" class="card-img-top" alt="Product 17">
                        <div class="card-body">
                            <h5 class="card-title">Flawless Foundation</h5>
                            <p class="card-text">Rs 1699/-</p>
                            <p class="card-text"> This lightweight, buildable formula offers full coverage with a natural, long-lasting finish, perfect for all-day wear. </p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 18 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/moisturiser.png') }}" class="card-img-top" alt="Product 18">
                        <div class="card-body">
                            <h5 class="card-title">AloeVera Cream</h5>
                            <p class="card-text">Rs 1249/-</p>
                            <p class="card-text">Enriched with pure aloe vera, this lightweight formula soothes and rejuvenates, delivering hydration while calming irritated skin.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 19 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/hairoil.png') }}" class="card-img-top" alt="Product 19">
                        <div class="card-body">
                            <h5 class="card-title">Onion Ginger Hair Oil</h5>
                            <p class="card-text">Rs 849/-</p>
                            <p class="card-text">Infused with onion and ginger, this oil nourishes the scalp, reduces hair fall, and leaves hair visibly shinier and healthier.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 20 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/nails.png') }}" class="card-img-top" alt="Product 20">
                        <div class="card-body">
                            <h5 class="card-title">French Press-On Nails</h5>
                            <p class="card-text">Rs 1149/-</p>
                            <p class="card-text">Designed for a timeless, elegant finish, these easy-to-apply nails deliver a chic French manicure in minutes.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 21 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/toner.png') }}" class="card-img-top" alt="Product 21">
                        <div class="card-body">
                            <h5 class="card-title">Rice Milk Toner</h5>
                            <p class="card-text">Rs 1149/-</p>
                            <p class="card-text">Enriched with nourishing rice milk, this gentle toner hydrates and refines pores, leaving your skin smooth, soft, and radiant.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 22 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/shimmer.png') }}" class="card-img-top" alt="Product 22">
                        <div class="card-body">
                            <h5 class="card-title">Nail Shimmer</h5>
                            <p class="card-text">Rs 949/-</p>
                            <p class="card-text">This high-shine, long-lasting formula glides on smoothly, giving your nails a radiant sparkle that catches the light.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 23 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/haircolor.png') }}" class="card-img-top" alt="Product 23">
                        <div class="card-body">
                            <h5 class="card-title">Radiant Locks Hair Color</h5>
                            <p class="card-text">Rs 2149/-</p>
                            <p class="card-text">This vibrant, long-lasting formula, available in six captivating shades, delivers stunning color while nourishing your hair.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 24 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/nailremover.png') }}" class="card-img-top" alt="Product 24">
                        <div class="card-body">
                            <h5 class="card-title">Pure Polish Remover</h5>
                            <p class="card-text">Rs 349/-</p>
                            <p class="card-text">This gentle and acetone-free formula quickly dissolves polish while leaving your nails nourished and healthy. </p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Skincare -->
        <section id="skincare" class="my-5">
            <h2 class="text-center">Skincare Products</h2>
            <div class="row">
                <!-- Product 1: Glow Up Elixir -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/serum1.png') }}" class="card-img-top" alt="Glow Up Elixir">
                <div class="card-body">
                    <h5 class="card-title">Glow Up Elixir</h5>
                    <p class="card-text">Rs. 3499/-</p>
                    <p class="card-text">This lightweight serum containing hyaluronic acid delivers deep moisture and a radiant, dewy finish.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 2: SunKissed Tint -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/spf.png') }}" class="card-img-top" alt="SunKissed Tint">
                <div class="card-body">
                    <h5 class="card-title">SunKissed Tint</h5>
                    <p class="card-text">Rs. 1799/-</p>
                    <p class="card-text">This lightweight tinted sunscreen offers sun protection while enhancing your complexion for a natural, sun-kissed finish.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 3: Glow Boost Exfoliator -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/scrub.png') }}" class="card-img-top" alt="Glow Boost Exfoliator">
                <div class="card-body">
                    <h5 class="card-title">Glow Boost Exfoliator</h5>
                    <p class="card-text">Rs. 2799/-</p>
                    <p class="card-text">This gentle exfoliating scrub sloughs away dead skin, promoting a brighter, more refined complexion.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 4: Revive Eye Cream -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/eyecream.png') }}" class="card-img-top" alt="Revive Eye Cream">
                <div class="card-body">
                    <h5 class="card-title">Revive Eye Cream</h5>
                    <p class="card-text">Rs. 799/-</p>
                    <p class="card-text">This nourishing formula reduces puffiness, dark circles, and fine lines, leaving your eyes looking refreshed and youthful.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 5: Aloe Vera Cream -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/moisturiser.png') }}" class="card-img-top" alt="Aloe Vera Cream">
                <div class="card-body">
                    <h5 class="card-title">AloeVera Cream</h5>
                    <p class="card-text">Rs. 1249/-</p>
                    <p class="card-text">Enriched with pure aloe vera, this lightweight formula soothes and rejuvenates, delivering hydration while calming irritated skin.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 6: Rice Milk Toner -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/toner.png') }}" class="card-img-top" alt="Rice Milk Toner">
                <div class="card-body">
                    <h5 class="card-title">Rice Milk Toner</h5>
                    <p class="card-text">Rs. 1149/-</p>
                    <p class="card-text">Enriched with nourishing rice milk, this gentle toner hydrates and refines pores, leaving your skin smooth, soft, and radiant.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    
            </div>
        </section>
<!-- Haircare  -->
        <section id="haircare" class="my-5">
            <h2 class="text-center">Haircare Products</h2>
            <div class="row">
             <!-- Product 1: Luxe Lather Shampoo -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/shampoo.png') }}" class="card-img-top" alt="Luxe Lather Shampoo">
                <div class="card-body">
                    <h5 class="card-title">Luxe Lather Shampoo</h5>
                    <p class="card-text">Rs. 1959/-</p>
                    <p class="card-text">This gentle, sulfate-free formula cleanses while imparting moisture for beautifully nourished strands.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 2: Leave-In Luxe Cream -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/haircream.png') }}" class="card-img-top" alt="Leave-In Luxe Cream">
                <div class="card-body">
                    <h5 class="card-title">Leave-In Luxe Cream</h5>
                    <p class="card-text">Rs. 1249/-</p>
                    <p class="card-text">This lightweight formula adds moisture to the hair, reduces frizz, and enhances shine for a flawless finish.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 3: Glam Lock Spray -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/hairspray.png') }}" class="card-img-top" alt="Glam Lock Spray">
                <div class="card-body">
                    <h5 class="card-title">Glam Lock Spray</h5>
                    <p class="card-text">Rs. 1399/-</p>
                    <p class="card-text">This lightweight formula provides strong hold without stiffness, adding shine while taming frizz and flyaways.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 4: Therma Glow Hair Serum -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/hairserum.png') }}" class="card-img-top" alt="Therma Glow Hair Serum">
                <div class="card-body">
                    <h5 class="card-title">Therma Glow Hair Serum</h5>
                    <p class="card-text">Rs. 1499/-</p>
                    <p class="card-text">This lightweight formula shields your strands from heat damage while delivering a brilliant, glossy finish.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 5: Onion Ginger Hair Oil -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/hairoil.png') }}" class="card-img-top" alt="Onion Ginger Hair Oil">
                <div class="card-body">
                    <h5 class="card-title">Onion Ginger Hair Oil</h5>
                    <p class="card-text">Rs. 849/-</p>
                    <p class="card-text">Infused with onion and ginger, this oil nourishes the scalp, reduces hair fall, and leaves hair visibly shinier and healthier.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 6: Radiant Locks Hair Color -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/haircolor.png') }}" class="card-img-top" alt="Radiant Locks Hair Color">
                <div class="card-body">
                    <h5 class="card-title">Radiant Locks Hair Color</h5>
                    <p class="card-text">Rs. 2149/-</p>
                    <p class="card-text">This vibrant, long-lasting formula, available in six captivating shades, delivers stunning color while nourishing your hair.</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
            </div>
        </section>
<!-- Nailcare -->
        <section id="nailcare" class="my-5">
            <h2 class="text-center">Nailcare Products</h2>
            <div class="row">
            <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/cuticle.png') }}" class="card-img-top" alt="Nourishing Cuticle Oil">
            <div class="card-body">
                <h5 class="card-title">Nourishing Cuticle Oil</h5>
                <p class="card-text">Rs 949/-</p>
                <p class="card-text">Infused with a blend of natural oils, this luxurious treatment hydrates and softens cuticles, promoting healthy nail growth.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 2: Velvet Varnish -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/nailpolish.png') }}" class="card-img-top" alt="Velvet Varnish">
            <div class="card-body">
                <h5 class="card-title">Velvet Varnish</h5>
                <p class="card-text">Rs 699/-</p>
                <p class="card-text">Available in eight stunning shades, this premium nail polish glides on smoothly, offering a rich, velvety finish.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 3: Velvet Buff Nail File -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/nailfile.png') }}" class="card-img-top" alt="Velvet Buff Nail File">
            <div class="card-body">
                <h5 class="card-title">Velvet Buff Nail File</h5>
                <p class="card-text">Rs 499/-</p>
                <p class="card-text">This ultra-gentle buffing nail file polishes nails to a silky, smooth finish, creating the perfect natural shine.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 4: French Press-On Nails -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/nails.png') }}" class="card-img-top" alt="French Press-On Nails">
            <div class="card-body">
                <h5 class="card-title">French Press-On Nails</h5>
                <p class="card-text">Rs 1149/-</p>
                <p class="card-text">Designed for a timeless, elegant finish, these easy-to-apply nails deliver a chic French manicure in minutes.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 5: Nail Shimmer -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/shimmer.png') }}" class="card-img-top" alt="Nail Shimmer">
            <div class="card-body">
                <h5 class="card-title">Nail Shimmer</h5>
                <p class="card-text">Rs 949/-</p>
                <p class="card-text">This high-shine, long-lasting formula glides on smoothly, giving your nails a radiant sparkle that catches the light.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 6: Cutie Nail Remover -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/nailremover.png') }}" class="card-img-top" alt="Cutie Nail Remover">
            <div class="card-body">
                <h5 class="card-title">Pure Polish Remover</h5>
                <p class="card-text">Rs 349/-</p>
                <p class="card-text">This gentle and acetone-free formula quickly dissolves polish while leaving your nails nourished and healthy.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
            </div>
        </section>
<!-- Makeup  -->
        <section id="makeup" class="my-5">
            <h2 class="text-center">Makeup Products</h2>
            <div class="row">
                 <!-- Product 1: Radiant Glow -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/highlighter.png') }}" class="card-img-top" alt="Radiant Glow">
            <div class="card-body">
                <h5 class="card-title">Radiant Glow</h5>
                <p class="card-text">Rs 1599/-</p>
                <p class="card-text">This silky powder highlighter gives you a radiant, sun-kissed glow and blends effortlessly for that perfect highlight.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 2: Baddie Berry -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/lipstick.png') }}" class="card-img-top" alt="Baddie Berry">
            <div class="card-body">
                <h5 class="card-title">Baddie Berry</h5>
                <p class="card-text">Rs. 2999/-</p>
                <p class="card-text">Unleash your inner baddie with Baddie Berry, a bold lipstick available in six gorgeous berry shades.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 3: Wink & Wonder Mascara -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/mascara.png') }}" class="card-img-top" alt="Wink & Wonder Mascara">
            <div class="card-body">
                <h5 class="card-title">Wink & Wonder Mascara</h5>
                <p class="card-text">Rs 1499/-</p>
                <p class="card-text">This clump-free formula delivers stunning length and volume, while the precision brush ensures effortless application.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 4: Eye Shimmer Palette -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/eyeshadow.png') }}" class="card-img-top" alt="Eye Shimmer Palette">
            <div class="card-body">
                <h5 class="card-title">Eye Shimmer Palette</h5>
                <p class="card-text">Rs 2199/-</p>
                <p class="card-text">This gorgeous collection features 12 glitter eyeshadows, each delivering vibrant color and brilliant shimmer.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 5: Sweet Cheeks Blush -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/blush.png') }}" class="card-img-top" alt="Sweet Cheeks Blush">
            <div class="card-body">
                <h5 class="card-title">Sweet Cheeks Blush</h5>
                <p class="card-text">Rs 1199/-</p>
                <p class="card-text">This silky formula glides on effortlessly, providing a natural flush of color in a range of stunning shades.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <!-- Product 6: Flawless Foundation -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/foundation.png') }}" class="card-img-top" alt="Flawless Foundation">
            <div class="card-body">
                <h5 class="card-title">Flawless Foundation</h5>
                <p class="card-text">Rs 1699/-</p>
                <p class="card-text">This lightweight, buildable formula offers full coverage with a natural, long-lasting finish, perfect for all-day wear.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
            </div>
            <button id="goTopBtn" class="go-top" >Top</button>
            </section>
    </div>
@endsection
