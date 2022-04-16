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
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($product as $productitem)
                    <tr>
                        <td>
                            <img src="{{BlogImage().$productitem->product_image}}" alt="image">
                        </td>
                        <td>
                            {{$productitem->product_name}}
                        </td>
                        <td>
                            {{$productitem->product_price}}
                        </td>
                        <td>
                            {{$productitem->product_quantity}}
                        </td>
                        <td>
                            <p>
                                {{ Str::limit($productitem->product_description, 50) }}
                            </p>
                        </td>
                            <td>
                                <a class="btn btn-success" href="{{route('product.edit',$productitem->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('product.delete',$productitem->id)}}">Delete</a>
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
