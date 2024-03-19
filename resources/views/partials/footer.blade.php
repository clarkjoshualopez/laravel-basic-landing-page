<!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=164-3376&mode=design&t=eqoSuiZ3NLGC4red-0 -->

@section('footer')
<div class="relative w-full bg-primary pt-24 pb-16">
    <div class="z-30 max-w-4xl flex flex-col items-center mx-auto">

        <x-logo />
        <div class="mt-6 flex flex-col md:flex-row items-center space-x-0 md:space-x-12 space-y-8 md:space-y-0">
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Services</a>
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Projects</a>
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Team</a>
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Pricing</a>
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Help</a>
            <a href="#" class="text-xl text-gray-400 hover:text-gray-200">Privacy</a>
        </div>
        <p class="text-xl text-gray-400 leading-8 mt-16">© {{ date('Y') }} Flex. All rights reserved.</p>
    </div>
</div>
@show