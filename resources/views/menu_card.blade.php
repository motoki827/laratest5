<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                        <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                            <form method="POST" action="/good/{{$practice['menu_id']}}" class="text-right" id="AjaxForm">
                                @csrf
                                <button class="button">
                                    <svg class="h-8 w-8 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <!-- fillで塗りつぶし -->
                                        <path id="good" fill="{{$fill}}" d="M7 11v 8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                    </svg>
                                </button>
                            </form>
                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">{{$practice['pra_name']}}</h1>
                            <div class="space-y-4">
                                <input type="hidden" name="contri_id" value="{{$user['id']}}">

                                <div>
                                    <label for="content" class="block mb-2 text-lg font-serif">内容:</label>
                                    <p class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{$practice['pra_content']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">ジャンル:</label>
                                    <p class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['pra_genre']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">必用人数:</label>
                                    <p class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['num_of_people']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">所要時間:</label>
                                    <p class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['time_requ']}}</p>
                                </div>
                                <form method="get" action="{{ route('store_card',['id'=>$practice['menu_id']]) }}">
                                    @csrf
                                    <button class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">お気に入りに追加</button>
                                </form>
                                <button  onclick=history.back() class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">検索結果一覧へ戻る</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
    </script>
    <script>
        //ロード時にイベントリスナに登録
        window.onload = function(){
            if ($('#good').attr('fill') !== 'none') {
                $(".button").click(function() {
                    $('#good').attr('fill', 'none');
                });
            } else {
                $(".button").click(function() {
                    $('#good').attr('fill', '#4299e1');
                })
            };
        };
        //画面遷移なしのform送信処理
        $('#AjaxForm').submit(function(event) {
            // HTMLでの送信をキャンセル
                event.preventDefault();
                var $form = $(this);
                var $button = $form.find('.submit');
                $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    data: $form.serialize(),
                    timeout: 10000, // 単位はミリ秒
                    // 送信前
                    beforeSend: function(xhr, settings) {
                        // ボタンを無効化し、二重送信を防止
                        $button.attr('disabled', true);
                    },
                    // 応答後
                    complete: function(xhr, textStatus) {
                        // ボタンを有効化し、再送信を許可
                        $button.attr('disabled', false);
                    },
                    // 通信成功時の処理
                    success: function(result, textStatus, xhr) {
                        // 入力値を初期化
                        $form[0].reset();
                        $("#result").append(result);
                    },
                    // 通信失敗時の処理
                    error: function(xhr, textStatus, error) {
                        alert('NG...');
                    },
                });
                if ($('#good').attr('fill') !== 'none') {
                    $(".button").click(function() {
                        $('#good').attr('fill', 'none');
                    });
                } else {
                    $(".button").click(function() {
                        $('#good').attr('fill', '#4299e1');
                    })
                };
            });
            </script>
</x-app-layout>