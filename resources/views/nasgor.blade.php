@extends('layouts.auth')
@section('container')
@include('templates.navbar')

<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-color: #f0f0f0;
  }
</style>

<div style="display: flex; justify-content: center; align-items: center;">
    <img src="images/nasgor.jpg" alt="nasgor" style="width: 40%; border-radius: 2%; margin-top: 2%;" />
</div>


<div class="resepayam">
    <h1>Resep Nasi Goreng Telur Mata Sapi</h1>
    <p>Alat & Bahan :</p>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 2 porsi Nasi putih</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 butir telur ayam</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 lbr daun bawang</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Secukupnya kecap</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Secukupnya merica</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Secukupnya garam</li>
  </ul>
</div>

<div class="box">
    <ul> 
      <li class="textbox1"> Secukupnya penyedap rasa</li>
    </ul>
  </div>

<div class="box">
  <ul> 
    <li class="textbox1"> Bawang goreng</li>
  </ul>
</div>

<div class="box">
    <ul> 
      <li class="textbox1"> Minyak Goreng</li>
    </ul>
  </div>

<div class="box">
    <ul> 
      <li class="textbox1"> 3 siung bawang merah</li>
    </ul>
</div>

<div class="box">
    <ul> 
      <li class="textbox1"> 2 siung bawang putih</li>
    </ul>
</div>

<div class="box">
    <ul> 
      <li class="textbox1">4 bh cabe merah keriting</li>
    </ul>
</div>

<div class="box">
    <ul> 
      <li class="textbox1">7 bh cabe rawit (sesuai selera)</li>
    </ul>
</div>


<div>
  <p class="text2"> Langkah - Langkah :</p>
  <ul class="listangka">
    <li class="judul1"> Goreng 2 butir telur ayam kemudian tiriskan :</li>
      <ul>
        <li class="jadul1"> Langkah ini dilakukan untuk memasak telur hingga matang. 
            Telur yang telah digoreng akan digunakan sebagai tambahan pada nasi goreng. 
            Penirisan telur bertujuan untuk menghilangkan kelebihan minyak agar nasi goreng tidak terlalu berminyak. </li>
      </ul>
    <li class="judul2"> Goreng 1 butir telur (orak arik) untuk campuran nasi goreng. Tiriskan :</li>
    <ul>
      <li class="jadul2"> Telur yang digoreng dan diorak-arik akan dicampurkan ke dalam nasi goreng untuk memberikan 
        rasa dan tekstur yang lezat. Orak-arik telur memberikan variasi tekstur yang menarik dalam nasi goreng. </li>
    </ul>
    <li class="judul3"> Tumis bumbu halus sampai harum. Masukkan daun bawang. Aduk. Lalu tambahkan garam, kecap, 
        penyedap rasa, merica secukupnya : </li>
    <ul>
      <li class="jadul3"> Langkah ini merupakan awal proses pembuatan bumbu untuk nasi goreng. Bumbu halus yang umumnya 
        terdiri dari bawang putih, bawang merah, cabai, dan bumbu-bumbu lainnya ditumis hingga harum untuk memberikan 
        aroma dan rasa yang khas. Kemudian, ditambahkan daun bawang dan bumbu-bumbu lainnya seperti garam, kecap, penyedap rasa, 
        dan merica untuk memberikan cita rasa yang lezat pada nasi goreng.</li>
    </ul>
    <li class="judul4"> Masukkan nasi putih. Aduk rata. Campur dengan telur orak-arik. Masak sampai tercampur rata semuanya. Koreksi rasa|:</li>
    <ul>
      <li class="jadul4"> Nasi putih dimasukkan ke dalam tumisan bumbu dan dicampur rata dengan bumbu tersebut. Selanjutnya, 
        telur orak-arik yang telah disiapkan sebelumnya juga dimasukkan dan diaduk hingga tercampur merata dengan nasi. 
        Proses ini bertujuan untuk menggabungkan semua komponen dengan merata sehingga tercipta rasa yang seimbang. 
        Setelah itu, rasa nasi goreng dapat diperiksa dan disesuaikan dengan selera masing-masing. </li>
    </ul>
    <li class="judul5"> Taburi bawang goreng agar lebih nikmat. Siap untuk dihidangkan.</li>
    <ul>
      <li class="jadul5"> Sebagai tambahan, taburi nasi goreng dengan bawang goreng untuk memberikan tekstur renyah dan rasa yang gurih. 
        Setelah itu, nasi goreng siap untuk disajikan dan dinikmati. Jangan lupa untuk berdoa sebelum makan sebagai ungkapan rasa syukur 
        atas hidangan yang disajikan. </li>
    </ul>

    <p style="margin-inline-start: 1%;"> Selamat memasak! 😊😊</p>
  </ul>
