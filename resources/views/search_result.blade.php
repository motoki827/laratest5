<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container mx-auto bg-gray-400 rounded-lg p-4 max-w-7xl">
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
    <!-- 検索結果の表示 -->
    <ul>
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                            <thead class="bg-gray-200 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="sm:w-2/12 w-5/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        メニュー名
                                    </th>
                                    <th scope="col" class="sm:w-2/12 w-3/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        ジャンル
                                    </th>
                                    <th scope="col" class=" w-5/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        内容
                                    </th>
                                    <th scope="col" class="sm:w-2/12 w-2/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        いいね
                                    </th>
                                    <th scope="col" class="sm:w-1/12 w-2/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        詳細
                                    </th>
                                </tr>
                            </thead>
                            @foreach($posts as $post)
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$post['pra_name']}}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$post['pra_genre']}}</td>
                                    <td class="overflow-hidden py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$post['pra_content']}}</td>
                                    <td class="flex py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <svg class="inline h-5 w-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M7 11v 8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                        </svg>
                                        <p>{{$post['goods']}}</p>
                                    </td>
                                    <td class="py-4 px-4 text-sm font-medium text-left ">
                                        <a class="text-sm font-medium text-left whitespace-nowrap text-blue-600 dark:text-blue-500 hover:underline" href="/menu_card/{{$post['menu_id']}}">詳細</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </ul>
    <!-- 検索結果の表示終了 -->
</x-app-layout>