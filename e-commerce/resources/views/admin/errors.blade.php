@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
 
 
 
 
 {{-- @if (session()->has('error'))
        @foreach (session()->get('error') as $error ) --}}
            {{-- {{$error}} --}}
            {{-- <div class="alert alert-danger">{{$error}}</div>
            <br>
       @endforeach  
    @endif    --}}

{{--         
    $errors->any()
    $errors->all() --}}

    {{-- @if (session()->has('errors'))  

         <p class="alert alert-danger">{{session()->get('errors')}}</p>
        
    @endif --}}



