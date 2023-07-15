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
                <img class="inline-block h-10 w-10 rounded-full" src="{{ auth()->user()->profile_picture }}" alt="">
              </div>
              <div class="min-w-0 flex-1">
                <livewire:post-create />
              </div>
            </div>
          </div>
        </div>
        <livewire:post-view />
      </div>

    </div>
  </div>
</x-layout>