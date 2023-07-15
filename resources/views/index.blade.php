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

            <div class="flex items-start space-x-4">
              <div class="flex-shrink-0">
                <img class="inline-block h-10 w-10 rounded-full"
                  src="{{ auth()->user()->profile_picture }}"
                  alt="">
              </div>
              <div class="min-w-0 flex-1">
                <form action="#" class="relative">
                  <div
                    class="overflow-hidden rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                    <label for="comment" class="sr-only">Add your question</label>
                    <textarea rows="3" name="comment" id="comment"
                      class="block w-full resize-none border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                      placeholder="Add your question..."></textarea>

                    <div class="py-2" aria-hidden="true">
                      <div class="py-px">
                        <div class="h-9"></div>
                      </div>
                    </div>
                  </div>

                  <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                    <div class="flex items-center space-x-5"></div>
                    <div class="flex-shrink-0">
                      <button type="submit"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          @foreach ($posts as $post)
          <div
            class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <article class="flex max-w-xl flex-col items-start justify-between">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                  </a>
                </h3>
              </div>
              <div class="relative mt-5 flex items-center gap-x-4">
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