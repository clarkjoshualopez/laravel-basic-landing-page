@props(['projects' => []])

<div class=" max-w-7xl mx-auto bg-white px-6 py-16 sm:py-20 lg:px-0 overflow-hidden lg:overflow-visible">
    <div class="mb-20 lg:max-w-4xl">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Gain more insight into how people use your apps</h1>
        <p class="mt-4 text-xl leading-8 text-gray-500">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
    </div>
    @forelse ($projects as $project)
        <div class="{{ $loop->index > 0 ? 'mt-28 md:mt-32' : '' }} relative isolate overflow-visible lg:overflow-visible">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="{{ $loop->index == 1 ? 'block md:flex' : 'flex' }} flex-col-reverse md:flex-row items-center mx-auto lg:mx-0 lg:max-w-none">
                @if ($loop->index == 1)
                    <x-projects-section.image img-url="{{ $project->image }}"></x-projects-section.image>
                @endif
                <div class="mt-4 md:mt-0 lg:mx-auto lg:w-full lg:max-w-7xl {{ $loop->index == 1 ? 'flex justify-end' : '' }}">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-md">
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">{{ $project->name }}</h1>
                            <p class="mt-6 mb-10 text-xl leading-8 text-gray-500">{{ $project->description }}</p>
                            <a href="#" class="rounded-md bg-secondary px-5 py-3 font-semibold text-white shadow-sm hover:bg-secondary/[0.8] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                        </div>
                    </div>
                </div>

                @if ($loop->index != 1)
                    <x-projects-section.image img-url="{{ $project->image }}"></x-projects-section.image>
                @endif
            </div>
        </div>
    @empty
        <div class="relative isolate overflow-visible lg:overflow-visible">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="flex flex-col-reverse md:flex-row items-center mx-auto lg:mx-0 lg:max-w-none">
                <div class="mt-4 md:mt-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-md">
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Aenean tempor enim eget ante consequat malesuad</h1>
                            <p class="mt-6 mb-10 text-xl leading-8 text-gray-500">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                            <a href="#" class="rounded-md bg-secondary px-5 py-3 font-semibold text-white shadow-sm hover:bg-secondary/[0.8] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                        </div>
                    </div>
                </div>

                <x-projects-section.image img-url="{{ url('images/projects-image.png') }}"></x-projects-section.image>
            </div>
        </div>
        <div class="mt-28 md:mt-32 relative isolate overflow-visible lg:overflow-visible">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="block md:flex items-center mx-auto lg:mx-0 lg:max-w-none">
                <x-projects-section.image img-url="{{ url('images/projects-image.png') }}"></x-projects-section.image>

                <div class="mt-4 md:mt-0 lg:mx-auto lg:w-full lg:max-w-7xl flex justify-end">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-md">
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Aenean tempor enim eget ante consequat malesuad</h1>
                            <p class="mt-6 mb-10 text-xl leading-8 text-gray-500">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                            <a href="#" class="rounded-md bg-secondary px-5 py-3 font-semibold text-white shadow-sm hover:bg-secondary/[0.8] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-28 md:mt-32 relative isolate overflow-visible lg:overflow-visible">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="flex flex-col-reverse md:flex-row items-center mx-auto lg:mx-0 lg:max-w-none">
                <div class="mt-4 md:mt-0  lg:mx-auto lg:w-full lg:max-w-7xl">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-md">
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Aenean tempor enim eget ante consequat malesuad</h1>
                            <p class="mt-6 mb-10 text-xl leading-8 text-gray-500">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                            <a href="#" class="rounded-md bg-secondary px-5 py-3 font-semibold text-white shadow-sm hover:bg-secondary/[0.8] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                        </div>
                    </div>
                </div>

                <x-projects-section.image img-url="{{ url('images/projects-image.png') }}"></x-projects-section.image>
            </div>
        </div>
    @endforelse
</div>