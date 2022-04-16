<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body>
  <div class="hero_area">
    <div class="hero_bg_box">


    </div>
    <!-- header section strats -->

    @include('frontend.includes.navbar')
    <!-- end header section -->
    <!-- slider section -->

    @yield('layout')

    <!-- end slider section -->
  </div>

  <!-- product section -->

  <!-- product section ends -->

  <!-- about section -->


  <!-- end client section -->

  <!-- footer section -->
  @include('frontend.includes.footer')
  <!-- footer section -->

 @include('frontend.includes.scripts')
</body>

</html>
