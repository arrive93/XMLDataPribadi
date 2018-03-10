<?xml version="1.0" encoding="UTF-8"?>
<html>
	<head>
	<title>Data Pribadi</title>
	</head>

	<body>
	
		<?php
		$mahasiswa = new SimpleXMLElement('datapribadi.xml', null, true);
		 
		echo "
		<table border=1>
		<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Fakultas</th>
		</tr>
		 
		";
		
		foreach($mahasiswa as $data)
		{
				echo "
		<tr>
		<td>{$data['nim']}</td>
		<td>{$data->nama}</td>
		<td>{$data->jurusan}</td>
		<td>{$data->fakultas}</td>
		</tr>
		 
		";
		}
		echo '</table>';
		?>
	 
	</body>
</html>