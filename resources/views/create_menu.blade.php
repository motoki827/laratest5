<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/store">
                        @csrf
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                            <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">メニュー作成</h1>
                                <x-auth-validation-errors class='mb-4' :errors='$errors'/>
                               
                                <div class="space-y-4">
                                    <input type="hidden" name="contri_id" value="{{$user['id']}}">
                                    <div>
                                        <label for="title" class="text-lx font-serif">タイトル:</label>
                                        <input type="text" placeholder="タイトル" value="{{old('title')}}" name="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="content" class="block mb-2 text-lg font-serif">内容:</label>
                                        <textarea name="content" cols="30" rows="10" placeholder="練習の内容を書いてください.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{old('content')}}</textarea>
                                    </div>
                                    <div>
                                        <label for="genre" class="text-lx font-serif">ジャンル:</label>
                                        <!-- <input type="text" placeholder="ジャンル" name="genre" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" /> -->
                                        <select name="genre" placeholder="ジャンル" class="w-32 ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" >
                                                <option></option>
                                                <option value="パス">パス</option>
                                                <option value="スパイク">スパイク</option>
                                                <option value="レシーブ">レシーブ</option>
                                                <option value="ゲーム">ゲーム</option>
                                                <option value="トレーニング">トレーニング</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="people" class="text-lx font-serif">必用人数:</label>
                                        <!-- <input type="text" placeholder="必用人数" name="people" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" /> -->
                                        <select name="people" placeholder="人数" class="w-32 ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" >
                                                <option></option>
                                                @for($i=1;$i<=12;$i++)
                                                <option value="{{$i}}">{{$i.'人'}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div>
                                        <label for="time" class="text-lx font-serif">所要時間:</label>
                                        <!-- <input type="text" placeholder="所要時間" name="time" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" /> -->
                                        <select name="time" placeholder="人数" class="w-32 ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" >
                                                <option></option>
                                                @for($i=1;$i<=15;$i++)
                                                <option value="{{$i}}">{{$i.'分'}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <button class="  px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">投稿</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>