<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>404</title>
    <link rel='stylesheet' href='https://cdn.3up.dk/flexgrid.io@2.5.1/css/flexgrid.min.css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/styles/404.css')}}" type="text/css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    <div class="row">
        <div class="xs-12 md-6 mx-auto">
            <div id="countUp">
                <div class="number" style="font-size: 40px" data-count="404">404</div>
                <div class="text">Page not found</div>
                <div class="text">Nashi v Katowice</div>
                <div class="text">Я, наверное, работаю над чем-то...</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
