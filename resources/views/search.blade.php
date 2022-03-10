<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('hello') }} -->
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Creacte By Joker Banny -->
                    <div class=" bg-gray-100 flex justify-center">
                        <div class="container mx-auto bg-gray-500 rounded-lg p-14">
                            <form action="/search_result" method="post">
                                @csrf
                                <h1 class="text-center font-bold text-white text-4xl">練習メニュー検索</label>
                                    <p class="mx-auto font-normal text-sm my-6 max-w-lg">メニュー名検索</p>
                                    <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
                                        <input name="menu_name" class="text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="練習メニュー" />
                                        <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                                            <button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">検索</button>
                                        </div>
                                    </div>
                            </form>
                            <form action="/search_result" method="post">
                                @csrf
                                    <p class="mx-auto font-normal text-sm my-6 max-w-lg">ジャンル検索</p>
                                    <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
                                        <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                                            <select name="genre" class="text-base text-gray-800 outline-none border-2 px-8 py-2 rounded-lg">
                                                <option></option>
                                                <option value="パス">パス</option>
                                                <option value="スパイク">スパイク</option>
                                                <option value="レシーブ">レシーブ</option>
                                                <option value="ゲーム">ゲーム</option>
                                                <option value="トレーニング">トレーニング</option>
                                            </select>
                                            <button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">検索</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>