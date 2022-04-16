@extends('Admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                <p class="btn btn-success"  class="card-description">
                    <a href="{{route('banner.create')}}">Create </a>
                </p>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($banner as $banneritem)
                    <tr>
                        <td>
                            <img src="{{BlogImage().$banneritem->banner_image}}" alt="image">
                        </td>
                        <td>
                            <p>
                                {{ Str::limit($banneritem->banner_description, 50) }}
                            </p>
                        </td>
                            <td>
                                <a class="btn btn-success" href="{{route('banner.edit',$banneritem->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('banner.delete',$banneritem->id)}}">Delete</a>
                            </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
