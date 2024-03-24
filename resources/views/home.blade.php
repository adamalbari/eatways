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

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image3(1).png" class="d-block w-100" alt="img3(1)">
    </div>
    <div class="carousel-item">
      <img src="images/image3.png" class="d-block w-100" alt="img3">
    </div>
    <div class="carousel-item">
      <img src="images/image4.png" class="d-block w-100" alt="img4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1>
  Rekomendasi Menu Hari Ini
</h1>

<div>
  <a href='{{ url('/pindang') }}' style="text-decoration: none;">
    <img style="margin-inline-start: 11%; margin-top: 1%;" src="images/rekmenu1.png" alt="menu1" width="220px" height="auto">
  </a>
  <a href='{{ url('/resep') }}' style="text-decoration: none;">
    <img style="margin-left: 15px; margin-top: 1%;" src="images/rekmenu2.png" alt="menu2" width="220px" height="auto">
  </a>
  <a href='{{ url('/sateayam') }}' style="text-decoration: none;">
    <img style="margin-left: 15px; margin-top: 1%;" src="images/rekmenu3.png" alt="menu3" width="220px" height="auto">
  </a>
  <a href='{{ url('/nasgor') }}' style="text-decoration: none;">
    <img style="margin-left: 15px; margin-top: 1%;" src="images/rekmenu4.png" alt="menu4" width="220px" height="auto">
  </a>
  <a href='{{ url('/miayam') }}' style="text-decoration: none;">
    <img style="margin-left: 15px; margin-top: 1%;" src="images/rekmenu5.png" alt="menu5" width="220px" height="auto">
  </a>
</div>

<h1>Tips dari Eatways ! <a href="{{ url('/tips') }}"><span class="lihatlainnya">tips lainnya!</span></a></h1>
<p>Bingung mau mengolah bahan makanan di rumah? <br>Yuk coba cek tips dari <span style="color: #FF910F; font-style: italic;">EatWays!</span></p>

<style>
  h1 {
    font-weight: 600;
    color: #000000;
    font-size: 20px;
    margin-left: 25px;
    margin-top: 40px;
  }

  .lihatlainnya {
    text-align: right;
    float: right;
    color: #FF910F;
    margin-top: 40px;
    margin-right: 30px;
  
  }

  p {
    text-align: justify;
    margin-left: 25px;
    bottom: 500px;
    color: #00000080;
    font-weight: 600
  }
</style>

  <div class="gallery">
    <a target="_blank" href='{{ url('/tipspisau') }}'>
      <img src="images/image6.png" alt="asahpisau" width="600" height="400">
    </a>
    <div class="desc">Tips mengasah pisau agar awet dan tajam, Wajib paham!</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" href='{{ url('/tipsdapur') }}'>
      <img src="images/image6(1).png" alt="dapurrumah" width="600" height="400">
    </a>
    <div class="desc">Tips Organisasi Dapur agar Lebih Rapi dan Nyaman di Lihat!</div>
  </div>
  
  <div class="gallery">
    <a target="_blank" href='{{ url('/tipsbahan') }}'>
      <img src="images/image6(2).png" alt="sayuran" width="600" height="400">
    </a>
    <div class="desc">Tips Memilih Bahan Makanan agar Hasil Masakan-mu Enak!</div>
  </div>

  <h1>Kuliner bareng Eatways !</h1>
<p><span style="color: #FF910F; font-style: italic;">EatWays!</span> Punya rekomendasi kulineran yang enak lho! Yuk Kepoin!!</p>

<div class="gallery1">
  <a target="_blank" href="image8(1).jpeg">
    <img style="border-radius: 1%;" src="images/image8(1).jpeg" alt="taco" width="600" height="400">
  </a>
  <div>
    <h2>Kuliner asal <span style="color: #ff910f;">Meksiko!</span> Taco, dengan daging cincang asap!!</h2>
    <p class="taco">Taco, makanan yang begitu sederhana namun memiliki kelezatan  tak tertandingi, telah menjadi ikon kuliner Meksiko...</p>
    <button type="button" class="btn btn-warning" 
    style=
    "background-color: orange; 
    margin-left: 30px;
    padding: 10px 220px; 
    margin-top: 10px;
    color: white;
    margin-inline-start: 7%;" onclick="window.location.href='{{ url('/kuliner2') }}'"
    >Baca Selengkapnya</button>
  </div>
</div>
  <style>
    h2 {
    width: auto;
    font-size: 45px;
    text-align: left;
    padding: 30px;
    }

    .taco {
      font-size: 19px;
      text-align: left;
      margin-inline-start: 30px;
      margin-top: -32px;
    }
  </style>

<div class="gallery2">
  <div>
    <h2>Sushi, Kuliner <span style="color: #ff910f;">Khas Jepang</span> yang paling eksotis!</h2>
    <p class="sushi">Sushi, karya seni kuliner yang berasal dari Jepang, bukan hanya sekedar makanan. Ia adalah kombinasi yang indah dari rasa, tekstur, dan presentasi...</p>
    <button type="button" class="btn btn-warning" 
    style=
    "background-color: orange; 
    margin-left: 30px;
    padding: 10px 220px; 
    margin-top: 10px;
    color: white;
    margin-inline-start: 5%;" onclick="window.location.href='{{ url('/sushi') }}'" 
    >Baca Selengkapnya</button>
  </div>
  <a target="_blank" href="sushi.png">
    <img style="border-radius: 1%;" src="images/sushi.png" alt="taco" width="600" height="400">
  </a>
</div>

  <style>
    h2 {
    width: auto;
    font-size: 45px;
    text-align: left;
    margin-top: 3%;
    padding: 30px;
    }

    .sushi {
      font-size: 19px;
      text-align: left;
      margin-inline-start: 30px;
      margin-top: -32px;
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