<!DOCTYPE html>
<html>
<head>
	<title>Masukan Data Kontak </title>
</head>
<body>
	<form method="post" action="act.php">  
    <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file act.php -->
		<table>
			<tr> <td> ID </td> <td> <input type="text" onkeyup="isi_otomatis()" name="id"> </td> </tr> 
			<tr> <td> NAMA </td> <td> <input type="text" name="nama"> </td> </tr> 
			<tr> <td> JENIS KELAMIN </td> <td> <input type="text" name="jenis_kelamin"> </td> </tr> 
			<tr> <td> EMAIL </td> <td> <input type="text" name="email"> </td> </tr> 
			<tr> <td> ALAMAT </td> <td> <input type="text" name="alamat"> </td> </tr> 
			<tr> <td> KOTA </td> <td> <input type="text" name="kota"> </td> </tr> 
			<tr> <td> PESAN </td> <td> <input type="text" name="pesan"> </td> </tr> 
			<tr> <td colspan="2"> <button type="submit" value="simpan"> SIMPAN </button> </td> </tr> 
		</table>
	</form>
</body>
</html>