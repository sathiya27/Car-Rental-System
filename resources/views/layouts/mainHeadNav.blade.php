<header class="header_section" style="background-color: rgb(51, 43, 66);">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{route('customer.homepage')}}">
                <span>
                    Rent4u
                </span>
            </a>

            <div class="navbar-collapse" id="">
                <div class="user_option">
                    @auth
                    Welcome {{Auth::user()->name}}
                    @else
                    <a href="{{route('login')}}" class="mr-4">Login</a>
                    <a href="{{route('register')}}">Register</a>
                    @endauth
                </div>
                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                        <a href="car.html">Cars</a>
                        <a href="blog.html">Blog</a>
                        <a href="contact.html">Contact Us</a>
                        @auth
                        @include('layouts.logoutForm')
                        @else
                        <a href="{{route('login')}}">Login</a>
                        <a href="{{route('register')}}">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>