<!DOCTYPE html>
<html lang="en">
<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('storage/app_images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('style/header_style.css') }}">
<link rel="stylesheet" href="{{ asset('style/footer_style.css') }}">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@yield('link')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cloth Lists</title>
</head>
<body>
@yield('header')
@yield('nav')
@yield('main')
@yield('footer')
</body>
</html>