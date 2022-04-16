@extends('frontend.layout')

@section('layout')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <form action="{{route('confirm.order')}}" method="POST">
        @csrf

          @php
                $total=0;
            @endphp
    <tbody>
        @foreach ($cart as $carts)
        <tr>
            <td>{{$carts->product_title}}
                <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
            </td>

            <td>{{$carts->quantity}}
            <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
            </td>
            <td>{{$carts->price}}
                <input type="text" name="price[]" value="{{$carts->price}}" hidden>
            </td>
            <td>
                <a class="btn btn-danger" href="{{route('cart.delete',$carts->id)}}">Delete</a>
            </td>

          </tr>
            @php
                $total += $carts->price*$carts->quantity ;
            @endphp
        @endforeach


    </tbody>
  </table>
   <h2> <b> Total Price : ${{$total}} </b> </h2><br>
   <a href="{{route('checkout')}}" class="btn btn-warning" style="width: 120px">Check Out</a><br>
  <button class="btn btn-success" style="width: 130px">Confirm Order</button>
</form>

@endsection
