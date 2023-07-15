<div>
  <form wire:submit.prevent="store" action="" class="relative">
    <div
      class="overflow-hidden rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
      <label for="question" class="sr-only">Add your question</label>
      <textarea rows="3" name="question" id="question" wire:model="title"
        class="block w-full resize-none border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
        placeholder="Add your question..."></textarea>
      @error('title')
      <div>
        {{ $message }}
      </div>
      @enderror

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