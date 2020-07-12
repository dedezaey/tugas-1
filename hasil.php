<?php 


$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$total_harga = $harga_barang*$jumlah_barang;


?>







<!DOCTYPE html>
<html>
<title>pizza zaey</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/pitza.css">
<link rel="stylesheet" href="/bootstrap.min.css">

<style>
	
	
	.bgimg {
		background-repeat: no-repeat;
		background-size: cover;
		background-image: url("aset/1.jpg");
		min-height: 90%;
	}
</style>
<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top w3-hide-small">
		<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
			<a href="#" class="w3-bar-item w3-button">HOME</a>
			<a href="#menu" class="w3-bar-item w3-button">MENU</a>
			<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
			<a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
		</div>
	</div>

	<!-- Header with image -->

	<!-- Menu Container -->
	<div class="w3-container  w3-padding-64 w3-xxlarge " id="menu" style="text-decoration-color: white;">
		<div class="w3-content">

			<!-- pesanan -->

			<div class="container" >
				<p align="center">nota pembelian</p>
				<table border="1" style="border-color: white;">
					
					<tr>
						<th>Nama barang</th>
						<th>harga</th>
						<th>jumlah</th>
						<th>lanjut/tidak</th>
					</tr>

					
					<tr>
						<td><?php echo $nama_barang; ?></td>
						<td><?php echo $harga_barang; ?></td>
						<td><?php echo $jumlah_barang; ?> </td>
						<td style="border-color: blue"><a href="#" >hapus pesanan</a></td>
					</tr>


					
				</table>
			</div>



		</div>
	</div>

	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
		<p>Powered by <a  class="w3-hover-text-green"> fizza zae &#9400;hub: 0812-1234-1234</a></p>
	</footer>

	<script>
// Tabbed Menu
function openMenu(evt, menuName) {
	var i, x, tablinks;
	x = document.getElementsByClassName("menu");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < x.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	}
	document.getElementById(menuName).style.display = "block";
	evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>