<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Decor</title>
       
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body class="flex items-center justify-center h-screen">
        <div id="app">
            <welcome></welcome>
        </div>       
    </body>
    <script src="{{ asset("js/app.js") }}"></script>
</html>
