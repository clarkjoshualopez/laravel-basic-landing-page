@section('menu')
<header class="bg-primary">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <x-logo />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button id="open-btn-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-secondary">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">

      <a href="#" class="text-sm leading-6 text-white hover:text-secondary">Services</a>
      <a href="#" class="text-sm leading-6 text-white hover:text-secondary">Projects</a>
      <a href="#" class="text-sm leading-6 text-white hover:text-secondary">Team</a>
      <a href="#" class="text-sm leading-6 text-white hover:text-secondary">Pricing</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end space-x-4 items-center">
      <a href="#" class="text-sm leading-6 text-white hover:text-secondary">Log In</a>
      <a href="#" class="text-sm leading-6 text-white py-2 px-4 bg-secondary rounded-lg hover:bg-secondary/[0.8]">Sign Up</a>
    </div>
  </nav>

  <div id="mobile-menu" class="hidden lg:hidden transition-all duration-400 ease-out max-h-0" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-primary px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <x-logo />
        </a>
        <button id="close-btn-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-secondary">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="relative h-full mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:text-secondary">Services</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:text-secondary">Projects</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:text-secondary">Team</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:text-secondary">Pricing</a>
          </div>
          <div class="absolute bottom-0 text-center w-full">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-300">Log in</a>
            <a href="#" class="mt-3 -mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white bg-secondary hover:bg-secondary/[0.8] p-4">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>
@show