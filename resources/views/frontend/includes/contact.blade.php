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
            <div id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.4680165022046!2d89.5499698149155!3d22.822167985054882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9008870bfd93%3A0xf684d314e4b6e473!2sNorthern%20University%20of%20Business%20%26%20Technology%20Khulna!5e0!3m2!1sen!2sbd!4v1650358385416!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
