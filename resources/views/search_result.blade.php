<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=" bg-gray-100 flex justify-center">
                        <div class="container mx-auto bg-gray-500 rounded-lg p-14">
                            <form action="/search_result" method="post">
                                @csrf
                                <h1 class="text-center font-bold text-white text-4xl">練習メニュー検索</label>
                                    <p class="mx-auto font-normal text-sm my-6 max-w-lg">メニュー名検索</p>
                                    <div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
                                        <input name="menu_name" class="w-4/5 text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="練習メニュー" />
                                        <div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                                            <button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">検索</button>
                                        </div>
                                    </div>
                            </form>
                            <form action="/search_result" method="post">
                                @csrf
                                <p class="mx-auto font-normal text-sm my-6 max-w-lg">ジャンル検索</p>
                                <div class="sm:flex items-center rounded-lg overflow-hidden px-2 py-1 justify-between">
                                    <div class=" bg-white ms:flex items-center px-2 py-1 rounded-lg space-x-4 mx-auto ">
                                        <select name="genre" class="text-base text-gray-800 outline-none border-2 py-2 rounded-lg">
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
                    <!-- 検索結果の表示 -->
                    <ul>
                        <div class="max-w-7xl mx-auto">
                            <div class="flex flex-col">
                                <div class="overflow-hidden shadow-md sm:rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="sm:w-2/12 w-5/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        メニュー名
                                                    </th>
                                                    <th scope="col" class="sm:w-2/12 w-3/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        ジャンル
                                                    </th>
                                                    <th scope="col" class="sm:sm:block hidden w-6/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        内容
                                                    </th>
                                                    <th scope="col" class="sm:w-1/12 w-2/12 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        
                                                    </th>
                                                    <th scope="col" class="sm:w-1/12 w-2/12 p-4">
                                                        <span class="sr-only">詳細</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            @foreach($posts as $post)
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$post['pra_name']}}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$post['pra_genre']}}</td>
                                                    <td class="sm:block hidden overflow-hidden py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$post['pra_content']}}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"></td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a class="text-blue-600 dark:text-blue-500 hover:underline" href="/menu_card/{{$post['menu_id']}}">詳細</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>