<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

                    <div class=" bg-gray-100 flex justify-center">
                        <div class="container mx-auto bg-gray-500 rounded-lg p-14">
                            <form action="/search_result" method="post">
                                @csrf
                                <h1 class="text-center font-bold text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-4xl">練習メニュー検索</label>
                                    <p class="mx-auto font-normal text-sm md:text-2xl my-6 max-w-lg">メニュー名検索</p>
                                    <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
                                        <input name="menu_name" class="text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="練習メニュー" />
                                        <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                                            <button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">検索</button>
                                        </div>
                                    </div>
                            </form>
                            <form action="/search_result" method="post">
                                @csrf
                                <p class="mx-auto font-normal text-sm my-6 md:text-2xl max-w-lg">ジャンル検索</p>
                                <div class="sm:flex items-center  rounded-lg overflow-hidden px-2 py-1 justify-between">
                                    <div class="bg-white ms:flex items-center px-2 py-1 rounded-lg space-x-4 mx-auto ">
                                        <select name="genre" class="text-base text-gray-800 outline-none border-2 py-2 rounded-lg">
                                            <option></option>
                                            <option value="パス">パス</option>
                                            <option value="スパイク">スパイク</option>
                                            <option value="レシーブ">レシーブ</option>
                                            <option value="ゲーム">ゲーム</option>
                                            <option value="トレーニング">トレーニング</option>
                                            <option value="サーブ">サーブ</option>
                                        </select>
                                        <button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">検索</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</x-app-layout>