<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
        <title>Bulletin Board</title>
        <style>body {padding-top: 54px;}</style>
        <script src='{{ asset("js/app.js") }}' defer></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body style="background-color: floralwhite">

    <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
        <a class='navbar-brand title' href={{route('home')}}>Bulletin Board</a>
    </nav>
        @yield('content')
    </body>
</html>
