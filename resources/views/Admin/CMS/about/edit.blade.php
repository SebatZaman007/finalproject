@extends('Admin.layout')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample"  action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
          <div class="form-group">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="about_image">
                <img src="{{asset(BlogImage().$edit->about_image)}}" width="70px" height="70px" alt="img">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Description</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="about_description" value="{{$edit->about_description}}">
          </div>

          <button type="submit" class="btn btn-primary me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>


@endsection
