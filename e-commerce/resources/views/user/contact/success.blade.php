@if (session()->has('success'))

  <p class="alert alert-success">
    {{session()->get('success')}}
  </p>
  {{-- {{$success}} --}}
  {{-- <div class="alert alert-success">{{$success}}</div> --}}

@endif
    