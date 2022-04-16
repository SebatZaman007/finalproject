<section class="product_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center ">
        <h2 class="">
          New Arrivals
        </h2>
        <p class="col-lg-8 px-0">
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        </p>
      </div>
      <div class="row">
@foreach ($product as $productitem)
<div class="col-sm-6 col-md-3">
    <div class="box">
      <div class="img-box">
        <img src="{{asset(BlogImage().$productitem->product_image)}}" alt="">
      </div>
      <div class="detail-box">
        <h4>
         {{$productitem->product_name}}
        </h4>
        <h6 class="price">
          <span class="new_price">
            {{$productitem->product_price}}$
          </span>

        </h6>
       <form  action="{{route('add.cart',$productitem->id)}}" method="POST">
           @csrf
           <input class="form-control" style="width: 100px" type="number" value="1" min="1" name="quantity">
           <input class="btn btn-primary" type="submit" value="Add Cart">
       </form>
      </div>
    </div>
  </div>
@endforeach


      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section>
