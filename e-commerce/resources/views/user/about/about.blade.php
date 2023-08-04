<!DOCTYPE html>
<html lang="en">

@include('user.home.header')

  <body>

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
  @include('user.about.navbar')

    <!-- Page Content -->
 @include('user.about.body')


    <!-- footer -->
  @include('user.about.footer')
