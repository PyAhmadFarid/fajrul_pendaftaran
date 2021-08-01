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
                        Status
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody class=" text-center text-gray-800">
                {{-- @foreach ($kelas as $s) --}}
                    <tr class=" border-b hover:bg-gray-50">
                        <td class="p-3">
                            fajrul
                        </td>
                        <td class="p-3 font-semibold">
                            belum verifikasi
                        </td>
                        <td>

                            <a class=" text-blue-600 p-1"
                                >Edit</a>

                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>

    </div>
@endsection
