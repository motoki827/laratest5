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
                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">{{$practice['pra_name']}}</h1>
                            <div class="space-y-4">
                                <input type="hidden" name="contri_id" value="{{$user['id']}}">
                        
                                <div>
                                    <label for="content" class="block mb-2 text-lg font-serif">内容:</label>
                                    <p class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{$practice['pra_content']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">ジャンル:</label>
                                    <p  class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['pra_genre']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">必用人数:</label>
                                    <p  class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['num_of_people']}}</p>
                                </div>
                                <div>
                                    <label class="text-lx font-serif">所要時間:</label>
                                    <p  class="inline-block ml-2 outline-none py-1 px-2 text-md rounded-md">{{$practice['time_requ']}}</p>
                                </div>        
                                <button class="  px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  " ><a href="/myPage">マイページへ戻る</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
