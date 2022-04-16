<!DOCTYPE html>
<html>
@include('frontend.includes.head')

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{asset('frontend/images/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
   @include('frontend.includes.navbar')
    <!-- end header section -->
  </div>

  <!-- about section -->

  @include('frontend.includes.about')

  <!-- about section ends -->

  <!-- footer section -->
@include('frontend.includes.footer')
  <!-- footer section -->

 @include('frontend.includes.scripts')
</body>

</html>
