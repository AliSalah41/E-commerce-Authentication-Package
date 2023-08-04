 <!-- ***** Preloader Start ***** -->
 <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{url('')}}"><h2>Sixteen <em>Clothing</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          {{-- <li class="nav-item">
            <a class="nav-link" href="products.html">Our Products</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('about_us')}}">About Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('contactUs')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cart')}}">Cart</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('../dashboard')}}">{{Auth::user()->name}}</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</header>