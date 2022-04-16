@extends('Admin.layout')

@section('content')


<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample"  action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="form-group">
              <input type="hidden" name="id" value="{{$edit->id}}">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="client_image">
                <img src="{{asset(BlogImage().$edit->client_image)}}" width="70px" height="70px" alt="img">

          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Name</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="client_name" value="{{$edit->client_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Comment</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="client_comment" value="{{$edit->client_comment}}">
          </div>

          <button type="submit" class="btn btn-primary me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>



@endsection

