<div class="flex flex-col sm:justify-center sm:flex-row" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="flex flex-col">
        <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="search">
            Search
        </label>
        <input
            wire:model.debounce.1s="filter"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="search"
            type="text"
            placeholder="search">
        @if (count($posts) > 0)
            <ol style="width: 500px">
                @foreach($posts as $post)
                    @include('posts._post')
                @endforeach
            </ol>
        @else
            <p>No Posts</p>
        @endif
    </div>
    @include('menus.right-side')
</div>
