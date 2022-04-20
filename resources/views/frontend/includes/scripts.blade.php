 <!-- jQery -->
 <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
 <!-- popper js -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <!-- bootstrap js -->
 <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
 <!-- owl slider -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <!-- custom js -->
 <script src="{{asset('frontend/js/custom.js')}}"></script>
 <!-- Google Map -->
 {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> --}}
 <!-- End Google Map -->

 <script>
     $(document).ready(function(){
        $("#billtoship").click(function(){
            if($('#billtoship').is(':checked')){
                $('#shipping_name').val($('#billuser_name').val());
                $('#shipping_address').val($('#billuser_address').val());
                $('#shipping_phone').val($('#billuser_phone').val());
                $('#shipping_email').val($('#billuser_email').val());

            } else {
                $('#shipping_name').val("");
                $('#shipping_address').val("");
                $('#shipping_phone').val("");
                $('#shipping_email').val("");
            }
        });
     });
 </script>
