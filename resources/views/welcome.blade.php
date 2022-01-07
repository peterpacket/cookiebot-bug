<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="{{ config('app.cookiebot_key') }}" data-blockingmode="auto" type="text/javascript"></script>    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cookiebot demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <!-- Styles -->
</head>
<body class="antialiased">
<div id="app">
    <ButtonComponent is="button-component"></ButtonComponent>
</div>
</body>
</html>
