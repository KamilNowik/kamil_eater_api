<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KamilEater Index</title>

    <!-- Fonts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    >
</head>
<body style="background-image: url(https://stefanisarie.photography/wotmoe/images/sparkles.png); background-color: rgba(28,28,30,1)">
<div id="app">
    <router-view></router-view>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
<script src="https://kit.fontawesome.com/016a490daa.js" crossorigin="anonymous"></script>
</body>
</html>

