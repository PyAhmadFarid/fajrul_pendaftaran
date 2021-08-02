@extends('layout.default')
@section('content')

    @include('components.navbar')


    <div class=" w-full flex justify-center items-center md:mt-10">

        <form class=" m-10 p-10 bg-white rounded-md  md:w-1/2 w-full" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center font-semibold text-2xl pb-10">Data Peserta</div>

            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="nama">Nama Lengkap</label>
                <input value="{{ $peserta ? $peserta->nama : old('nama') }}" class=" border rounded-md w-full px-3 py-2"
                    type="text" id="nama" name="nama" placeholder="Nama">

                @if ($errors->has('nama'))
                    <small class=" text-red-500">{{ $errors->first('nama') }}</small>
                @endif

            </div>

            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="alamat">Alamat</label>
                <input value="{{ $peserta ? $peserta->alamat : old('alamat') }}"
                    class=" border rounded-md w-full px-3 py-2" type="text" id="alamat" name="alamat" placeholder="Alamat">

                @if ($errors->has('alamat'))
                    <small class=" text-red-500">{{ $errors->first('alamat') }}</small>
                @endif

            </div>

            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="email">E-mail</label>
                <input value="{{ $peserta ? $peserta->user->email : old('email') }}"
                    class=" border rounded-md w-full px-3 py-2" type="text" id="email" name="email" placeholder="E-Mail">

                @if ($errors->has('email'))
                    <small class=" text-red-500">{{ $errors->first('email') }}</small>
                @endif

            </div>

            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="asal_sekolah">Asal Sekolah</label>
                <input value="{{ $peserta ? $peserta->asal_sekolah : old('asal_sekolah') }}"
                    class=" border rounded-md w-full px-3 py-2" type="text" id="asal_sekolah" name="asal_sekolah"
                    placeholder="Asal Sekolah">

                @if ($errors->has('asal_sekolah'))
                    <small class=" text-red-500">{{ $errors->first('asal_sekolah') }}</small>
                @endif

            </div>


            <div class="mb-5">
                <label  class=" text-gray-700 font-semibold"
                    for="nomer_hp">Nomer Hp</label>
                <input value="{{ $peserta ? $peserta->nomer_hp : old('nomer_hp') }}" class=" border rounded-md w-full px-3 py-2" type="number" id="nomer_hp" name="nomer_hp"
                    placeholder="Nomer HP">

                @if ($errors->has('nomer_hp'))
                    <small class=" text-red-500">{{ $errors->first('nomer_hp') }}</small>
                @endif

            </div>



            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="tempat_lahir">Tempat Lahir</label>
                <input value="{{ $peserta ? $peserta->tempat_lahir : old('tempat_lahir') }}"
                    class=" border rounded-md w-full px-3 py-2" type="text" id="tempat_lahir" name="tempat_lahir"
                    placeholder="Tempat Lahir">

                @if ($errors->has('tempat_lahir'))
                    <small class=" text-red-500">{{ $errors->first('tempat_lahir') }}</small>
                @endif

            </div>

            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="tgl_lahir">Tanggal Lahir</label>
                <input value="{{ $peserta ? $peserta->tgl_lahir : old('tgl_lahir') }}"
                    class=" border rounded-md w-full px-3 py-2" type="date" id="tgl_lahir" name="tgl_lahir">

                @if ($errors->has('tgl_lahir'))
                    <small class=" text-red-500">{{ $errors->first('tgl_lahir') }}</small>
                @endif

            </div>
            
            <div class="mb-5">
                <label class=" text-gray-700 font-semibold" for="gender">Jenis Kelamin</label>

                <div>

                    <input {{ $peserta && $peserta->gender == 0 ? 'checked' : '' }} class="mr-2" type="radio"
                        name="gender" id="gender" value="0" checked>
                    <label for="gender">Laki - Laki</label>
                </div>
                <div>

                    <input {{ $peserta && $peserta->gender == 1 ? 'checked' : '' }} class="mr-2" type="radio"
                        name="gender" id="gender2" value="1">
                    <label for="gender2">Perempuan</label>
                </div>


                @if ($errors->has('gender'))
                    <small class=" text-red-500">{{ $errors->first('gender') }}</small>
                @endif

            </div>

            <div class="mb-5">



                <label class=" text-gray-700 font-semibold" for="foto">Foto</label>

                @if ($peserta)
                    <img class="w-20" src="{{ asset('foto_peserta/' . $peserta->foto) }}" alt="{{ $peserta->foto }}">
                @endif

                <input class=" border rounded-md w-full px-3 py-2" type="file" id="foto" name="foto" placeholder="Foto"
                    {{ $peserta ? '' : 'required' }}>
                @if ($errors->has('foto'))
                    <small class=" text-red-500">{{ $errors->first('foto') }}</small>
                @endif

            </div>
            <div class="py-5">
                <button class="w-full bg-green-400 text-center px-3 py-2 rounded-md font-semibold text-white"
                    type="submit">Register</button>
            </div>
        </form>
    </div>


@endsection
