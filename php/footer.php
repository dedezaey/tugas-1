



<!DOCTYPE html>
<html>
<title>pizza zaey</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/pitza.css">
<link rel="stylesheet" href="../css/bootstrap.css">

<style>
  body, html {height: 100%}
  body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
  .menu {display: none}

}
</style>
<body>


  <!-- About Container -->
  <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
    <div class="w3-content">
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
      <p>Pizza Restaurant didirikan di blabla oleh Mr. zaenudin di jl.re.martadinata km:06. kami menyajikan makan dengan sepenuh hati dan memperhatikan rassa, kebersihan, dan kepuasan pelanggan. ini adalah cara terbaik untuk bekerja dengan lebih baik dan lebih baik..</p>
      <p><strong>The Chef?</strong> Mr. zaenudin<img src="../aset/2.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
      <p>Kami bangga dengan interior kami..</p>
      <img src="../aset/3.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
      <h1><b>jam operasional</b></h1>

      <div class="w3-row">
        <div class="w3-col s6">
          <p>senin 10:00 - 24:00</p>
          <p>selasa 10.00 - 24.00</p>
          <p>rabu 10:00 - 24:00</p>
        </div>
        <div class="w3-col s6">
          <p>kamis 10:00 - 12:00</p>
          <p>jumat tutup</p>
          <p>sabtu, minggu 08:00 - 21:00</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Image of location/map -->
  <img src="../aset/4.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

  <!-- Contact -->
  <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
    <div class="w3-content">
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
      <p>Temukan kami di beberapa alamat jl.re martadinataa km:06 atau hubungi kami di 05050515-122330</p>
      <p><span class="w3-tag">FYI!</span>Kami menawarkan katering layanan lengkap untuk acara apa pun, besar atau kecil. Kami memahami kebutuhan Anda dan kami akan melayani makanan untuk memenuhi kriteria biggerst dari mereka semua, baik tampilan maupun rasa.</p>
      <p class="w3-xxlarge"><strong>Reserve</strong> pesan sekarang :</p>




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