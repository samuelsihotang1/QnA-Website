<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
  @foreach ($posts as $post)
  <div
    class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
    <article class="flex max-w-xl flex-col items-start justify-between">
      <div class="flex items-center gap-x-4 text-xs">
        <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
        <button class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"
          wire:click="deletePost({{ $post->id }})">Delete</button>
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