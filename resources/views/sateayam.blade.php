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
  <img src="images/sate.jpg" alt="pindang" style="width: 40%; border-radius: 2%; margin-top: 2%;" />
</div>

<div class="resepayam">
    <h1>Resep Sate Ayam Bumbu Kacang</h1>
    <p>Bahan :</p>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 250 gr daging ayam bagian dada
    </li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 100 gr kacang tanah</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 200 ml air</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 sdm kecap manis</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 siung bawang putih</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 2 siung bawang merah</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 buah kemiri yg di sangrai</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 10 buah cabe rawit</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 1/2 sdt garam</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 1 sdm gula merah</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Secukupnya bawang merah mentah Irisan</li>
  </ul>
  
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Secukupnya cabe rawit Irisan</li>
  </ul>
  
</div>

<div>
  <p class="text1"> Alat :</p>
  <ul>
    <li class="paragraf1"> Panggangan atau grill </li>
    <li class="paragraf1"> Tusukan sate </li>
    <li class="paragraf1"> Blender atau penggiling </li>
    <li class="paragraf1"> Panci atau wajan </li>
    <li class="paragraf1"> Pisau dapur </li>
    <li class="paragraf1"> Piring atau mangkuk </li>
    <li class="paragraf1"> Sendok atau spatula </li>
    <li class="paragraf1"> Cobek dan ulekan </li>
  </ul>
</div>

<div>
  <p class="text2"> Langkah - Langkah :</p>
  <ul class="listangka">
    <li class="judul1"> Bersihkan dan potong dadu daging ayam... Lalu lumuri dengan garam sebanyak 1 sdt dan perasan jeruk nipis... 
        Diam kan sebentar biar meresap.</li>
    <li class="judul2"> 
        Sangrai kacang tanah sampai matang
      </li>
    <li class="judul3"> Uleg/blender kacang sampai halus dan berikan gula merah sebanyak 1 sdm.</li>
    <li class="judul4"> Uleg bumbu halus, sama daun jeruknya,</li>
    <li class="judul5"> Panaskan minyak secukupnya, tumis bumbu halus.</li>
    <li class="judul6"> Setelah itu masukan air. Masak sampai mendidih</li>
    <li class="judul7"> Setelah mendidih masukkan kacang yang telah di uleg tadi</li>
    <li class="judul8"> Masukan 3 sdm kecap, lalu masak sampai kental dg api kecil. Koreksi rasa... Lalu angkat.</li>
    <li class="judul9"> Ambil 3 sdm saus kacang tadi masukan kedalam mangkok. Tambahkan 1 sdm kecap dan 1 sdm air. Aduk sampai rata</li>
    <li class="judul10"> Tusuk daging ke lidi khusus utk sate</li>
    <li class="judul11"> Setelah itu celupkan bumbu kacang yang 3sdm td ke daging yg telah d tusuk. 
      Diamkan didalam kulkas agar bumbu meresap kurang lebih 1 jam.</li>
    <li class="judul12"> Panggang sate sampai mateng.</li>
    <li class="judul13"> Sate siap untuk dinikmati</li>

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

    .judul8  {
      margin-inline-start: 3%;
    }

    .judul9 {
      margin-inline-start: 3%;
    }

    .judul10 {
      margin-inline-start: 3%;
    }

    .judul11 {
      margin-inline-start: 3%;
    }

    .judul12 {
      margin-inline-start: 3%;
    }

    .judul13  {
      margin-inline-start: 3%;
    }
</style>

<div class="footer">
  <img class="imagefooter1" src="images/footer1.png" alt="imagefooter" width="100%" height="100%">
  <button class ="button-footer"> Kunjungi Toko EatWays! </button>
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