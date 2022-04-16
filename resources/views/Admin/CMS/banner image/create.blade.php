@extends('Admin.layout')

@section('content')


<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample"  action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="form-group">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple name="banner_image">

          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Description</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Description" name="banner_description">
          </div>

          <button type="submit" class="btn btn-primary me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>



@endsection

