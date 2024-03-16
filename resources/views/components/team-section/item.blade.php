@props(['name' => '', 'position' => '', 'imgUrl' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'])

<div class="flex flex-col items-center gap-y-3 text-center">
    <img class="h-20 w-20 rounded-full" src="{{ $imgUrl }}" alt="">
    <div>
        <h3 class="text-lg font-semibold leading-7 tracking-tight text-white">{{ $name }}</h3>
        <p class="mt-2 text-lg leading-6 text-secondary">{{ $position }}</p>
        <div class="mt-6 flex items-center space-x-5 justify-center">
            <a href="#"><x-icons.facebook color="text-gray-500" /></a>
            <a href="#"><x-icons.twitter color="text-gray-500" /></a>
            <a href="#"><x-icons.instagram color="text-gray-500" /></a>
        </div>
    </div>
</div>