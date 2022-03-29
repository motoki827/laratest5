<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
        <x-message :message="session('message')" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <style>
                        :root {
                            --main-color: #4a76a8;
                        }

                        .bg-main-color {
                            background-color: var(--main-color);
                        }

                        .text-main-color {
                            color: var(--main-color);
                        }

                        .border-main-color {
                            border-color: var(--main-color);
                        }
                    </style>
                    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
                    <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> -->



                    <div class="bg-gray-100">
                        <div class="w-full text-white bg-main-color">
                            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                                <div class="p-4 flex flex-row items-center justify-between">
                                    <a href="#" class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">マイページ</a>
                                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                        <button @click="open = !open" class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                                            <span>{{$user['name']}}</span>
                                            <img class="inline h-6 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                            <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/profile_card_edit">プロフィールの編集</a>
                                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Help</a>
                                                <div class="border-b"></div>
                                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- End of Navbar -->

                        <div class="container mx-auto my-5 p-5">
                            <div class="md:flex no-wrap md:-mx-2 ">
                                <!-- Left Side -->
                                <div class=" md:w-3/12 md:mx-2">
                                    <!-- Profile Card -->
                                    <div class="flex md:block bg-white p-3 border-t-4 border-green-400">
                                        <div class="image overflow-hidden w-1/4 md:w-full">
                                            <img class="h-auto  md:w-full mx-auto " src="{{'/storage/' . $user['image_name']}}" alt="">
                                            <!-- <img class="h-auto  md:w-full mx-auto " src="{`https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png`}" alt=""> -->
                                        </div>
                                        <div class="mx-4">
                                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user['name']}}</h1>
                                            <h3 class="text-gray-600 font-lg text-semibold leading-6">コメント</h3>
                                            <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">コメント</p>
                                        </div>
                                    </div>
                            
                                    <!-- End of profile card -->
                                </div>
                                <!-- Right Side -->
                                <div class="w-full md:w-9/12 mx-2 h-100">
                                    <!-- Profile tab -->
                                    <!-- About Section -->
                                    <div class="bg-white p-3 shadow-sm rounded-sm mx-auto">
                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                            <span clas="text-green-500">
                                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </span>
                                            <span class="tracking-wide">会員情報</span>
                                        </div>
                                        <div class="text-gray-700">
                                            <div class="grid md:grid-cols-2 text-sm">
                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">氏名</div>
                                                    <div class="px-4 py-2">{{$user['name']}}</div>
                                                </div><br>
                                                <div class="grid grid-cols-2">
                                                    <div class="px-4 py-2 font-semibold">メールアドレス</div>
                                                    <div class="px-4 py-2">
                                                        <a class="text-blue-800" href="mailto:jane@example.com">{{$user['email']}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">もっと見る</button>
                                    </div>
                                    <!-- End of about section -->

                                    <div class="my-4"></div>

                                    <!-- Experience and education -->
                                    <div class="bg-white p-3 shadow-sm rounded-sm">

                                        <div class="grid grid-cols-2">
                                            <div>
                                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                                    <svg class="h-8 w-8 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" />
                                                        <line x1="9" y1="7" x2="13" y2="7" />
                                                        <line x1="9" y1="11" x2="13" y2="11" />
                                                    </svg>
                                                    </span>
                                                    <span class="tracking-wide">投稿履歴</span>
                                                </div>
                                                <ul class="list-inside space-y-2">
                                                    @foreach($practices as $practice)
                                                    <li>
                                                        <div class="text-teal-600"><a href="/menu_card_edit/{{$practice['menu_id']}}">{{$practice['pra_name']}}</a></div>
                                                        <div class="text-gray-500 text-xs">{{$practice['updated_at']}}</div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                                    <span clas="text-green-500">
                                                        <svg class="h-8 w-8 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7" />
                                                        </svg>
                                                    </span>
                                                    <span class="tracking-wide">お気に入り</span>
                                                </div>
                                                <form action="/create_today_menu" method="post" >
                                                @csrf    
                                                     <ul class="list-inside space-y-2">
                                                        @foreach($favorite_menus as $favorite_menu)
                                                        <li>
                                                            <div class="text-teal-600">
                                                                <a href="/favorite_menu_card/{{$favorite_menu['menu_id']}}">{{$favorite_menu['menu_name']}}</a>
                                                                <input type="checkbox" name="menu[]" value="{{$favorite_menu['menu_id']}}">
                                                            </div>
                                                            <!-- <div class="text-gray-500 text-xs">{{$favorite_menu['updated_at']}}</div> -->
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <button class="my-4 bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">表を生成</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End of Experience and education grid -->
                                    </div>
                                    <!-- End of profile tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>