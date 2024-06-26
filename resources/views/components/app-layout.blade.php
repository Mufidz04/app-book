<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        @isset($title)
            {{ $title }} / Laravel 10
        @else
        Laravel 11
        @endisset
    </title>
</head>
<body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  {{-- x-navbar/ merujuk pada folder navbar yang akan ditampilkan --}}
  <x-navbar/></x-navbar/>
  @isset($heading)
    <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{-- {{ $heading }} merupakan rujukan dari yang akan dibuat pada view. --}}
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div>
  </header>
  @endisset
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      {{-- {{ $slot }} merupakan isian dari folder view. --}}
          {{ $slot }}
    </div>
  </main>
</div>
</body>
</html>
