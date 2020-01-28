<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel | Vue</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
{{--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
	<div id="app">
    	@yield('content')
	</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>