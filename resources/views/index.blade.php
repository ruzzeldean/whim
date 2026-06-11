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
  <div id="wrapper">

    <nav class="navbar bg-base-100 shadow-sm">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
            <li><a>Home</a></li>
            <li><a>Posts</a></li>
            <li><a>About</a></li>
          </ul>
        </div>
        <a class="btn btn-ghost text-xl">Whim</a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a>Home</a></li>
          <li><a>Posts</a></li>
          <li><a>About</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a class="btn">Source</a>
      </div>
    </nav>

    <main class="p-5">
      <h2 class="text-lg font-bold">Main Content</h2>
    </main>


    <footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4">
      <aside>
        <p>Copyright © 2026 - All right reserved by Ruzzel Dean Parungao</p>
      </aside>
    </footer>
  </div>
</body>

</html>
