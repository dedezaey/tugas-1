<?php 

if(isset($_POST['hitung'])){

	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	
	$total_harga = $harga_barang*$jumlah_barang;
	if($jumlah_barang>=10){
		$diskon = 0.05*$total_harga;
	}else{
		$diskon =0;
	}
	$grand_total = $total_harga - $diskon;
	
}else{
	$nama_barang = "";
	$harga_barang = "";
	$jumlah_barang = "";
	$total_harga = "";
}

?>






<!DOCTYPE html>
<html>
<title>pizza zaey</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/pitza.css">
<link rel="stylesheet" href="../css/bootstrap.css">

<style>
	body, html {height: 100%}
	body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
	.menu {display: none}
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
	<header class="bgimg w3-display-container w3-grayscale-min" id="home">
		<div class="w3-display-bottomleft w3-padding">
			<span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
		</div>
		<div class="w3-display-middle w3-center">
			<span class="w3-text-white w3-hide-small" style="font-size:100px">thin<br>CRUST PIZZA</span>
			<span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
			<p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
		</div>
	</header>

	<!-- Menu Container -->
	<div class="w3-container w3-black w3-padding-64 w3-xxlarge " id="menu" style="text-decoration-color: white;">
		<div class="w3-content">

			<!-- pesanan -->

			<form action="hasil.php" method="POST" style="padding-right: 100px; padding-left: 100px;">

				<div class="form-group">
					<label for="nama">Nama Barang</label>
					<input type="nama" class="form-control w3-input w3-padding-16 w3-border" name="nama_barang" value="<?php echo $nama_barang;?>" readonly>
				</div>
				<div class="form-group">
					<label for="harga">Harga Barang</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="harga_barang" value="<?php echo $harga_barang;?>" readonly>
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah Barang</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="jumlah_barang" value="<?php echo $jumlah_barang;?>" readonly>
				</div>
				<div class="form-group">
					<label for="total">Total Harga</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="total_harga" id="total_harga" value="<?php echo $total_harga;?>" readonly>
				</div>
				<div class="form-group">
					<label for="total">Diskon</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="diskon" id="diskon" value="<?php echo $diskon;?>" readonly>
				</div>
				<div class="form-group">
					<label for="total">Grand Total</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="grand_total" id="grand_total" value="<?php echo $grand_total;?>" readonly>
				</div>
				<div class="form-group">
					<label for="nama">Jumlah Bayar</label>
					<input type="number" class="form-control w3-input w3-padding-16 w3-border"  name="jumlah_bayar" onchange="getKembali()" onkeyup="getKembali()" id="jumlah_bayar">
				</div>


				<button type="submit" class="btn btn-primary btn-lg w3-input w3-padding-16 w3-border">Bayar</button>
			</form>




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