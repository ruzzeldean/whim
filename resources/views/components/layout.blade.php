<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Whim</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div id="wrapper" class="">

    @guest
      <x-nav />

      <main class="w-full max-w-7xl mt-15 mx-auto px-5 py-7 space-y-5">
        {{ $slot }}
      </main>

      <footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4">
        <aside>
          <p>Copyright © 2026 - All right reserved by Ruzzel Dean Parungao</p>
        </aside>
      </footer>
    @endguest

    @auth
      <x-admin.layout>
        {{ $slot }}
      </x-admin.layout>
    @endauth

  </div>
</body>

</html>
