<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zinout Culture</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body {
        font-family: 'Nunito', sans-serif;
      }
    </style>
  </head>

  <body class="flex flex-col h-screen justify-center">
    
    <div class="container mx-auto">
      <form class="card w-96 bg-base-100 shadow-xl mx-auto p-10 gap-4" onSubmit="return false;">
        <img class="mx-auto" src="{{ asset('images/logos/logo.png') }}" height="100" width="150" />

        <div class="form-control w-full max-w-xs"> 
          <span class="px-1 text-sm text-gray-600">Email:</span>
          <input
            id="email"
            type="text"
            placeholder="email@domain.com"
            class="input input-bordered w-full max-w-xs shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
          >
        </div>

        <div class="form-control w-full max-w-xs">
          <span class="px-1 text-sm text-gray-600">Contraseña:</span>
          <div class="relative">
            <input
              id="password"
              type="password"
              placeholder="*******"
              class="input input-bordered w-full max-w-xs shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"
            >
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
              <svg
                id="eye-visible"
                class="hidden h-6 text-gray-700 cursor-pointer"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                viewbox="0 0 576 512"
              >
                <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
              </svg>
              <svg
                id="eye-hidden"
                class="hidden h-6 text-gray-700 cursor-pointer"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                viewbox="0 0 640 512"
              >
                <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="form-control">
          <label class="label cursor-pointer justify-start gap-2">
            <input type="checkbox" checked="checked" class="checkbox">
            <span class="px-1 text-sm text-gray-600">Recuérdame</span>
          </label>
        </div>

        <button type="submit" class="btn">
          <a href="{{ route('home') }}">Iniciar Sesión</a>
        </button>

        <button class="btn btn-link btn-sm no-underline">
          <a href="/restore">Olvidé mi contraseña</a>
        </button>
      </form>
    </div>

    <footer>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
