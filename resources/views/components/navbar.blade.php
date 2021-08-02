<script src="{{ asset('js/alpine.min.js') }}" defer=""></script>
<div class="w-full text-gray-600 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="#"
                class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                SMA NU 2 GRESIK</a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
            class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">



            <a class="{{Route::currentRouteName() == 'home' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{route('home')}}">Home</a>
            <a class="{{Route::currentRouteName() == 'about' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{route('about')}}">About</a>

            @role('user')
            <a class="{{Route::currentRouteName() == 'dataPeserta' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{route('dataPeserta')}}">Data Peserta</a>
            <a class="{{Route::currentRouteName() == 'pengunguman' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{route('pengunguman')}}">Pengunguman</a>
            @endrole

            @role('admin')
            <a class="{{Route::currentRouteName() == 'adminVerifikasi' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{route('adminVerifikasi')}}">Verifikasi Peserta</a>

                
            @endrole



            @hasanyrole('user|admin')
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-full md:w-auto md:inline md:mt-0 md:ml-4 text-white bg-green-500 focus:outline-none focus:shadow-outline">
                    <span>{{ auth()->user()->name }}</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class=" z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">



                        <a class="text-red-500 block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-red-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('logout') }}">Logout</a>


                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-green-500 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Ganti Password</a>


                    </div>
                </div>
            </div>
        @else
            <a class="{{Route::currentRouteName() == 'login' ? 'text-green-500' : ''}} px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-green-500 focus:text-green-500 focus:outline-none"
                href="{{ route('login') }}">Login</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 text-white bg-green-500 rounded-full focus:outline-none"
                href="{{ route('register') }}">Daftar</a>
            @endhasanyrole
        </nav>
    </div>
</div>
