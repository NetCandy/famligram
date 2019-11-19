@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:justify-center sm:flex-row">
        <fm-post-list></fm-post-list>
    </div>
    {{--<div class="flex flex-col sm:justify-center sm:flex-row">
        @if (count($posts) > 0)
            <ol style="width: 500px">
                @foreach($posts as $post)
                    @include('posts.partials.post')
                @endforeach
            </ol>
        @else
            <p>No Posts</p>
        @endif
        --}}{{--@include('menus.right-side')--}}{{--
    </div>--}}
@endsection
