<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css"></style>
	<title>Kalkulator Sederhana</title>
</head>
<body bgcolor="#89CFF0" marginwidth="100">
	<form method="get">
		<table>
			<tr>
			<td colspan="4" align="center"><h1>KALKULATOR SEDERHANAKU</h1></td>
			</tr>
			<tr>
			<td>bilangan A</td>
			<td>bilangan B</td>
			<td></td>
			<td>Hasil</td>
			</tr>
			<tr>
			<td><input type="number" name="bilanganA" required value="<?php echo $bilanganA; ?>" style="background-color: #5496BF;"/></td>
			<td><input type="number" name="bilanganB" required value="<?php echo $bilanganB; ?>" style="background-color: #5496BF;"/></td>
			<td>=</td>
			<td><input type="text" name="hasil" disabled value="<?php echo $hasil; ?>" style="background-color: #375CA6;"/></td>
			</tr>
			<tr>
			<td colspan="2"><div align="center">
			<input type="submit" name="tambah" value="+" />
			<input type="submit" name="kurang" value="-" />
			<input type="submit" name="kali" value="x" />
			<input type="submit" name="bagi" value="/" />
			</div></td>
			</tr>
		</table>
	</form>
</body>
</html>