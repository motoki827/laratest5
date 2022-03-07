<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('delete',['id'=>$practice['menu_id']]) }}">
                        @csrf
                        <button>
                            <svg class="h-8 w-8 text-red-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                    </form>
                    <form method="POST" action="{{ route('update',['id'=>$practice['menu_id']]) }}">
                        @csrf
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                            <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">メニュー更新</h1>
                                <div class="space-y-4">
                                    <input type="hidden" name="contri_id" value="{{$user['id']}}">
                                    <div>
                                        <label for="title" class="text-lx font-serif">タイトル:</label>
                                        <input type="text" value="{{$practice['pra_name']}}" placeholder="タイトル" name="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="content" class="block mb-2 text-lg font-serif">内容:</label>
                                        <textarea name="content" cols="30" rows="10" placeholder="練習の内容を書いてください.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{$practice['pra_content']}}</textarea>
                                    </div>
                                    <div>
                                        <label for="genre" class="text-lx font-serif">ジャンル:</label>
                                        <input type="text" value="{{$practice['pra_genre']}}" placeholder="ジャンル" name="genre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="people" class="text-lx font-serif">必用人数:</label>
                                        <input type="text" value="{{$practice['num_of_people']}}" placeholder="必用人数" name="people" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="time" class="text-lx font-serif">所要時間:</label>
                                        <input type="text" value="{{$practice['time_requ']}}" placeholder="所要時間" name="time" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <button class="  px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">更新</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>