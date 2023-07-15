<x-layout>
  <x-slot name="title">
    Homepage
  </x-slot>
  <div class="" style="">
    <div class="py-8">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          {{-- Form Posting --}}
            <div class="h-auto bg-white p-8">
              <div class="mx-auto w-full max-w-xl">

                <form action="#" class="relative">
                  <div
                    class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" id="title"
                      class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                      placeholder="Title">
                    <label for="description" class="sr-only">Description</label>
                    <textarea rows="2" name="description" id="description"
                      class="block w-full resize-none border-0 py-0 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                      placeholder="Write a description..."></textarea>

                    <!-- Spacer element to match the height of the toolbar -->
                    <div aria-hidden="true">
                      <div class="py-2">
                        <div class="h-9"></div>
                      </div>
                      <div class="h-px"></div>
                      <div class="py-2">
                        <div class="py-px">
                          <div class="h-9"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="absolute inset-x-px bottom-0">
                    <!-- Actions: These are just examples to demonstrate the concept, replace/wire these up however makes sense for your project. -->
                    <div class="flex flex-nowrap justify-end space-x-2 px-2 py-2 sm:px-3">
                      <div
                        x-data="Components.listbox({ modelName: 'labelled', open: false, selectedIndex: 0, activeIndex: 0, items: [{&quot;name&quot;:&quot;Unlabelled&quot;,&quot;value&quot;:null},{&quot;name&quot;:&quot;Engineering&quot;,&quot;value&quot;:&quot;engineering&quot;},{&quot;name&quot;:&quot;Marketing&quot;,&quot;value&quot;:&quot;marketing&quot;},{&quot;name&quot;:&quot;Design&quot;,&quot;value&quot;:&quot;design&quot;},{&quot;name&quot;:&quot;Human Resources&quot;,&quot;value&quot;:&quot;human-resources&quot;}] })"
                        x-init="init()" class="flex-shrink-0">
                        <label id="listbox-label" class="sr-only" @click="$refs.button.focus()">Add a label</label>
                        <div class="relative">
                          <button type="button"
                            class="relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3"
                            x-ref="button" @keydown.arrow-up.stop.prevent="onButtonClick()"
                            @keydown.arrow-down.stop.prevent="onButtonClick()" @click="onButtonClick()"
                            aria-haspopup="listbox" :aria-expanded="open" aria-labelledby="listbox-label">
                            <svg x-state:on="Selected" x-state:off="Default"
                              class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1"
                              :class="{ 'text-gray-300': labelled.value === null, 'text-gray-500': !(labelled.value === null) }"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.5 3A2.5 2.5 0 003 5.5v2.879a2.5 2.5 0 00.732 1.767l6.5 6.5a2.5 2.5 0 003.536 0l2.878-2.878a2.5 2.5 0 000-3.536l-6.5-6.5A2.5 2.5 0 008.38 3H5.5zM6 7a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                            </svg>
                            <span x-state:off="Selected" class="hidden truncate sm:ml-2 sm:block"
                              :class="{ '': labelled.value === null, 'text-gray-900': !(labelled.value === null) }"
                              x-text="labelled.value === null ? 'Category' : labelled.name">Category</span>
                          </button>


                          <ul x-show="open" x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute right-0 z-10 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            @click.away="open = false" x-description="Select popover, show/hide based on select state."
                            @keydown.enter.stop.prevent="onOptionSelect()"
                            @keydown.space.stop.prevent="onOptionSelect()" @keydown.escape="onEscape()"
                            @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()"
                            x-ref="listbox" tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            :aria-activedescendant="activeDescendant" aria-activedescendant="" style="display: none;">
                            <li x-state:on="Highlighted" x-state:off="Not Highlighted"
                              class="relative cursor-default select-none px-3 py-2 bg-white"
                              x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation."
                              id="listbox-option-0" role="option" @click="choose(0)" @mouseenter="onMouseEnter($event)"
                              @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)"
                              :class="{ 'bg-gray-100': activeIndex === 0, 'bg-white': !(activeIndex === 0) }">
                              <div class="flex items-center">
                                <span class="block truncate font-medium">Unlabelled</span>
                              </div>
                            </li>
                            <li x-state:on="Highlighted" x-state:off="Not Highlighted"
                              class="relative cursor-default select-none px-3 py-2 bg-white"
                              x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation."
                              id="listbox-option-1" role="option" @click="choose(1)" @mouseenter="onMouseEnter($event)"
                              @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)"
                              :class="{ 'bg-gray-100': activeIndex === 1, 'bg-white': !(activeIndex === 1) }">
                              <div class="flex items-center">
                                <span class="block truncate font-medium">Engineering</span>
                              </div>
                            </li>
                            <li x-state:on="Highlighted" x-state:off="Not Highlighted"
                              class="relative cursor-default select-none px-3 py-2 bg-white"
                              x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation."
                              id="listbox-option-2" role="option" @click="choose(2)" @mouseenter="onMouseEnter($event)"
                              @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)"
                              :class="{ 'bg-gray-100': activeIndex === 2, 'bg-white': !(activeIndex === 2) }">
                              <div class="flex items-center">
                                <span class="block truncate font-medium">Marketing</span>
                              </div>
                            </li>
                            <li x-state:on="Highlighted" x-state:off="Not Highlighted"
                              class="relative cursor-default select-none px-3 py-2 bg-white"
                              x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation."
                              id="listbox-option-3" role="option" @click="choose(3)" @mouseenter="onMouseEnter($event)"
                              @mousemove="onMouseMove($event, 3)" @mouseleave="onMouseLeave($event)"
                              :class="{ 'bg-gray-100': activeIndex === 3, 'bg-white': !(activeIndex === 3) }">
                              <div class="flex items-center">
                                <span class="block truncate font-medium">Design</span>
                              </div>
                            </li>
                            <li x-state:on="Highlighted" x-state:off="Not Highlighted"
                              class="bg-white relative cursor-default select-none px-3 py-2"
                              x-description="Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation."
                              id="listbox-option-4" role="option" @click="choose(4)" @mouseenter="onMouseEnter($event)"
                              @mousemove="onMouseMove($event, 4)" @mouseleave="onMouseLeave($event)"
                              :class="{ 'bg-gray-100': activeIndex === 4, 'bg-white': !(activeIndex === 4) }">
                              <div class="flex items-center">
                                <span class="block truncate font-medium">Human Resources</span>
                              </div>
                            </li>

                          </ul>

                        </div>
                      </div>

                    </div>
                    <div class="flex items-center justify-between space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">
                      <div class="flex">
                      </div>
                      <div class="flex-shrink-0">
                        <button type="submit"
                          class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>


        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          @foreach ($posts as $post)
          <div
            class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <article class="flex max-w-xl flex-col items-start justify-between">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                <a href="#"
                  class="relative rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name }}</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                  {{ $post->body }}
                </p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="{{ $post->user->profile_picture }}" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{ $post->user->name }}
                    </a>
                  </p>
                  <p class="text-gray-600">{{ $post->user->username }}</p>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</x-layout>