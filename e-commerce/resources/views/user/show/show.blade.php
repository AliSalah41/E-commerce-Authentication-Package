@extends('user.show.layout')


@section('content')
    <div class="latest-products">
        <div class="container">
            <a href="{{ url('') }}">Back</a>
            <div class="row d-flex justify-content-center ">
                @include('user.contact.success')
                @include('user.show.error')
                @include('user.show.errors')
                <div class="col-md-12">
                    <div class="section-heading">

                     <form action="{{url('AddToCart')}}" method="POST">  
                        @csrf 

                        @if (Auth::user() != null)
                        
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >

                        @endif

                        <input type="hidden" name="id" value="{{$product->id}}" >
                        <h4>{{ $product->name }}</h4>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="product-item">
                            <img name ="image" src="{{ asset("storage/$product->image") }}" width="150" hight="100" alt="">

                            <div style="display: none">
                                <input type="text" name="image" value="{{$product->image}}">
                            </div>
                            
                            <div class="down-content">
                                {{-- <a href="#"> --}}
                                    <h4 name ="name">{{ $product->name }}</h4>
                                    <input type="hidden" name="name" value="{{$product->name}}" >
                                {{-- </a> --}}
                                
                                <h6>$ {{$product->price}}</h6> 
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <p>{{ $product->desc }}.</p> 
                                <input type="hidden" name="desc" value="{{$product->desc}}">   
                 
                            @auth
                            <label for="quantity" style="color: #FF0000">quantity</label>
                            <input type="number" name="quantity" style="width: 50px">
                            <button class="btn btn-success p-2 mt-2" type="submit">Add To Cart</button>
                            @endauth
                            
                        </form> 
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
