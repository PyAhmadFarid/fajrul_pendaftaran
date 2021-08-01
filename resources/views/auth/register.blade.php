@extends('layout.default')

@section('content')

    @include('components.navbar')

    <div class=" w-full flex justify-center items-center md:mt-10">

        <form class=" m-10 p-10 bg-white rounded-md  md:w-1/2 w-full" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center font-semibold text-2xl pb-10">Form Pendaftaran</div>
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="nama">Nama</label>
                <input value="{{old('nama')}}" class=" border rounded-md w-full px-3 py-2" type="text" id="nama" name="nama" placeholder="Nama">

                @if ($errors->has('nama'))
                    <small class=" text-red-500">{{ $errors->first('nama') }}</small>
                @endif

            </div>
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="email">E-mail</label>
                <input value="{{old('email')}}" class=" border rounded-md w-full px-3 py-2" type="text" id="email" name="email" placeholder="E-Mail">

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
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="confirmPassword">Confirm Password</label>
                <input class=" border rounded-md w-full px-3 py-2" type="password" id="confirmPassword"
                    name="confirmPassword" placeholder="Confirm Password">

                @if ($errors->has('confirmPassword'))
                    <small class=" text-red-500">{{ $errors->first('confirmPassword') }}</small>
                @endif
            </div>
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="buktiPembayaran">Bukti Pembayaran</label>
                <input value="{{old('buktiPembayaran')}}" class=" border rounded-md w-full px-3 py-2" type="file" id="buktiPembayaran" name="buktiPembayaran"
                    placeholder="buktiPembayaran" required="required">
                @if ($errors->has('buktiPembayaran'))
                    <small class=" text-red-500">{{ $errors->first('buktiPembayaran') }}</small>
                @endif
            </div>
            <div class="py-5">
                <button class="w-full bg-green-400 text-center px-3 py-2 rounded-md font-semibold text-white"
                    type="submit">Register</button>
            </div>
        </form>
    </div>



@endsection
