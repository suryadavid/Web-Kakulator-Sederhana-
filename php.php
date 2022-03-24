<?php
$hasil =" ";
if(isset($_GET['bilanganA']) and isset($_GET['bilanganB']) ){
	$bilanganA = $_GET['bilanganA'];
	$bilanganB = $_GET['bilanganB'];

	if(isset($_GET['tambah'])){
	$hasil = $bilanganA + $bilanganB;
	}
	else if(isset($_GET['kurang'])){
	$hasil = $bilanganA - $bilanganB;
	}
	else if(isset($_GET['kali'])){
	$hasil = $bilanganA * $bilanganB;
	}
	else if(isset($_GET['bagi'])){
	$hasil = $bilanganA / $bilanganB;
	}
}
?>