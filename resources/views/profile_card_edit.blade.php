<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/update_profile/{{$user['id']}}" enctype="multipart/form-data">
                        @csrf
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                            <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">プロフィール編集</h1>
                                <div class="space-y-4">
                                    <input type="hidden" name="contri_id" value="{{$user['id']}}">
                                    <div>
                                        <p name="name" class=" ml-2 outline-none py-1 px-2 text-md rounded-md">氏名: {{$user['name']}}</p>
                                    </div>
                                    <div>
                                        <label for="genre" class="text-lx font-serif">プロフィール画像:</label>
                                        <input type="file" name="image" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
                                    </div>
                                    <x-auth-validation-errors class='mb-4' :errors='$errors' />
                                    <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">更新</button>
                                    <button class="  px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  "><a href="/myPage">マイページへ戻る</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>