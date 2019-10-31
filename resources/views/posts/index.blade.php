@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:justify-center sm:flex-row">
        @if (count($posts) > 0)
            <ol style="width: 500px">
                @foreach($posts as $post)
                    @include('posts.partials.post')
                @endforeach
            </ol>
        @else
            <p>No Posts</p>
        @endif
        {{--<div>
            <div class="flex flex-col">
                <div class="mt-4 pl-4">
                    <div class="flex items-center">
                        <span class="block w-12 h-12 bg-green-400 rounded-full overflow-hidden">
                            <img src="/images/avatars/jon.png">
                            <img src="/images/avatars/{{ \Illuminate\Support\Str::lower(auth()->user()->name) }}.png">
                        </span>
                        <div class="ml-2 flex flex-col font-semibold">
                            <span class="text-sm">Jon</span>
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
        </div>--}}
    </div>
@endsection
