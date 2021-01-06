<?php
    use App\Http\Controllers\ProductController;
    $total = 0;
    if(Session::has('user')){
        $total = ProductController::cartItem();
    }

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ URL::to('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Orders</a>
                </li>


            </ul>
            <form class="d-flex" action="{{ URL::to('/search') }}" method="get">
                <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav ms-auto  ">
                @if(Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('user')['name'] }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-secondary mt-2" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ URL::to('/logout') }}">Logout</a></li>

                    </ul>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/login') }}">Login</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="#">Cart({{ $total }})</a></li>
            </ul>

        </div>
    </div>
</nav>
