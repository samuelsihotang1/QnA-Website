<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <title>
    {{ $title ?? 'Page' }}
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/components.css">
  <script src="/js/components.js"></script>
  <script type="module" src="/js/iframe-alpine-964dceff.js"></script>
</head>

<body class="bg-white h-full">
  <div class="bg-white min-h-full">
    <div>
      <div class="bg-gray-100">
        @if(!isset($navbar))
        <nav x-data="{ open: false }" class="bg-white shadow">
          <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 justify-between">
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                  class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                  aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                  x-bind:aria-expanded="open.toString()">
                  <span class="sr-only">Open main menu</span>
                  <svg x-description="Icon when menu is closed." x-state:on="Menu open" x-state:off="Menu closed"
                    class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                  </svg>
                  <svg x-description="Icon when menu is open." x-state:on="Menu open" x-state:off="Menu closed"
                    class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
              <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                  <img class="block h-8 w-auto lg:hidden"
                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                  <img class="hidden h-8 w-auto lg:block"
                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
              </div>
              <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div x-data="Components.menu({ open: false })" x-init="init()"
                  @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                  class="relative ml-3">
                  <div>
                    <button type="button"
                      class="inline-flex items-center rounded-full bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                      id="user-menu-button" x-ref="button" @click="onButtonClick()"
                      @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                      aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()"
                      @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                      <span class="sr-only">Open user menu</span>
                      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <span class="text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">
                          <svg class="h-7 w-6 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                              d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                        </span>
                      </div>
                    </button>
                  </div>

                  <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                    x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical"
                    aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()"
                    @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false"
                    @keydown.enter.prevent="open = false; focusButton()"
                    @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                    <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Settings</a> -->
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700"
                      :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="user-menu-item-2"
                      @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)"
                      @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Log out</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu"
            x-show="open" style="display: none;">
          </div>
        </nav>
        @endif

      </div>
    </div>

    {{ $slot }}

  </div>

</body>

</html>