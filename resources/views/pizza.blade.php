@extends('layouts.auth')
@section('container')
@include('templates.navbar')

<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-color: #f0f0f0;
    font-family: 'Poppins', sans-serif;
  }
</style>


<div style="margin-top:5%; margin-inline-start: 2%; font-size:25px; margin-bottom: 1%;">
    <head>
        Eksplorasi Kenikmatan Italia : <br>Pizza dengan Keju Mozzarella yang Menggoda</br>
    </head>
</div>

<div style="display: flex; align-items: center;">
    <img src="images/pizza.png" alt="ayam" style="width: 2000px; height: 400px; margin-inline-start: 2%; margin-bottom: 20%">
    <div style="margin-left: 2%;">
        <p style="margin-top: -23%; font-size: 25px;">Lihat Tips Lainnya</p>
        <div>
          <img src="images/tipstaco1.png" alt="tips1" width="520px" height="auto">
          <img style="margin-top: 2%;" src="images/tipstaco2.png" alt="tips2" width="520px" height="auto">
          <img style="margin-top: 2%;" src="images/tipstaco3.png" alt="tips3" width="520px" height="auto">
          <img style="margin-top: 2%;" src="images/tipstaco4.png" alt="tips4" width="520px" height="auto">
        </div>
        <p style="margin-top: 5%; font-size: 25px;">
          Share
        </p>
        <div class="image-link">
          <a href="url-ke-tujuan-1">
            <img src="images/panahkirikanan.png" alt="Cinque Terre" width="70" height="90">
          </a>
          <a style="margin-left:2%;" href="url-ke-tujuan-2">
            <img src="images/whatsapp.png" alt="whatsapp" width="70" height="90">
          </a>
          <a style="margin-left:2%;" href="url-ke-tujuan-3">
            <img src="images/facebook.png" alt="facebook" width="70" height="90">
          </a>
          <a style="margin-left:2%;" href="url-ke-tujuan-4">
            <img src="images/twitter.png" alt="twitter" width="70" height="90">
          </a>
          <a style="margin-left:2%;" href="url-ke-tujuan-5">
            <img src="images/email.png" alt="email" width="70" height="90">
          </a>
        </div>
    </div>
  </div>

<style>
  /* Membuat tautan tidak memiliki garis bawah */
  .image-link a {
    text-decoration: none;
  }

  ul {
    font-family: "Poppins-Italic", Helvetica;  font-weight: 400;
  }
</style>

<div>
    <img style="margin-inline-start: 2%; margin-top: -6%;" src="images/eatways2.png" alt="email" width="200" height="70">
  
  <div style="margin-inline-start: 2.5%; margin-top: 1%; text-align: justify; margin-right:2%;">
  <p>
    Eksplorasi Kenikmatan Italia: Pizza dengan Keju Mozzarella yang Menggoda
  </p>
  <p class="paragraph1">
    Pizza, salah satu ikon kuliner Italia yang tak terbantahkan, telah memikat lidah para penikmat makanan di seluruh dunia. 
    Dengan paduan sempurna antara adonan yang renyah, saus tomat yang kaya, dan lapisan keju mozzarella yang melimpah, pizza 
    telah mengambil tempat istimewa di hati semua orang. Mari kita telusuri lebih dalam tentang kenikmatan di balik setiap gigitan 
    pizza dengan keju mozzarella yang menggoda, memahami bagaimana hidangan ini telah menjadi simbol dari kelezatan kuliner Italia.
  </p>

  <p>
    Asal Usul
    </p>
    <p class="paragraph1">
        Pizza memiliki akar yang kuat dalam sejarah kuliner Italia dan diyakini telah ada sejak zaman kuno. 
        Awalnya, pizza adalah makanan yang sederhana, hanya terdiri dari adonan tipis yang dilapisi saus tomat dan keju. 
        Namun, dengan berjalannya waktu, pizza berkembang menjadi hidangan yang lebih beragam dengan tambahan berbagai 
        topping dan keju. Keju mozzarella, dengan kelembutan dan rasa gurihnya, menjadi bintang utama di atas setiap pizza.
    </p>

    <p>
        Pizza dalam Sorotan Dunia
      </p>
      <p class="paragraph1">
        Eksplorasi global pizza dimulai ketika para imigran Italia membawa tradisi kuliner mereka ke Amerika Serikat pada abad ke-19. 
        Pizza dengan cepat meraih popularitas di kalangan masyarakat Amerika dan menjadi salah satu makanan paling disukai di sana. 
        Dari sana, pizza menyebar ke seluruh dunia, menjadi salah satu hidangan internasional yang paling diinginkan dan diakui.
      </p>
      <p class="paragraph2">
        Pizza bukan hanya tentang rasa yang lezat; itu adalah cerita tentang kekayaan budaya, tradisi kuliner, 
        dan kerajinan tangan yang dihargai oleh para penikmatnya. Setiap gigitan pizza membawa kita pada petualangan 
        kuliner yang melintasi batas-batas negara dan budaya, menawarkan pengalaman kuliner yang tak terlupakan. 
        Tidak heran jika pizza dengan keju mozzarella tetap menjadi hidangan favorit di seluruh dunia, menciptakan kenikmatan yang tak tertandingi di setiap meja makan.
</div>

<style>
  .paragraph1 {
    margin-top: 1%;
    font-family: "Poppins-SemiBold", Helvetica;
    font-weight: 500;
  }

  .paragraph2 {
    margin-top: 4%;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 500;
    color: #000000;
  }
</style>

<h1 style="font-weight: 600; color: #000000; font-size: 20px; margin-left: 25px; margin-top: 40px; margin-bottom: -11px;">
Cek kulineran yang lain yuk!
</h1>

<div class="gallery">
  <a target="_blank" href="pizza.png">
    <img src="images/taco.png" alt="pizza" width="600" height="400">
  </a>
  <div class="desc">Taco, makanan yang sederhana namun memiliki kelezatan tak tertandingi!</div>
</div>

<div class="gallery">
  <a target="_blank" href="dimsum.png">
    <img src="images/dimsum.png" alt="dimsum" width="600" height="400">
  </a>
  <div class="desc">Dimsum khas Tiongkok! Yakin gak mau nyoba?</div>
</div>

<div class="gallery">
  <a target="_blank" href="croissant.png">
    <img src="images/croissant.png" alt="croissant" width="600" height="400">
  </a>
  <div class="desc">Tips Memilih Bahan Makanan agar Hasil Masakan-mu Enak!</div>
</div>

<style>
  div.gallery {
    margin: 30px;
    border: 2px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1); 
    float: left;
    width: 380px;
    margin-inline-start: 77px;
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
    transform: translate(275%, -220%);
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