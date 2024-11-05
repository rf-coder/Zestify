<header>
    <nav class="d-flex align-items-center">
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Zestify Logo" class="logo-img"> 
            <span class="logo-text ms-2"> Zestify</span> <!-- Zestify Text -->
        </a>
        <ul class="nav ms-auto"> <!-- Pushes the nav to the right -->
            <li class="nav-item"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('products')}}" class="nav-link">Products</a></li> 
            <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ route('cart')}}" class="nav-link"><i class="fas fa-shopping-cart me-2"></i></a></li>
        </ul>
    </nav>
</header>
