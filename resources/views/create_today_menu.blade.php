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

                    <ul>
                        <!-- This is an example component -->
                        <div class="max-w-7xl mx-auto">
                            <div class="flex flex-col">
                                <div class="overflow-hidden shadow-md sm:rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="">
                                            <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                <thead class="bg-gray-100 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col" class="w-1/5 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            メニュー名
                                                        </th>
                                                        <th scope="col" class="w-1/5 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            ジャンル
                                                        </th>
                                                        <th scope="col" class="w-2/5 py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            内容
                                                        </th>
                                                        <th scope="col" class="w-1/5 p-4">
                                                            <span class="sr-only">詳細</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @foreach($creates as $create)
                                                
                                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$create[0]['pra_name']}}</td>
                                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$create[0]['pra_genre']}}</td>
                                                        <td class="break-words whitespace-pre py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$create[0]['pra_content']}}</td>
                                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                            <a class="text-blue-600 dark:text-blue-500 hover:underline" href="/menu_card/{{$create[0]['menu_id']}}">詳細</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>