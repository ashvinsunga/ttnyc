<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">LaravelApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" ">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                
                @guest
                        <li class="nav-item">
                            <a class="nav-link" ">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" ">Register</a>
                        </li>
                        <li class="nav-item">
                            <i class="fa-duotone fa-solid fa-cart-shopping"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa-duotone fa-solid fa-user"></i>
                        </li>
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
