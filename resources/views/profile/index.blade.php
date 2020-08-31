@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full">
        <div class="flex flex-row mt-16">
            <div class="ml-10 bg-green-400 h-48 w-48 rounded-full"></div>
            <div class="ml-10 flex flex-col flex-1 text-gray-700">
                <h2 class="text-4xl text-gray-900">{{ $user->name }}</h2>
                <div class="mt-6 flex flex-col sm:flex-row justify-between w-full md:w-2/3">
                    <span class="mt-2 sm:mt-0"><strong
                            class="font-bold text-gray-900 mr-1">{{ $user->posts->count() }}</strong>posts</span>
                    <span class="mt-2 sm:mt-0"><strong
                            class="font-bold text-gray-900 mr-1">79.9k</strong>followers</span>
                    <span class="mt-2 sm:mt-0"><strong class="font-bold text-gray-900 mr-1">85</strong>following</span>
                </div>
                <div class="mt-6 text-xl font-semibold text-gray-900">Full Name</div>
                <div class="text-gray-900">Description about full name</div>
                <div class="mt-3 text-sm">Followed by <span class="text-gray-900">danni</span>, <span
                        class="text-gray-900">kamren</span> + 4 more
                </div>
            </div>
        </div>
        <div class="flex mt-16">
            <div class="ml-10 flex flex-col items-center">
                <div class="bg-red-400 h-24 w-24 rounded-full"></div>
                <span class="mt-4">title</span>
            </div>
            <div class="ml-10 flex flex-col items-center">
                <div class="bg-green-400 h-24 w-24 rounded-full"></div>
                <span class="mt-4">title</span>
            </div>
            <div class="ml-10 flex flex-col items-center">
                <div class="bg-blue-400 h-24 w-24 rounded-full"></div>
                <span class="mt-4">title</span>
            </div>
        </div>
        <div class="block flex flex-col items-center mt-16 border-t border-gray-400">
            <ul class="w-48 flex justify-between font-semibold">
                <li class="flex pt-4 pb-2 uppercase tracking-wider border-b border-gray-900">
                    <font-awesome-icon class="text-gray-700 mr-1" :icon="['fa','border-all']"></font-awesome-icon>
                    Posts
                </li>
                <li class="pt-4 pb-2 uppercase tracking-wider border-b border-gray-200">
                    <font-awesome-icon class="text-gray-700" :icon="['fa','user-tag']"></font-awesome-icon>
                    Tagged
                </li>
            </ul>
        </div>
        <div class="pt-4">
            <div class="flex justify-between">
                <span class="bg-red-400 w-64 h-64">o</span>
                <span class="bg-green-400 w-64 h-64">o</span>
                <span class="bg-blue-400 w-64 h-64">o</span>
            </div>
        </div>
        <div class="pt-4">
            <div class="flex justify-between">
                <span class="bg-red-400 w-64 h-64">o</span>
                <span class="bg-green-400 w-64 h-64">o</span>
                <span class="bg-blue-400 w-64 h-64">o</span>
            </div>
        </div>
        <div class="pt-4">
            <div class="flex justify-between">
                <span class="bg-red-400 w-64 h-64">o</span>
                <span class="bg-green-400 w-64 h-64">o</span>
                <span class="bg-blue-400 w-64 h-64">o</span>
            </div>
        </div>
    </div>
@endsection
