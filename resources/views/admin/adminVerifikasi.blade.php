@extends('layout.default')
@section('content')

    @include('components.navbar')
    <div class="  flex bg-white m-10 overflow-hidden rounded-md">
        <table class="w-full table-auto text-sm">
            <thead class=" bg-green-200 text-green-900">
                <tr>
                    <th class="p-3">
                        Nama
                    </th>
                    <th class="p-3">
                        kelangkapan data
                    </th>
                    <th class="p-3">
                        Status
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody class=" text-center text-gray-800">
                {{-- @foreach ($kelas as $s) --}}
                @foreach ($pesertas as $peserta)
                    <tr class=" border-b hover:bg-gray-50">


                        <td class="p-4">
                            {{ $peserta->nama }}
                        </td>

                        @if ($peserta->kelengkapan())
                            <td class="p-4  text-green-500"> Lengkap </td>
                        @else
                            <td class="p-4  text-red-500"> Belum Lengkap </td>
                        @endif

                        @if ($peserta->status)
                            @if ($peserta->status == 1)
                                <td class="p-4 font-semibold text-green-500">Lolos</td>
                            @else
                                <td class="p-4 font-semibold text-red-500">Tidak lolos</td>
                            @endif
                        @else
                            <td class="p-4 font-semibold">Pending</td>
                        @endif

                        <td class="p-4 flex justify-center items-center">
                            <a class=" rounded-full font-semibold mr-2">Verifikasi</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                              </svg>
                            

                        </td>
                    </tr>
                @endforeach
                {{-- @endforeach --}}
            </tbody>
        </table>

    </div>
@endsection
