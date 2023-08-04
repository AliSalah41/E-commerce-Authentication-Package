@if (session()->has('error'))
@foreach (session()->get('error') as $error )
    {{-- {{$error}} --}}
    <div class="alert alert-danger">{{$error}}</div>
    <br>
@endforeach  
@endif

 {{-- @if (session()->has('error'))
        @foreach (session()->get('error') as $error ) --}}
            {{-- {{$error}} --}}
            {{-- <div class="alert alert-danger">{{$error}}</div>
            <br>
       @endforeach  
    @endif    --}}

