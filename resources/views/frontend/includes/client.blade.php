<section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap">
          <div class="owl-carousel client_owl-carousel">
              @foreach ($client as $clientitem)
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset(BlogImage().$clientitem->client_image)}}" alt="" class="img-1">
                  </div>
                  <div class="detail-box">
                    <h5>
                      {{$clientitem->client_name}}
                    </h5>
                    <h6>
                      Magna
                    </h6>
                    <p>
                      {{$clientitem->client_comment}}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
