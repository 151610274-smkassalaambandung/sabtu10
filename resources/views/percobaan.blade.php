<html>
<head>
	<title>Halaman Saya</title>
</head>
<body>
	<center>
	<table border='1'>


	<thead>
		<tr class="bg-info">
		 <th>id</th>
         <th>nama</th>
         <th>alamat</th>
         <th>JenisKelamin</th>
        <?php
        	$no= 1;
        ?>
        @foreach ($a as $data)
        <tr>
        	<td>{{$no++}}</td>
        	<td>{{$data->nama}}</td>
        	<td>{{$data->alamat}}</td>
        	<td>{{$data->jk}}</td>
        </tr>
        	@endforeach

	</thead>	
	</table>
	</center>
</html>