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
  @livewireStyles
</head>

<body class="bg-white h-full">
  <div class="bg-white min-h-full">

    {{ $slot }}

  </div>
  @livewireScripts
</body>

</html>