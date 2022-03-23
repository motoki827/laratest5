<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        @font-face {
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path("fonts/ipag.ttf") }}') format('truetype');
        }

        @font-face {
            font-family: ipag;
            font-style: bold;
            font-weight: bold;
            src: url("{{ storage_path('fonts/ipag.ttf') }}") format('truetype');
        }

        body {
            font-family: ipag !important;
        }

        @page {
            margin: 20px;
        }

        tr th {
            background: #87cefa;
            padding: 5px;
            border: 1px solid #000;
        }

        tr td {
            padding: 5px;
            border: 1px solid #000;

            /* vendor\dompdf\dompdf\src\FrameReflower\Text.php の45行目を変更すると、
                改行を指定できるようになる */
            /* white-space: nowrap; */

            /* 折り返し表示 */
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .genre {
            width:80px;
        }
    </style>
</head>

<body>

    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col" class="menu_name">
                        メニュー名
                    </th>
                    <th scope="col" class="genre">
                        ジャンル
                    </th>
                    <th scope="col" class="contents">
                        内容
                    </th>
                </tr>
            </thead>
            @foreach($values as $value)
            <tbody>
                <tr>
                    <td>{{$value[0]['pra_name']}}</td>
                    <td>{{$value[0]['pra_genre']}}</td>
                    <td>{{$value[0]['pra_content']}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>