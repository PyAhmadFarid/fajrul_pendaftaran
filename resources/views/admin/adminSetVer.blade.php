@extends('layout.default')

@section('content')

    @include('components.navbar')
    <div class="flex m-10 bg-white rounded-md p-5 justify-around">
        <div class="flex space-y-2 flex-col p-2 mr-3">
            <div>
                <label class="font-semibold " for="">Foto</label>
                <img class=" w-48" src="{{file_exists(public_path('foto_peserta/' . $peserta->foto)) ? asset('foto_peserta/' . $peserta->foto) : asset('image/3.png')}}" alt="">
            </div>

            <div>
                <label class="font-semibold " for="">Bukti Pembayaran</label>
                <img class=" w-48" src="{{file_exists(public_path('bukti_pembayaran/' . $peserta->bukti_pembayaran)) ? asset('bukti_pembayaran/' . $peserta->bukti_pembayaran) : asset('image/3.png')}}" alt="">
            </div>
        </div>

        <div class=" flex-grow p-2">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="nama">Nama Lengkap</label>
                    <input disabled value="{{ $peserta ? $peserta->nama : old('nama') }}"
                        class=" border rounded-md w-full px-3 py-2" type="text" id="nama" name="nama" placeholder="Nama">
                </div>

                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="alamat">Alamat</label>
                    <input disabled value="{{ $peserta ? $peserta->alamat : old('alamat') }}"
                        class=" border rounded-md w-full px-3 py-2" type="text" id="alamat" name="alamat"
                        placeholder="Alamat">
                </div>

                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="email">E-mail</label>
                    <input disabled value="{{ $peserta ? $peserta->user->email : old('email') }}"
                        class=" border rounded-md w-full px-3 py-2" type="text" id="email" name="email"
                        placeholder="E-Mail">

                </div>

                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="asal_sekolah">Asal Sekolah</label>
                    <input disabled value="{{ $peserta ? $peserta->asal_sekolah : old('asal_sekolah') }}"
                        class=" border rounded-md w-full px-3 py-2" type="text" id="asal_sekolah" name="asal_sekolah"
                        placeholder="Asal Sekolah">

                </div>


                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="nomer_hp">Nomer Hp</label>
                    <input disabled value="{{ $peserta ? $peserta->nomer_hp : old('nomer_hp') }}"
                        class=" border rounded-md w-full px-3 py-2" type="number" id="nomer_hp" name="nomer_hp"
                        placeholder="Nomer HP">

                </div>

                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="tempat_lahir">Tempat Lahir</label>
                    <input disabled value="{{ $peserta ? $peserta->tempat_lahir : old('tempat_lahir') }}"
                        class=" border rounded-md w-full px-3 py-2" type="text" id="tempat_lahir" name="tempat_lahir"
                        placeholder="Tempat Lahir">


                </div>

                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="tgl_lahir">Tanggal Lahir</label>
                    <input disabled value="{{ $peserta ? $peserta->tgl_lahir : old('tgl_lahir') }}"
                        class=" border rounded-md w-full px-3 py-2" type="date" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="mb-5">
                    <label class=" text-gray-700 font-semibold" for="gender">Jenis Kelamin</label>

                    <div>

                        <input disabled {{ $peserta && $peserta->gender == 0 ? 'checked' : '' }} class="mr-2" type="radio"
                            name="gender" id="gender" value="0" checked>
                        <label for="gender">Laki - Laki</label>
                    </div>
                    <div>

                        <input disabled {{ $peserta && $peserta->gender == 1 ? 'checked' : '' }} class="mr-2"
                            type="radio" name="gender" id="gender2" value="1">
                        <label for="gender2">Perempuan</label>
                    </div>

                </div>

                <div class="mb-5 border-t pt-5 rounded-md">
                    <label class=" text-gray-700 font-semibold" for="gender">Verifikasi</label>

                    <div>

                        <input  {{ $peserta && $peserta->status === null ? 'checked' : '' }} class="mr-2" type="radio"
                            name="status" id="status" value="" checked>
                        <label for="status">Pending</label>
                    </div>
                    <div>

                        <input  {{ $peserta && $peserta->status === 1 ? 'checked' : '' }} class="mr-2"
                            type="radio" name="status" id="status1" value="1">
                        <label for="status1">Lolos</label>
                    </div>
                    <div>
                        <input  {{ $peserta && $peserta->status === 0 ? 'checked' : '' }} class="mr-2"
                            type="radio" name="status" id="status2" value="0">
                        <label for="status2">Tidak Lolos</label>
                    </div>
                </div>

                <div class=" flex justify-between mt-20">
                    <a href="{{route('adminVerifikasi')}}" class="py-2 font-semibold text-red-500">Kembali</a>
                    <button type="submit" class=" px-4 py-2 bg-green-500 rounded-md text-white">Simpan</button>
                </div>
            </form>
        </div>

    </div>

@endsection
