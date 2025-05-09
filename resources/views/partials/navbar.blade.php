<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="75">
        <h2 class="brand">Treasure Trove</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact_us') ? 'active' : '' }}"
                        href="{{ route('contact_us') }}"> Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icons {{ request()->routeIs('cart') ? 'active' : '' }}"
                        href="{{ route('cart') }}">
                        <i class="fa-solid fa-cart-shopping"> My Cart (
                            <strong>{{ count(session('cart', [])) }}</strong>)</i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link icons {{ request()->routeIs('account') ? 'active' : '' }}"
                        href="{{ route('account') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                @guest
                    {{-- <li class="nav-item">
                        <a class="nav-link" ">Register</a>
                    </li> --}}
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" "
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                            <form id="logout-form" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>
