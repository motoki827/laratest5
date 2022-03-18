<html lang="ja">

<head>
    <title>pdf output test</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @font-face {
            font-family: migmix;
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/ipag.ttf')}}") format('truetype');
        }

        @font-face {
            font-family: migmix;
            font-style: bold;
            font-weight: bold;
            src: url("{{ storage_path('fonts/ipag.ttf')}}") format('truetype');
        }

        body {
            font-family: migmix;
            line-height: 80%;
        }

        .main_image {
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }

        .main_image img {
            width: 90%;
        }

        .sushiTable {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 50%;
        }

        .sushiTable tr th {
            background: #87cefa;
            padding: 5px;
            border: 1px solid #000;
        }

        .sushiTable tr td {
            padding: 5px;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
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
                                                @foreach($values as $value)

                                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$value[0]['pra_name']}}</td>
                                                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{$value[0]['pra_genre']}}</td>
                                                        <td class="break-words whitespace-pre py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$value[0]['pra_content']}}</td>
                                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                            <a class="text-blue-600 dark:text-blue-500 hover:underline" href="/menu_card/{{$value[0]['menu_id']}}">詳細</a>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
</body>

</html>