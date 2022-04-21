<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body class="flex flex-col h-screen justify-between">
    <x-header />

    <div class="flex flex-row h-screen pt-2">
      <x-sidebar />

      <div id="page-content" class="container mx-auto px-4">
        @yield('content')
      </div>
    </div>

    <x-footer />

    @stack('scripts')

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
  </body>
</html>