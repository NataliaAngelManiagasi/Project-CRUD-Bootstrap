<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Praktikum Pemrograman Web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	

	<script language="javascript">
		function cekform(){
			if(document.mhs.txtnama.value==""){
				alert('Nama Harus Diisi');
				document.mhs.txtnama.focus();
				return false;
			} else if(document.mhs.txtalamat.value==""){
				alert('Alamat Harus Diisi');
				document.mhs.txtalamat.focus();
				return false;
			} else if(document.mhs.txtpekerjaan.value==""){
				alert('Pekerjaan Harus Diisi');
				document.mhs.txtpekerjaan.focus();
				return false;
			} else {
				return true;
			}
		}
		</script>
	
</head>

<body>
	<div class="judul">
		<h1>Praktikum Pemrograman Web</h1>
		<br>
		<h2>Politeknik Negeri Batam</h2>
	</div>
	<br>
	<a href="index.php">Lihat Semua Data</a>
	<br>
	<h3>Input data baru</h3>
	<br>
	<br>
	<form action="input-aksi.php" name="mhs" method="post" onsubmit="return cekform()">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" id="txtnama" name="nama" placeholder="Nama Lengkapmu"></td>
			<tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" id="txtalamat" name="alamat" placeholder="Alamat Tinggal" ></td>
			<tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" id="txtpekerjaan" name="pekerjaan" placeholder="Pekerjaan" ></td>
			<tr>
			<tr>
				<td><input type="submit" value="Simpan"></td>
			<tr>
		</table>
	</form>
</body>
</html>