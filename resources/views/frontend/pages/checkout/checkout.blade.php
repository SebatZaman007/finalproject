@extends('frontend.layout')

@section('layout')
<div class="container">
    <div class="row">
        <div class="col-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Billing Form</h4>
                <p class="card-description"> </p>
                <form class="forms-sample"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label for="exampleInputCity1">Name</label>
                    <input type="text" class="form-control" name="billuser_name" id="billuser_name" value="{{$user_details->name}}" placeholder="Name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Address</label>
                    <input type="text" class="form-control" name="billuser_address" id="billuser_address" placeholder="Adress" value="{{$user_details->address}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Phone Number</label>
                    <input type="text" class="form-control" name="billuser_phone" id="billuser_phone" placeholder="Phone Number" value="{{$user_details->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Email</label>
                    <input type="email" class="form-control" name="billuser_email" id="billuser_email" placeholder="Email" value="{{$user_details->email}}">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>

                </form>
              </div>
            </div>
          </div>


          <div class="col-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Billing Form</h4>
                <p class="card-description"> </p>
                <form class="forms-sample"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label for="exampleInputCity1">Name</label>
                    <input type="text" class="form-control" name="billuser_name" id="billuser_name" value="{{$user_details->name}}" placeholder="Name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Address</label>
                    <input type="text" class="form-control" name="billuser_address" id="billuser_address" placeholder="Adress" value="{{$user_details->address}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Phone Number</label>
                    <input type="text" class="form-control" name="billuser_phone" id="billuser_phone" placeholder="Phone Number" value="{{$user_details->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">Email</label>
                    <input type="email" class="form-control" name="billuser_email" id="billuser_email" placeholder="Email" value="{{$user_details->email}}">
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>



@endsection
