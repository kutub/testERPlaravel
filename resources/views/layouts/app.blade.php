<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer - Management</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <div class="columns">
        @if (Auth::check())
          <div class="column is-one-fifth" style="padding:0">
            @include('_includes/nav/homeMenu')
          </div>
          <div class="column" style="padding:0">
            @include('_includes/nav/main')
            <div class="columns p-l-15">
              <div class="column">
                @yield('content')
              </div>
            </div>
          </div>
        @endif
        @yield('fullpage')
      </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('_includes.notifications.toast')
    @yield('scripts')
</body>
</html>
