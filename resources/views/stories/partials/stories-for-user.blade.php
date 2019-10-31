<div class="mt-3 flex items-center">
    <span class="block w-10 h-10 bg-blue-400 rounded-full overflow-hidden">
        <img src="/images/avatars/{{ \Illuminate\Support\Str::lower($familyMember->name) }}.png">
    </span>
    <div class="ml-2 flex flex-col font-semibold">
        <span class="text-sm">{{ \Illuminate\Support\Str::title($familyMember->name) }}</span>
        <span class="mt-1 text-xs uppercase tracking-wide text-gray-500">3 minutes ago</span>
    </div>
</div>
