<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{asset(BlogImage().$banner->banner_image)}}" alt="">
    </div>
    <!-- header section strats -->
    @include('frontend.includes.navbar')
    <!-- end header section -->
    <!-- slider section -->
    @include('frontend.includes.slider')
    <!-- end slider section -->
  </div>


  <!-- product section -->

  <!-- product section ends -->

  <!-- about section -->

@include('frontend.includes.about')

  <!-- about section ends -->

  <!-- product section -->

  @include('frontend.product.product')

  <!-- product section ends -->


  <!-- contact section -->
  @include('frontend.includes.contact')
  <!-- end contact section -->

  <!-- client section -->

@include('frontend.includes.client')

  <!-- end client section -->

  <!-- footer section -->
  @include('frontend.includes.footer')
  <!-- footer section -->

 @include('frontend.includes.scripts')
</body>

</html>
