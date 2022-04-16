<!DOCTYPE html>
<html lang="en">
  @include('Admin.include.head')
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
    @include('Admin.include.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Admin.include.navbar')
        <!-- partial -->
        <div class="main-panel">
           @include('Admin.include.body')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('Admin.include.footer')
            <!-- partial -->
          </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Admin.include.scripts')
  </body>
</html>
