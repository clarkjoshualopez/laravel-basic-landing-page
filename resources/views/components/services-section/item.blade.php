@props(['title' => '', 'description' => ''])

<div class="text-center flex flex-col items-center">
    <div class="w-fit rounded bg-secondary p-4 md:p-5 mb-4 flex justify-center">
        {{ $icon }}
    </div>
    <h3 class="text-xl md:text-2xl text-gray-900 tracking-tight mb-4 font-bold">{{ $title }}</h3>
    <p class="text-sm md:text-base leading-normal text-gray-500">{{ $description }}</p>
</div>