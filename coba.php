



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
  <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
    <div class="w3-content">

      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
      <div class="w3-row w3-center w3-border w3-border-dark-grey">
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Salads</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
          <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Starter</div>
        </a>
      </div>

      <!-- pizza -->

      <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
       <h1><b>black meat monsta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">

        <div class="container">
          <div class="card" style="width:150px">
            <img class="card-img-top" src="aset/11.png" alt="Card image" style="width:100%">
          </div>


        </span></h1>
        <p class="w3-text-grey">Sosis Frankfurter, Daging Sapi Asap, Daging Sapi Cincang, Jamur, Keju Mozzarella, Saus Keju, Beef Bits.</p>
        <hr>

        <h1><b>cheese lovers</b> <span class="w3-right w3-tag w3-dark-grey w3-round">


          <div class="container">
            <div class="card" style="width:150px">
              <img class="card-img-top" src="aset/33.png" alt="Card image" style="width:100%">
            </div>

          </span></h1>
          <p class="w3-text-grey">Keju Mozzarella, Keju Parmesan & String Mozzarella</p>
          <hr>

          <h1><b>pizza keju deluxe</b> <span class="w3-tag w3-red w3-round">Hot!</span> <span class="w3-right w3-tag w3-dark-grey w3-round">

            <div class="container">
              <div class="card" style="width:150px">
                <img class="card-img-top" src="aset/22.png" alt="Card image" style="width:100%">
              </div>


            </span></h1>
            <p class="w3-text-grey">100% keju mozarela, dengan saus pizza dengan kaya rasa</p>
            <hr>

            <h1><b>pizza peperoni </b><span class="w3-tag w3-grey w3-round">New</span> <span class="w3-right w3-tag w3-dark-grey w3-round">

              <div class="container">
                <div class="card" style="width:150px">
                  <img class="card-img-top" src="aset/peperoni.png" alt="Card image" style="width:100%">
                </div>

              </span></h1>
              <p class="w3-text-grey">pizza dengan peperoni sapi, dan keju mozarela</p>
              <hr>

              <h1><b>spitza</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">


                <div class="container">
                  <div class="card" style="width:150px">
                    <img class="card-img-top" src="aset/44.png" alt="Card image" style="width:100%">
                  </div>

                </span></h1>
                <p class="w3-text-grey">Keju Mozzarella, Keju Parmesan & String Mozzarella</p>
                <hr>

              </div>




              <!-- eppitazer -->

              <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
                <h1><b>New Orleans Chicken Wings</b> 
                  <span class="w3-tag w3-grey w3-round">Popular</span> 
                  <span class="w3-right w3-tag w3-dark-grey w3-round">

                    <div class="container">
                      <div class="card" style="width:150px">
                        <img class="card-img-top" src="aset/111.png" alt="Card image" style="width:100%">
                      </div>

                    </span></h1>
                    <p class="w3-text-grey">Sayap ayam panggang berbumbu khas New Orleans </p>
                    <hr>

                    <h1><b>Potato Wedges</b> 
                      <span class="w3-right w3-tag w3-dark-grey w3-round">

                        <div class="container">
                          <div class="card" style="width:150px">
                            <img class="card-img-top" src="aset/222.png" alt="Card image" style="width:100%">
                          </div>

                        </span></h1>
                        <p class="w3-text-grey">Kentang panggang dengan bumbu spesial</p>
                        <hr>

                        <h1><b>Chicken Royale</b>
                          <span class="w3-right w3-tag w3-dark-grey w3-round">

                            <div class="container">
                              <div class="card" style="width:150px">
                                <img class="card-img-top" src="aset/333.png" alt="Card image" style="width:100%">
                              </div>

                            </span></h1>
                            <p class="w3-text-grey">Chicken Stick,Chicken Popcorn,Potato Wedges dan Garlic Bread</p>
                            <hr>  
                          </div>




                          <!-- minuman -->
                          <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
                            <h1><b>fruity cola</b> 
                              <span class="w3-tag w3-grey w3-round">musiman</span>
                              <span class="w3-right w3-tag w3-dark-grey w3-round">

                                <div class="container">
                                  <div class="card" style="width:150px">
                                    <img class="card-img-top" src="aset/1111.png" alt="Card image" style="width:100px">
                                  </div>

                                </span>
                              </h1>

                              <p class="w3-text-grey">buah segar, ice cream dan cola-cola</p>
                              <hr>

                              <h1><b>choco chip</b> 
                                <span class="w3-right w3-tag w3-dark-grey w3-round">

                                  <div class="container">
                                    <div class="card" style="width:150px">
                                      <img class="card-img-top" src="aset/2222.png" alt="Card image" style="width:100px;">
                                    </div>

                                  </span>
                                </h1>
                                <p class="w3-text-grey">ice cream dengan chocho chip segar</p>
                                <hr>


                                <h1><b>tripel choco</b>
                                 <span class="w3-right w3-tag w3-dark-grey w3-round">
                                  <div class="container">
                                    <div class="card" style="width:150px">
                                      <img class="card-img-top" src="aset/5555.png" alt="Card image" style="width:100px;">
                                    </div>
                                  </span>
                                </h1>
                                <p class="w3-text-grey">Tiga Scoop Es Krim Coklat, Whipped Cream, Stik Cokelat, Biskuit Coklat, Saus Karamel dan Choco Chips</p>
                              </div><br>

                            </div>
                          </div>

                          <!-- About Container -->
                          <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
                            <div class="w3-content">
                              <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
                              <p>Pizza Restaurant didirikan di blabla oleh Mr. zaenudin di jl.re.martadinata km:06. kami menyajikan makan dengan sepenuh hati dan memperhatikan rassa, kebersihan, dan kepuasan pelanggan. ini adalah cara terbaik untuk bekerja dengan lebih baik dan lebih baik..</p>
                              <p><strong>The Chef?</strong> Mr. zaenudin<img src="aset/2.jpg" style="width:150px" class="w3-circle w3-right" alt="Chef"></p>
                              <p>Kami bangga dengan interior kami..</p>
                              <img src="aset/3.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
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
                          <img src="aset/4.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

                          <!-- Contact -->
                          <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
                            <div class="w3-content">
                              <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
                              <p>Temukan kami di beberapa alamat jl.re martadinataa km:06 atau hubungi kami di 05050515-122330</p>
                              <p><span class="w3-tag">FYI!</span>Kami menawarkan katering layanan lengkap untuk acara apa pun, besar atau kecil. Kami memahami kebutuhan Anda dan kami akan melayani makanan untuk memenuhi kriteria biggerst dari mereka semua, baik tampilan maupun rasa.</p>
                              <p class="w3-xxlarge"><strong>Reserve</strong> pesan sekarang :</p>


                              <!-- pesanan -->

                              <form action="pembayaran.php" method="POST">
                                <h2>nama pesanan :</h2>
                                <select class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="nama_barang">
                                 <option value="">menu :</option>
                                 <option value="">pizza :</option>
                                 <option value="black meat monsta">black meat monsta </option>
                                 <option value="cheese lovers">cheese lovers</option>
                                 <option value="pizza keju deluxe">pizza keju deluxe</option>
                                 <option value="pizza peperoni">pizza peperoni</option>
                                 <option value="spiza">spiza</option>
                                 <option value=""></option>

                                 <option value="">makanan pembuka :</option>
                                 <option value=""></option>
                                 <option value="new oorleans chicken wings">new oorleans chicken wings</option>
                                 <option value="potato wedges">potato wedges</option>
                                 <option value="chicken royale">chicken royale</option>
                                 <option value=""></option>

                                 <option value="">minuman :</option>
                                 <option value=""></option>
                                 <option value="fruit cola">fruit cola</option>
                                 <option value="choco chip">choco chip</option>
                                 <option value="rainbow rain">rainbo rain</option>
                               </select>


                               <div class="form-group">
                                <h2>harga barang :</h2>
                                <label for="hargabarang"></label>
                                <input type="number" class="form-control w3-input w3-padding-16 w3-border" id="hargabarang" placeholder="Harga Barang" name="harga_barang">
                              </div>
                              <div class="form-group">
                                <h2>jumlah barang :</h2>
                                <label for="jumlahbarang"></label>
                                <input type="number" class="form-control w3-input w3-padding-16 w3-border" id="jumlah barang" placeholder="jumlah Barang" name="jumlah_barang">
                              </div>
                              <button type="submit" class="w3-button w3-blue-grey w3-block" name="hitung">bayar</button>

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