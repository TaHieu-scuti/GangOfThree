<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gang Of Three</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/theme/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
        <script src="/theme/semantic.min.js"></script>
    </head>
    <body>
        <div class="ui container">
            @include('elements.header')
            <div class="ui grid">
              <div class="four wide column">
                @include('elements.sidebar')
              </div>
              <div class="twelve wide stretched column">
                <div class="ui segment">
                  @yield('content')
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
