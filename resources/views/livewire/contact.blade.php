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
    <div class="mx-auto grid max-w-7xl lg:grid-cols-1">
      <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8  flex items-start justify-between">
        <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
          <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10">
            <svg class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
              <defs>
                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse">
                  <path d="M130 200V.5M.5 .5H200" fill="none" />
                </pattern>
              </defs>
              <rect width="100%" height="100%" stroke-width="0" fill="white" />
              <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
              </svg>
              <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
            </svg>
          </div>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">{{ __('contact/page.title') }}</h2>
          <p class="mt-6 text-lg leading-8 text-gray-600">{{ __('contact/page.content') }}</p>
          <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
            <div class="flex gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Address</span>
                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                </svg>
              </dt>
              <dd>Mühlreit 6<br>83404 Ainring</dd>
            </div>
            <div class="flex gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Telephone</span>
                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
              </dt>
              <dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678">+49 (176) 6073-5499</a></dd>
            </div>
            <div class="flex gap-x-4">
                <dt class="flex-none">
                  <span class="sr-only">Website</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-7 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                </dt>
                <dd><a class="hover:text-gray-900" href="mailto:hello@example.com">www.svcontrol.com</a></dd>
              </div>
            <div class="flex gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Email</span>
                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
              </dt>
              <dd><a class="hover:text-gray-900" href="mailto:hello@example.com">office@svcontrol.com</a></dd>
            </div>
          </dl>
        </div>
        <div class="lg:mt-6 lg:w-80 lg:flex-none">
            <img class="h-12 w-auto" src="images/logo vector.svg" alt="">
            <figure class="mt-10">
              <blockquote class="text-lg font-semibold leading-8 text-gray-900">
                <p>“{{ __('contact/page.ceo') }}”</p>
              </blockquote>
              <figcaption class="mt-10 flex gap-x-6 ">
                <div class="">
                  <div class="text-base font-semibold text-blue-specific">Florian Haliti</div>
                  <div class="text-sm leading-6 text-blue-specific">CEO</div>
                  <div class="text-sm leading-6 text-blue-specific">Program Manager</div>
                </div>
              </figcaption>
            </figure>
          </div>
      </div>
    </div>
</div>
