<html>
<head>
	<title>Halaman Saya</title>
</head>
<body>
	<center>
	<h2>Daftar : {{$data}} {{$data2}}</h2>
	@foreach ($query as $key)
	<hr>{{$key}}</hr>
	@endforeach	
	</center>
</html>