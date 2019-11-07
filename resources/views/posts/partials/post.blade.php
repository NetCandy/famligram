<li class="mt-4 bg-white rounded border border-gray-300" {{--style="width: 500px"--}}>
    <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
            <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden">
                <img src="/images/avatars/{{ \Illuminate\Support\Str::lower($post->author->name) }}.png">
            </span>
            <div class="ml-2">
                <div class="text-xl capitalize">{{ $post->author->name }}</div>
                <div class="mt-1 text-xs text-gray-600">{{ $post->created_at->diffForHumans() }}</div>
            </div>
        </div>
        <font-awesome-icon class="text-gray-500" :icon="['fa','ellipsis-h']"></font-awesome-icon>
    </div>
    <img src="" width="500" height="500">
    <img src="/images/{{ \Illuminate\Support\Arr::random([
                            'autum',
                            'canal',
                            'couple',
                            'forrest',
                            'jungle',
                            'mist',
                            'mountain',
                            'road',
                            'tower',
                            'waves',
                        ]) }}-500x500.jpg" width="500" height="500">
    <div class="flex justify-between px-4 mt-4">
        <div class="flex">
            <div class="flex items-center">
                @if($post->liked_by_user == auth()->user()->id)
                    <font-awesome-icon class="text-red-500 hover:text-red-500"
                                       :icon="['fa','heart']"
                                       size="lg"></font-awesome-icon>
                @else
                    <font-awesome-icon class="text-gray-500 hover:text-red-500"
                                       :icon="['far','heart']"
                                       size="lg"></font-awesome-icon>
                @endif
                @if($post->likes_count > 0)
                    <span class="ml-1 text-xs font-semibold text-gray-900">{{$post->likes_count}}</span>
                @endif
            </div>
        </div>
        <div>
            <font-awesome-icon class="text-gray-500 hover:text-gray-700"
                               :icon="['far','bookmark']"
                               size="lg"></font-awesome-icon>
            <font-awesome-icon class="ml-2 text-gray-500 hover:text-blue-500"
                               :icon="['far','share-square']"
                               size="lg"></font-awesome-icon>
        </div>
    </div>
    <p class="px-4 mt-4 leading-snug text-sm">
        <span class="font-bold">{{ $post->author->name }}</span>
        {{$post->text}}
    </p>
    @if(count($post->comments) > 0)
        @if(\Illuminate\Support\Str::length($post->comments->first()->text) >= 100)
            <p class="px-4 mt-4 leading-snug text-sm text-gray-800">
                {{ \Illuminate\Support\Str::limit($post->comments->first()->text, 100) }}
                <a href="#" class="leading-snug text-sm font-semibold text-gray-500">more</a>
            </p>
        @else
            <p class="px-4 mt-4 leading-snug text-sm text-gray-800">{{ $post->comments->first()->text }}</p>
        @endif
    @endif
    @if(count($post->comments) > 1)
            <a href="#" class="px-4 leading-snug text-sm font-semibold text-gray-500">View all {{ count($post->comments) }} comments</a>
    @endif
    <div class="mt-2 flex justify-between p-4 border-t border-gray-200 text-sm text-gray-500">
        Add comment
        <span class="uppercase text-blue-300">post</span>
    </div>
</li>
