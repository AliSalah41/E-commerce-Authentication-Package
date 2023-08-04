@extends('user.cart.layout')

@section('content')
    <div class="container">
        <div class="row pt-5 mt-5">
            <div class="col-md-12">
                @include('user.contact.success')

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">desc</th>
                            <th scope="col">image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($carts as $pro)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td><a href="{{url("show/$pro->product_id")}}">
                                            {{ $pro['name'] }}</td>
                                        </a>
                                    <td>{{ $pro['price'] }}</td>
                                    <td>{{ $pro['desc'] }}</td>
                                    <td><img src="{{asset("storage/$pro->image")}}" width="100px" alt="" srcset=""></td>
                                    <td>
                                 
                                    <div class="d-flex">

                                        <form action="{{ url("deleteOrder/$pro->id") }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>                                  
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                <a href="place_order" class="btn mx-auto  btn-info">order</a>
            </div>
        </div>
    </div>
@endsection
