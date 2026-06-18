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
  <div id="login-wrapper">
    <form action="" method="POST">
      @csrf

      <div id="login-form" class="bg-base-200 border-base-300 rounded-box min-w-70 md:w-xs border p-4 space-y-2">
        <h2 class="text-center text-2xl mb-4">Whimcome Back!</h2>

        <div>
          <label class="label" for="email">Email</label>
          <input type="email" class="input" name="email" id="email" placeholder="Email">
        </div>

        <div>
          <label class="label" for="password">Password</label>
          <input type="password" class="input" name="password" id="password" placeholder="Password">
        </div>

        {{-- <div class="text-end text-xs">
          <label class="label">
            <input type="checkbox" name="remember" id="remember" class="checkbox checkbox-sm" />
            Remember me
          </label>
        </div> --}}

        <button class="btn btn-neutral w-full mt-4">LOGIN</button>
      </div>
    </form>
  </div>
</body>

</html>
