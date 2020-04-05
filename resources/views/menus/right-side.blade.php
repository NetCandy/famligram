<div class="flex flex-col">
    <div class="mt-4 pl-4">
        <div class="flex items-center">
                        <span class="block w-12 h-12 bg-green-400 rounded-full overflow-hidden">
                            <img src="/images/avatars/jon.png">
                            <img src="/images/avatars/{{ \Illuminate\Support\Str::lower(auth()->user()->name) }}.png">
                        </span>
            <div class="ml-2 flex flex-col font-semibold">
                <span class="text-sm">{{ \Illuminate\Support\Str::title(auth()->user()->name) }}</span>
                {{--@todo: Add username to migration--}}
                <span class="mt-1 text-xs text-gray-500">ragus1975</span>
            </div>
        </div>
    </div>
    <div class="mt-4 pl-4">
        <div class="flex flex-col bg-white p-4 rounded border border-gray-400">
            <div class="flex justify-between">
                <h3 class="text-gray-500 text-sm font-bold">Stories</h3>
                <span class="text-sm font-semibold">Watch all</span>
            </div>
            @foreach(\App\User::all() as $familyMember)
                @include('stories.partials.stories-for-user')
            @endforeach
        </div>
    </div>
</div>