</div>

<style>
    .resepayam {
        margin-inline-start: 3%;
        font-size: 10px;
        margin-top: 4%;
    }

    h1 {
        font-size: 20px;
    }

    ul {
      list-style-type: disc;
    }

    p {
      font-size: 20px;
      font-family: "Poppins-Italic", Helvetica;  font-weight: 400;
      margin-top: 1%;
    }

    .box {
    width: 1200px; /* lebar */
    height: 50px; /* tinggi */
    background-color: lightblue; /* warna latar belakang */
    border-radius: 10px;
    margin-inline-start: 9%;
    background-color: #ff970e80;
    }

    .textbox1 {
      position: absolute;
      text-align: center;
      margin-top: 12px;
    }

    .btn-right {
    width: 180px;
    height: 39px;
    float: right; /* Menggeser tombol ke sisi kanan */
    border-radius: 20px;
    background-color: #ff990e;
    margin-top: 5px;
    margin-right: 20px;
    color: white;
    border: none;
    } 

    .text1 {
      margin-inline-start: 3%;
    }

    .paragraf1 {
      margin-inline-start: 3%;
    }

    .listangka {
      list-style-type: decimal;
    }

    .text2 {
      margin-inline-start: 3%;
    }

    .judul1 {
      margin-inline-start: 3%;
    }

    .jadul1 {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul2 {
      margin-inline-start: 3%;
    }

    .jadul2 {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul3 {
      margin-inline-start: 3%;
    }

    .jadul3 {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul4 {
      margin-inline-start: 3%;
    }

    .jadul4 {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul5 {
      margin-inline-start: 3%;
    }

    .jadul5 {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul6 {
      margin-inline-start: 3%;
    }

    .jadul6  {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 1rem;
    }

    .judul7 {
      margin-inline-start: 3%;
    }

    .jadul7  {
      margin-inline-start: 5%;
      list-style-type: disc;
      margin-bottom: 6rem;
    }
</style>

<div class="footer">
    <img class="imagefooter1" src="images/footer1.png" alt="imagefooter" width="100%" height="100%">
    <button class ="button-footer" onclick="window.location.href='{{ url('/belanja') }}'"> Kunjungi Toko EatWays! </button>
  </div>

<style>
  .button-footer {
    margin-bottom:;
    top: 50%;
    left: 50%;
    transform: translate(270%, -220%);
    padding: 10px 20px;
    background-color: #ffffff;
    color: #FF910F;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }
</style>


<footer class="footer-distributed">
<div class="footer-left">

  <img src="images/logoeatways1.png" alt="logo" width="110px" height="80px">

  <p class="footer-links">
    <a href="#" class="link-1">Home</a>
    
    <a href="#">Blog</a>
  
    <a href="#">Pricing</a>
  
    <a href="#">About</a>
    
    <a href="#">Faq</a>
    
    <a href="#">Contact</a>
  </p>

  <p class="footer-company-name">Company Name © 2015</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+1.555.555.5555</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">support@company.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About the company</span>
    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

</div>

</footer>

<style>

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
  margin-top: -2.9%;
  background: black;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box; 
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}
</style>
@endsection