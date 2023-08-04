
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('') }}">
                    <h2>Sixteen <em>Clothing</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            {{-- nav-item active --}}
                            <a class="nav-link" href="{{url('')}}">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about_us')}}">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('contactUs')}}">Contact Us</a>
                          </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('register') }}">Register</a>
                        </li>
                        @endguest
                        @auth
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Profile</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cart')}}">Cart</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('../dashboard')}}">{{Auth::user()->name}}</a>
                          </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    