<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container mx-auto bg-gray-400 rounded-lg p-4">
            <form action="/search_result" method="post">
                @csrf
                <h1 class="text-center font-bold text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-5xl">練習メニュー検索</label>
                    <p class="mx-auto font-normal text-ms md:text-2xl mt-6 max-w-lg">メニュー名検索</p>
                    <div class="ms:flex items-center">
                        <div class="px-2 rounded-lg mx-auto flex justify-center">
                            <input name="menu_name" class="mr-1 text-base text-gray-400 flex-grow max-w-xl outline-none px-2 mb-2 rounded-lg" type="text" placeholder="練習メニュー" />
                            <button class="bg-indigo-500 text-white text-base rounded-lg px-4 font-thin">検索</button>
                        </div>
                    </div>
            </form>
            <form action="/search_result" method="post">
                @csrf
                <p class="mx-auto font-normal text-ms mt-6 md:text-2xl max-w-lg">ジャンル検索</p>
                <div class="rounded-lg px-2 py-1">
                    <div class="ms:flex items-center">
                        <select name="genre" class="text-base text-gray-800 outline-none border-2 py-2 rounded-lg mb-2">
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