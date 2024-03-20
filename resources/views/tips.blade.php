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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption Slide 1</h5>
        <p>Ini adalah keterangan untuk slide pertama.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption Slide 2</h5>
        <p>Ini adalah keterangan untuk slide kedua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caption Slide 3</h5>
        <p>Ini adalah keterangan untuk slide ketiga.</p>
      </div>
    </div>
  </div>
</div>

<!-- jQuery, Popper.js, dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script untuk mengatur slide otomatis -->
<script>
  $('.carousel').carousel({
    interval: 3000 // Ubah nilai ini untuk mengatur durasi slide (dalam milidetik)
  });
</script>

<h1>Tips dari Eatways ! <span class="lihatlainnya">Lihat tips lainnya!</span></h1>
<p class="tips-eatways"> bingung mau mengolah bahan makanan di rumah? <br>Yuk coba cek tips dari <span style="color: #FF910F; font-style: italic;">EatWays!</span></p>

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
    margin-top: 30px;
    margin-right: 30px;
  
  }

  .tips-eatways {
    text-align: justify;
    margin-left: 25px;
    bottom: 500px;
    color: #00000080;
    font-weight: 600
  }
</style>

<div class="gallery">
  <a target="_blank" href="image6.png">
    <img src="images/image6.png" alt="asahpisau" width="600" height="400">
  </a>
  <div class="desc">Tips mengasah pisau agar awet dan tajam, Wajib paham!</div>
</div>

<div class="gallery">
  <a target="_blank" href="image6(1).png">
    <img src="images/image6(1).png" alt="dapurrumah" width="600" height="400">
  </a>
  <div class="desc">Tips Organisasi Dapur agar Lebih Rapi dan Nyaman di Lihat!</div>
</div>

<div class="gallery">
  <a target="_blank" href="image6(2).png">
    <img src="images/image6(2).png" alt="sayuran" width="600" height="400">
  </a>
  <div class="desc">Tips Memilih Bahan Makanan agar Hasil Masakan-mu Enak!</div>
</div>



<div class="gallery">
  <a target="_blank" href="{{ url('/tips2') }}">
    <img src="images/makanan.png" alt="makanan" width="600" height="400">
  </a>
  <div class="desc">Tips Meningkatkan Rasa Makanan buat dapetin hati mertua</div>
</div>

<div class="gallery">
  <a target="_blank" href="kuehati.png">
    <img src="images/kuehati.png" alt="kuehati" width="600" height="400">
  </a>
  <div class="desc">7 Rekomendasi Makanan dan Minuman untuk Valentine</div>
</div>

<div class="gallery">
  <a target="_blank" href="mentega.png">
    <img src="images/mentega.png" alt="mentega" width="600" height="400">
  </a>
  <div class="desc">Margarine vs Mentega? kira kira mending mana??</div>
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
  margin-bottom: px;
}
</style>

<div style="text-align: center;">
  <button type="button" style="background-color:#FF910F; color: white; border: none; border-radius: 10px; width: 450px; height: 35px; margin-top: 30px;">LIHAT TIPS LAINNYA</button>
</div>

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