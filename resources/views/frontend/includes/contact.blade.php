<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{route('contact.store')}}" method="POST" >
                @csrf
              <div>
                <input type="text" placeholder="Your Name" name="contact_name"/>
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="contact_number" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" name="contact_email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="contact_message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
