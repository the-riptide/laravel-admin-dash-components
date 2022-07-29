@props(['relation'])

<div 
    x-data="{open : false}"
>
    <div 
        class="flex flex-row justify-between border-gray-300 bg-white rounded"
        @click="open = true"
        x-show="! open"
    >

        <x-dashcomp::input.label class="px-1" >Open {{Str::of($relation->relationship)->ucFirst()->plural()}} relationship</x-dashcomp::input.label>
        <div class="px-2">+</div>
    </div>

    <div
        x-show="open"
        x-cloak 
        x-transition
    >
        <div class="flex flex-row justify-between border-gray-300 bg-white rounded" @click="open= false">
            <x-dashcomp::input.label class="px-1">Connect {{Str::of($relation->relationship)->ucFirst()->plural()}} </x-dashcomp::input.label>

            <div class="px-2">-</div>
        </div>

        <select  wire:model.defer="{{$relation->model}}" multiple
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option> Please Choose... </option>

            @foreach ($relation->items as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
            @endforeach

        </select>
    </div>
    @error($relation->relationship)  
        <span>{{ $message }}</span> 
    @enderror
</div>
