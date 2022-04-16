@extends('Admin.layout')

@section('content')


<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
<input type="hidden" name="id" value="{{$edit->id}}">
          <div class="form-group">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="product_image">
                <img src="{{asset(BlogImage().$edit->product_image)}}" width="70px" height="70px" alt="img">


          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Name</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="product_name" value="{{$edit->product_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Price</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="product_price" value="{{$edit->product_price}}" >
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Quantity</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="product_quantity" value="{{$edit->product_quantity}}">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Description</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="product_description" value="{{$edit->product_description}}">
          </div>

          <button type="submit" class="btn btn-primary me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>



@endsection

