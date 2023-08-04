<x-app-layout>
    {{-- <x-slot name="header"> --}}

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <br>
            {{-- <em>Clothing</em> --}}
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    {{-- </x-slot> --}}
    @include('user.home.header')
    {{-- @include('user.about.navbar') --}}
    {{-- <div class="container">
        <a class="navbar-brand" href="{{url('')}}"><h2 style="color: #c80d0d">Sixteen <em>Clothing</em></h2></a> --}}
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
    {{-- </div> --}}
   

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
  
    @include('about')
</x-app-layout>
