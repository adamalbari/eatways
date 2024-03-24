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
        Tips mengasah pisau agar tajam dan awet, <br>wajib paham!!</br>
    </head>
</div>

<div style="display: flex; align-items: center;">
  <img src="images/pisau.png" alt="pisau" style="width: 44%; height: 50%; margin-inline-start: 2%; margin-bottom: 12%">
  <div style="margin-left: 2%;">
      <p style="margin-top: -3%; font-size: 25px;">Lihat Tips Lainnya</p>
      <ul class="tips">
      <li style="background-color: #ffffff; padding: 10px; color: black; border-radius:10px;">
        Tips memilih bahan makanan mu yang segar agar masakan kamu fresh!
      </li>
      <li style="background-color: #ffffff; padding: 10px; color: black; border-radius:10px;margin-top: 6%;">
        Tips Organisasi Dapur agar Lebih Rapi dan Nyaman di lihat! 
      </li>
      <li style="background-color: #ffffff; padding: 10px; color: black; border-radius:10px;margin-top: 6%;">
        Tips membuat rasa makanan kamu semakin enak!
      </li>
      <li style="background-color: #ffffff; padding: 10px; color: black; border-radius:10px;margin-top: 6%;">
        7 Rekomendasi Makanan dan Minuman untuk Valentine
      </li>
      </ul>
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
  <img style="margin-inline-start: 2%" src="images/eatways2.png" alt="email" width="200" height="70">
</div>

<div class="paragraph">
<p style="margin-inline-start: 2.5%; margin-top: 2%; text-align: justify; margin-right:2%;">
    Mengasah pisau adalah keterampilan penting dalam dunia memasak. Dengan pisau yang tajam, Anda tidak hanya akan memperoleh 
    hasil potongan yang rapi, tetapi juga menjaga keamanan dan efisiensi dalam dapur. Berikut adalah tips-tips 
    penting yang wajib dipahami untuk mengasah pisau Anda dengan baik :
</p>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Gunakan Batu Asah yang Tepat :
    <p>
        Pilihlah batu asah yang sesuai dengan jenis pisau Anda. Batu asah dengan grit kasar digunakan untuk mengasah 
        pisau yang tumpul, sementara grit halus digunakan untuk mengasah dan mengasah rapi pisau yang sudah cukup tajam.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Pelajari Sudut yang Tepat :
    <p>
        Pelajari sudut yang tepat untuk mengasah pisau Anda. Sudut optimal bervariasi tergantung pada jenis pisau yang Anda miliki. 
        Pisau dapur umumnya diasah dengan sudut sekitar 15-20 derajat.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Lakukan Gerakan yang Konsisten :
    <p>
        Lakukan gerakan yang konsisten saat mengasah pisau. Gerakan maju-mundur secara teratur dengan tekanan yang merata 
        akan membantu menciptakan tajam yang konsisten di seluruh mata pisau.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Jaga Konsistensi Tekanan :
    <p>
        Jaga konsistensi tekanan saat mengasah. Tekanan yang konsisten akan menghasilkan pengasahan yang merata dan tajam di seluruh bagian pisau.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Gunakan Sistem Wetstone :
    <p>
        Gunakan sistem wetstone (batu asah basah) untuk hasil yang lebih baik. Sistem ini memungkinkan Anda untuk menyimpan 
        batu asah tetap basah selama proses pengasahan, menghasilkan hasil yang lebih tajam dan lebih halus.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Jaga Kebersihan Pisau :
    <p>
        Jaga kebersihan pisau setelah digunakan dan diasah. Bersihkan pisau dengan lembut dan keringkan dengan handuk 
        kering untuk mencegah karat dan kerusakan akibat kelembaban.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Latihan dan Kesabaran :
    <p>
        Terakhir, latihanlah secara teratur dan bersabarlah. Mengasah pisau adalah keterampilan yang membutuhkan 
        latihan dan kesabaran untuk dikuasai sepenuhnya. Jangan ragu untuk mencoba teknik yang berbeda dan mencari saran dari ahli jika diperlukan.
    </p>
  </li>

  <p style="margin-inline-start: 2.5%; margin-top: 4%; text-align: justify; margin-right:2%;">
    Dengan memahami dan menerapkan tips-tips ini, Anda dapat mengasah pisau Anda dengan efisien dan efektif, 
    menjaga keawetan dan keamanan pisau Anda di dapur. Selamat mengasah dan selamat memasak! 🍴✨
</p>

</div>

  <p style="margin-inline-start: 2.5%; margin-top: 3%; text-align: justify; margin-right:2%;">
    Selamat Mencoba!
  </p>

<style>
  .paragraph {
    list-style-type: decimal;
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