<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us <span class="sr-only">(current)</span></a>  
            </li>
        </ul>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item mx-4">
                <a href="">English</a>
            </li>
            <li class="nav-item mx-4">
                Sign in
            </li>
            <li class="nav-item mx-4">
                Cart
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light nav-shadow mb-3">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">My Store <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('clothes') }} ">CLOTHES1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ACCESORIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">ART</a>
            </li>
        </ul>
        <ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search our catalog" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </ul>
    </div>
</nav>