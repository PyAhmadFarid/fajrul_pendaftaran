@extends('layout.default')
@section('content')
    @include('components.navbar')


    @if ($status === 1)
        <div class=" p-10 rounded-md text-center my-10 mx-20 bg-green-100 border border-green-500">
            <h1 class=" p-5 text-3xl text-green-500 font-semibold">SELAMAT ANDA LOLOS!</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam? Facilis eligendi quae doloribus
                aut quisquam exercitationem, at placeat minus dolorum. Eum, ullam in? Laboriosam deleniti temporibus
                earum pariatur officia!
            </p>
        </div>
    @endif

    @if ($status === 0)
        <div class=" p-10 rounded-md text-center my-10 mx-20 bg-red-100 border border-red-500">
            <h1 class=" p-5 text-3xl text-red-500 font-semibold">MOHON MAAF ANDA TIDAH LOLOS :(</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam? Facilis eligendi quae doloribus
                aut quisquam exercitationem, at placeat minus dolorum. Eum, ullam in? Laboriosam deleniti temporibus
                earum pariatur officia!
            </p>
        </div>
    @endif

    @if ($status === null)
        <div class=" p-10 rounded-md text-center my-10 mx-20 bg-yellow-100 border border-yellow-500">
            <h1 class=" p-5 text-3xl text-yellow-500 font-semibold">MOHON MENGUNGGU PENGUNGUMAN</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam? Facilis eligendi quae doloribus aut
                quisquam exercitationem, at placeat minus dolorum. Eum, ullam in? Laboriosam deleniti temporibus earum
                pariatur officia!
            </p>
        </div>
    @endif







@endsection
