@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:flex-row">
        @if (count($posts) > 0)
            <ol class="sm:w-2/3 lg:w-1/2">
                @foreach($posts as $post)
                    <li class="mt-4 bg-white rounded border border-gray-300" {{--style="width: 500px"--}}>
                        <div class="flex justify-between items-center p-4">
                            <div class="flex items-center">
                        <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden">
{{--                            <img src="https://picsum.photos/500" width="500" height="500">--}}
                        </span>
                                <span class="ml-2 p-1 text-xl capitalize">{{ $post->author->name }}</span>
                            </div>
                            <font-awesome-icon class="text-gray-500" :icon="['fa','ellipsis-h']"></font-awesome-icon>
                        </div>
                        <img src="" width="500" height="500">
                        {{--                        <img src="https://picsum.photos/500" width="500" height="500">--}}
                        <div class="flex justify-between px-4 mt-4">
                            <div>
                                <font-awesome-icon class="text-gray-500 hover:text-red-500"
                                                   :icon="['far','heart']"
                                                   size="2x"></font-awesome-icon>
                                <font-awesome-icon class="ml-2 text-gray-500 hover:text-blue-500"
                                                   :icon="['far','comment']"
                                                   size="2x"></font-awesome-icon>
                                <font-awesome-icon class="ml-2 text-gray-500 hover:text-blue-500"
                                                   :icon="['far','share-square']"
                                                   size="2x"></font-awesome-icon>
                            </div>
                            <font-awesome-icon class="text-gray-500 hover:text-gray-700"
                                               :icon="['far','bookmark']"
                                               size="2x"></font-awesome-icon>
                        </div>
                        <p class="px-4 mt-4 leading-snug text-sm">
                            <span class="font-bold">{{ $post->author->name }}</span>
                            {{$post->text}}
                        </p>
                        @if(count($post->comments) > 0)
                            @foreach($post->comments as $comment)
                                <p class="px-4 mt-4 leading-snug text-sm text-gray-700">{{ $comment->text }}</p>
                            @endforeach
                        @endif
                        <div class="mt-2 flex justify-between p-4 border-t border-gray-200 text-sm text-gray-500">
                            Add comment
                            <span class="uppercase text-blue-300">post</span>
                        </div>
                    </li>
                @endforeach
            </ol>
        @else
            <p>No Posts</p>
        @endif
        <div class="sm:w-1/3 md:w-1/3 lg:w-1/4">
            <div class="flex flex-col">
                <div class="mt-4 pl-4">
                    <div class="flex items-center">
                        <span class="block w-12 h-12 bg-green-400 rounded-full overflow-hidden"></span>
                        <div class="ml-2 flex flex-col font-semibold">
                            <span class="text-sm">Jon</span>
                            <span class="mt-1 text-xs text-gray-500">ragus1975</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pl-4">
                    <div class="flex flex-col bg-white p-4 rounded border border-gray-400">
                        <div class="flex justify-between min-w-full">
                            <h3 class="text-gray-500 text-sm font-bold">Stories</h3>
                            <span class="text-sm font-semibold">Watch all</span>
                        </div>
                        <div class="mt-3 flex items-center">
                            <span class="block w-10 h-10 bg-blue-400 rounded-full overflow-hidden"></span>
                            <div class="ml-2 flex flex-col font-semibold">
                                <span class="text-sm">Jon</span>
                                <span class="mt-1 text-xs uppercase tracking-wide text-gray-500">3 minutes ago</span>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center">
                            <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden"></span>
                            <div class="ml-2 flex flex-col font-semibold">
                                <span class="text-sm">Danni</span>
                                <span class="mt-1 text-xs uppercase tracking-wide text-gray-500">5 hours ago</span>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center">
                            <span class="block w-10 h-10 bg-red-400 rounded-full overflow-hidden"></span>
                            <div class="ml-2 flex flex-col font-semibold">
                                <span class="text-sm">Kamren</span>
                                <span class="mt-1 text-xs uppercase tracking-wide text-gray-500">yesterday</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
