@extends('Admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic Table</h4>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usertable as $usertableitem)
                    <tr>
                        <td>
                            {{$usertableitem->name}}
                        </td>
                        <td>
                            {{$usertableitem->email}}
                        </td>
                            <td>

                                <a class="btn btn-danger" href="{{route('user.delete',$usertableitem->id)}}">Delete</a>
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
