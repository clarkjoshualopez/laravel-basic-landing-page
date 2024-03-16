@props(['teamMembers' => []])

<div class="py-16 sm:py-20">
    <img class="w-full" src="{{ url('images/team-bg-wave.png') }}" alt="">
    <div class="bg-primary py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="w-full text-center mb-24">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Our team is the best in the business.</h2>
                <p class="mt-6 text-xl leading-8 text-gray-400">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 grid-cols-2 sm:grid-cols-2 md:grid-cols-4 sm:gap-y-12 xl:col-span-2">
                @forelse ($teamMembers as $teamMember)
                    <li>
                        <x-team-section.item 
                            :name="$teamMember->name" 
                            :position="$teamMember->role"
                            :imgUrl="$teamMember->image"
                        ></x-team-section.item>
                    </li>
                @empty
                    @foreach(range(1, 8) as $i)
                        <li>
                            <x-team-section.item name="Jane Alexander" position="Co-Founder / CEO"></x-team-section.item>
                        </li>
                    @endforeach
                @endforelse
            </ul>
        </div>
    </div>
    <img class="w-full rotate-180" src="{{ url('images/team-bg-wave.png') }}" alt="">
</div>