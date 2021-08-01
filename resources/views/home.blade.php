<script src="{{asset('js/splide.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/splide.min.css')}}">

@extends('layout.default')
@section('content')

@include('components.navbar')

<div class=" p-10">

    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">

                <div class="splide__slide h-2/5 flex justify-center overflow-hidden">
                    <img class="w-full align-middle inline-block"  src="{{ asset('image/pendaftaran.jpg') }}" >
                </div>
                <div class="splide__slide h-2/5 flex justify-center overflow-hidden">
                    <img class="w-full"  src="{{ asset('image/1.jpg') }}" >
                </div>
                <div class="splide__slide h-2/5 flex justify-center overflow-hidden">
                    <img class="w-full"  src="{{ asset('image/2.PNG') }}" >
                </div>
                {{-- <div class="splide__slide h-2/5 flex justify-center overflow-hidden">
                    <img class="w-full"  src="{{ asset('image/3.png') }}" >
                </div>
                 --}}
                {{-- <img class="splide__slide" src="{{ asset('image/1.jpg') }}" >
                <img class="splide__slide" src="{{ asset('image/2.PNG') }}" >
                <img class="splide__slide" src="{{ asset('image/3.png') }}" >
                <img class="splide__slide" src="{{ asset('image/silde3.jpg') }}" >
                <img class="splide__slide" src="{{ asset('image/slide1.jpg') }}" > --}}
            
            
            </ul>
        </div>
    </div>

</div>

<style>
    .splide__slide{
        text
    }
</style>

<script>
    new Splide( '.splide' ).mount();
</script>

@endsection

