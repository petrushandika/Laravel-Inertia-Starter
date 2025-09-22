<!DOCTYPE html>
<html lang="en" class="h-full bg-white text-black">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>
  @isset($title)
    {{ $title }} / Laravel 11
  @else
    Laravel 11
  @endisset</title>
</head>
<body class="h-full bg-white text-black">

<div class="min-h-full">
  <x-navbar/>
  
  <!-- Header -->
  @isset($heading)
    <header class="relative bg-gray-100 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-black/10">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-black">Dashboard</h1>
      </div>
    </header>
  @endisset

  <!-- Main -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>
