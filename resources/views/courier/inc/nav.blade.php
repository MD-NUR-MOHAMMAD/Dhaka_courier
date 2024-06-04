<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.html"><img src="{{ asset('courier/public/assets/img/gallery/logo.png ')}}" height="45"
                alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
            </ul>
            <div class="dropdown d-none d-lg-block">
                <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-warning"></i></button>
                <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1"
                    style="top:55px">
                    <form>
                        <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search"
                            style="background:#FDF1DF;" />
                    </form>
                </div>
            </div>
            <a class="btn btn-primary" href="#!">Contact Us</a>

            @guest
            <a class="btn btn-success order-1 order-lg-0 ms-lg-3" href="{{route('login')}}">login</a>
            <a class="btn btn-success order-1 order-lg-0 ms-lg-3" href="{{route('register')}}">Register</a>
            @endguest
            @auth
            {{-- <a class="btn btn-success order-1 order-lg-0 ms-lg-3" href="{{route('dashboard')}}">Dashboard</a> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-success order-1 order-lg-0 ms-lg-3">Logout</button>
            </form>
            @endauth
            
            
            <form class="d-flex my-3 d-block d-lg-none">
                <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search"
                    aria-label="Search" />
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            
            
        </div>
    </div>
</nav>
