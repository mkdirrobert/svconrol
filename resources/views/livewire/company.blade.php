<div class="hidden sm:inline">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-14 w-auto" src="images/logo vector.svg" alt="">
            </a>
          </div>
          <div @click="show = !show" class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex space-x-12" x-data="{showMenu: false}">
            <a href="#" @mouseover="showMenu = !showMenu" class="text-xl font-semibold leading-6 text-gray-800">
              {{ __('main-page/nav-bar.services') }}
                  <div x-show="showMenu" @mouseleave="showMenu = false" class="absolute left-1/2 z-10 mt-12 flex w-screen max-w-max -translate-x-96 px-4">
                    <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                      <div class="p-4">
                        <div class="hidden group relative gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                          <div>
                            <a href="{{ route('construction') }}" class="font-semibold text-gray-900">
                              {{ __('main-page/first-section.control_cabinet_construction') }}
                              <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ __('main-page/first-section.nav_control') }}</p>
                          </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                          <div>
                            <a href="{{ route('construction') }}" class="font-semibold text-gray-900">
                              {{ __('main-page/first-section.control_cabinet_construction') }}
                              <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ __('main-page/first-section.nav_control') }}</p>
                          </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                          <div>
                            <a href="{{ route('programming') }}" class="font-semibold text-gray-900">
                              {{ __('main-page/first-section.programming') }}
                              <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ __('main-page/first-section.nav_programming') }}</p>
                          </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                          <div>
                            <a href="{{ route('planning') }}" class="font-semibold text-gray-900">
                              {{ __('main-page/first-section.planning') }}
                              <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ __('main-page/first-section.nav_planning') }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </a>
            <a href="{{ route('company') }}" class="text-xl font-semibold leading-6 text-gray-800">{{ __('main-page/nav-bar.company') }}</a>
            <a href="{{ route('contact') }}" class="text-xl font-semibold leading-6 text-gray-800">{{ __('main-page/nav-bar.contact') }}</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <span class="isolate inline-flex rounded-md shadow-sm">
              <button wire:click="changeLocale('de')" type="button" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">DE</button>
              <button wire:click="changeLocale('en')" type="button" class="relative -ml-px inline-flex items-center bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">EN</button>
            </span>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div 
        x-show="show" 
        class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
              <button @click="show = !show" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Leistungen</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Unternehmen</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">News</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Kontakt</a>
                </div>
                <div class="py-6">
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
        <div class="absolute -top-80 left-[max(6rem,33%)] -z-10 transform-gpu blur-3xl sm:left-1/2 md:top-20 lg:ml-20 xl:top-3 xl:ml-56" aria-hidden="true">
          <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.6%, 100% 17.2%, 76.7% 3.1%, 48.4% 0.1%, 44.6% 4.8%, 54.5% 25.4%, 59.8% 49.1%, 55.3% 57.9%, 44.5% 57.3%, 27.8% 48%, 35.1% 81.6%, 0% 97.8%, 39.3% 100%, 35.3% 81.5%, 97.2% 52.8%, 63.1% 29.6%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 flex items-center">
          <div>
            <div class="mx-auto max-w-2xl lg:mx-0">
              <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('company/page.first_title') }}</h1>
              <p class="mt-6 text-xl leading-8 text-gray-700">
                {{ __('company/page.first_content') }}
              </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
              <div class="relative lg:order-last lg:col-span-5">
                <svg class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]" aria-hidden="true">
                  <defs>
                    <pattern id="e87443c8-56e4-4c20-9111-55b82fa704e3" width="200" height="200" patternUnits="userSpaceOnUse">
                      <path d="M0.5 0V200M200 0.5L0 0.499983" />
                    </pattern>
                  </defs>
                  <rect width="100%" height="100%" stroke-width="0" fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)" />
                </svg>
              </div>
              <div class="max-w-xl text-base leading-7 text-gray-700 lg:col-span-7">
                <p>{{ __('company/page.first_content2') }}</p>
              </div>
            </div>
          </div>
          <figure class="border-l border-indigo-600 pl-8">
            <figcaption class=" flex gap-x-4">
              <img src="images/logo vector.svg" alt="" class="mt-1 flex-none rounded-full bg-gray-50">
            </figcaption>
          </figure>
        </div>
      {{-- Second section --}}
      <div class=" px-6 py-32 lg:px-8">
        <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('company/page.second_title') }}</h1>
          <p class="mt-6 text-xl leading-8">{{ __('company/page.second_content') }}</p>
          <div class="mt-10 max-w-2xl">
            <p>{{ __('company/page.second_content2') }}</p>
          </div>
        </div>
      </div>
{{-- Third section --}}
<div class="">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
      <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('company/page.third_title') }}</h1>
      <div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 text-gray-700 lg:max-w-none lg:grid-cols-2">
        <div>
          <p>{{ __('company/page.third_content') }}</p>
        </div>
        <div>
          <h2 class="text-2xl text-blue-specific font-extrabold">{{ __('company/page.third_content2') }}</h2>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
