@extends('Admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                <p class="btn btn-success"  class="card-description">
                    <a href="{{route('product.create')}}">Create </a>
                </p>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Costomer Name</th>
                    <th>Phone </th>
                    <th>Address </th>
                    <th>Product Title </th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($order as $orderitem)
                    <tr>
                        <td>
                            {{$orderitem->name}}
                        </td>
                        <td>
                            {{$orderitem->phone}}
                        </td>
                        <td>
                            {{$orderitem->address}}
                        </td>
                        <td>
                            {{$orderitem->product_name}}
                        </td>
                        <td>
                            {{$orderitem->quantity}}
                        </td>
                        <td>
                            {{$orderitem->price}}
                        </td>
                        <td>
                            {{$orderitem->status}}
                        </td>
                        <td>
                           <a href="{{route('update.status',$orderitem->id)}}" class="btn btn-success">Delivered</a>
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
