@props(['status'])
{{-- Alert --}}
<div
    x-data="{ show: false }"
    x-cloak
    x-init="setTimeout(() => show = true, 1000), setTimeout(() => show = false, 3500)"
    x-show="show" x-transition.duration.500ms
    class="rounded border border-green-600 bg-green-100 px-4 py-1 -my-1">
    {{-- Alert body --}}
    <div class="text-center text-base font-medium text-green-700">
        {{$status}}
    </div>
</div>