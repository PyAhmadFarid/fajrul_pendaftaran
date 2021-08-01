@extends('layout.default')

@section('content')

    @include('components.navbar')

    <div class=" w-full flex justify-center items-center md:mt-10">

        <form class="m-10  p-10 bg-white rounded-md md:w-1/3 w-full" action="" method="POST">
            @csrf
            <div class="text-center font-semibold text-2xl pb-10">Selamat Datang!</div>
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="email">E-mail</label>
                <input class=" border rounded-md w-full px-3 py-2" type="text" id="email" name="email" placeholder="E-Mail">
                @if ($errors->has('email'))
                    <small class=" text-red-500">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="password">Password</label>
                <input class=" border rounded-md w-full px-3 py-2" type="password" id="password" name="password"
                    placeholder="Password">
                @if ($errors->has('password'))
                    <small class=" text-red-500">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <div class="py-5">
                <button class="w-full bg-green-400 text-center px-3 py-2 rounded-md font-semibold text-white"
                    type="submit">Login</button>
            </div>
        </form>
    </div>

@endsection
