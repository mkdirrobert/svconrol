<div class="hidden sm:inline" x-data="{}">
  <div x-data="{show: false}" class="bg-white">
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
      
        <div class="relative isolate px-6 pt-14 lg:px-8">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-2xl py-12 sm:py-28 lg:py-40">
            <div class="text-center">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ __('main-page/first-section.title') }}</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">{{ __('main-page/first-section.subtitle') }}</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
              </div>
            </div>
            <div class="hidden sm:mt-8 sm:flex sm:justify-center">
              
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
      <!-- SECTION 2 --> 
      <div class="bg-white sm:pb-32 pb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto mt-16 max-w-2xl lg:max-w-none">
            <dl class="flex items-center justify-between space-x-24 pl-44 pr-44 pt-24">
              <div class="flex flex-col">
                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                  <a href="{{ route('planning') }}">
                    <div class="flex flex-col">
                      <img src="images/planning.svg" alt="" class="h-[20rem] object-contain">
                      <span class="text-center text-2xl sm:mt-10">{{ __('main-page/first-section.planning') }}</span>
                    </div>
                  </a>
                </dt>
              </div>
              <div class="flex flex-col">
                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                  <a href="{{ route('programming') }}">
                    <div class="flex flex-col">
                      <img src="images/programming.svg" alt="" class="h-[20rem] object-contain">
                      <span class="text-center text-2xl sm:mt-10">{{ __('main-page/first-section.programming') }}</span>
                    </div>
                  </a>
                </dt>
              </div>
              <div class="flex flex-col">
                <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                  <a href="{{ route('construction') }}">
                    <div class="flex flex-col">
                      <img src="images/electric.svg" alt="" class="h-[20rem] object-contain">
                      <span class="text-center text-2xl sm:mt-10">{{ __('main-page/first-section.control_cabinet_construction') }}</span>
                    </div>
                  </a>
                </dt>
              </div>
            </dl>
          </div>
        </div>
      </div>
    <!-- END SECTION2 -->

      <!-- SECTION 1 --> 
      <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
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
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
          
          <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[44rem]" src="images/main.png" alt="">
          </div>
          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
              <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                <ul role="list" class="mt-8 space-y-8 text-gray-600">
                  <li class="flex gap-x-3 items-center">
                    <img src="images/arrow.svg" alt="" class="object-cover h-44">
                    <span><strong class="font-semibold text-gray-900">{{ __('main-page/second-section.maxim_strong') }}</strong> {{ __('main-page/second-section.maxim_text') }}</span>
                  </li>
                  <li class="flex gap-x-3 items-center">
                    <img src="images/product.svg" alt="" class="object-cover h-44">
                    <span><strong class="font-semibold text-gray-900">{{ __('main-page/second-section.details_strong') }}</strong> {{ __('main-page/second-section.detail_text') }}</span>
                  </li>
                  <li class="flex gap-x-3 items-center">
                    <img src="images/money.svg" alt="" class="object-cover h-44">
                    <span><strong class="font-semibold text-gray-900">{{ __('main-page/second-section.economic_strong') }}</strong> {{ __('main-page/second-section.economic_text') }}</span>
                  </li>
                  <li class="flex gap-x-3 items-center">
                    <img src="images/versatility.svg" alt="" class="object-cover h-44">
                    <span><strong class="font-semibold text-gray-900">{{ __('main-page/second-section.versatility_strong') }}</strong> {{ __('main-page/second-section.versatility_text') }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
          <div class="relative isolate overflow-hidden bg-gradient-to-r from-50-100 to text-teal-100 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
            <div class="flex items-center justify-center">
              <img src="/images/simple-white.png" alt="" class="object-cover h-36">
              <div>
                <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-blue-900 sm:text-4xl">{{ __('main-page/second-section.ready') }}</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-800">{{ __('main-page/second-section.contact_us') }}</p>
              </div>
            </div>

            <div class="mt-10 flex items-center justify-center gap-x-6">
            </div>
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
              <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
              <defs>
                <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                  <stop stop-color="#7775D6" />
                  <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
      
<!-- END SECTION 1 -->

<!-- FOOTER -->
<footer class="bg-inherit">
  <div class="mx-auto max-w-7xl overflow-hidden px-6 py-10 sm:py-10 lg:px-8">
      <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
        <div class="pb-6">
          <a href="{{ route('contact') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Contact</a>
        </div>
        <div class="pb-6">
          <a href="{{ route('agb') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">AGB</a>
        </div>
      </nav>
      {{-- <div class="mt-10 flex justify-center space-x-10">
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Twitter</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">GitHub</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">YouTube</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
          </svg>
        </a>
      </div> --}}
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2024 SVC, Inc. All rights reserved.</p>
    </div>
  </footer>
<!-- END FOOTER -->  
</div>
