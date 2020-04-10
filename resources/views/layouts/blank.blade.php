<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="search" type="application/opensearchdescription+xml" href="/osd.xml" title="Stupid.Exposed">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="{{mix('js/app.js')}}" defer></script>
        <script src="{{route('translations',app()->getLocale())}}" ></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <main>

                            @yield('content')


            </main>
            <footer>

            </footer>
        </div>
    </body>
</html>

<script>
    window.config = @json(['translations'=>['test','test']]);
</script>
