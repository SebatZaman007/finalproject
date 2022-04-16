@extends('Admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                <p class="btn btn-success"  class="card-description">
                    <a href="{{route('about.create')}}">Create</a>
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
                    @foreach ($about as $aboutitem)
                    <tr>
                        <td>
                            <img src="{{BlogImage().$aboutitem->about_image}}" alt="image">
                        </td>
                        <td>
                            <p>
                                {{ Str::limit($aboutitem->about_description, 50) }}
                            </p>
                        </td>
                            <td>
                                <a class="btn btn-success" href="{{route('about.edit',$aboutitem->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('about.delete',$aboutitem->id)}}">Delete</a>
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
