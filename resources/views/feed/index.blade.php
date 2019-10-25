@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        <ol>
            @foreach($posts as $post)
                <li class="mt-4 w-2/3 bg-white rounded border border-gray-300" style="width: 500px">
                    <div class="flex justify-between items-center p-4">
                        <div class="flex items-center">
                        <span class="block w-10 h-10 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/500" width="500" height="500">
                        </span>
                            <h3 class="ml-2 p-1 text-xl capitalize">{{ $post->author->name }}</h3>
                        </div>
                        <font-awesome-icon class="text-gray-500" :icon="['fa','ellipsis-h']"></font-awesome-icon>
                    </div>
                    <img src="https://picsum.photos/500" width="500" height="500">
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
@endsection
