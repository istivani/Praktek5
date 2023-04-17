<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Biodata Sederhana Form</title>
</head>
<body>
	<h2>Biodata Sederhana</h2>
	<form method="GET" action="biodata.php">
		<table>
			<tr>
				<td>Nama Lengkap :</td>
				<td><input type="text" id="" name="nama"></td>
			</tr>
			<tr>
				<td>Umur :</td>
				<td><input type="number" id="" name="umur"></td>
			</tr>
			<tr>
				<td>Tempat Lahir :</td>
				<td><input type="text" id="" name="tempatlahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td><input type="radio" name="jnskelamin" value="Laki - Laki">Laki - Laki</td>
				<td><input type="radio" name="jnskelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea id="" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Agama :</td>
				<td><input type="text" id="" name="agama"></td>
			</tr>

			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
        </table>
	</form>
</body>
</html>