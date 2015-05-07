<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
<h1>To Do App</h1>
</div>
<a href="{{route('kreiraj')}}">asdas</a>

{{env('MOJE_IME')}}
<div class="container">
@yield('content')

</div>
	<script src="{{URL::asset('js/sve.js')}}"></script>
</body>
</html>