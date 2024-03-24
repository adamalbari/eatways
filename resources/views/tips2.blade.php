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
        Tips Meningkatkan Rasa Makanan buat dapetin hati <br>Mertua</br>
    </head>
</div>

<div style="display: flex; align-items: center;">
  <img src="images/ayamgede.png" alt="ayam" style="width: 44%; height: 50%; margin-inline-start: 2%; margin-bottom: 12%">
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
  <p style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Mengundang mertua untuk makan bersama bukan hanya tentang menyajikan hidangan yang enak tetapi juga memasak dengan cinta dan 
    perhatian. Meningkatkan rasa makanan adalah seni, dan ketika dilakukan dengan tepat, dapat menjadi kunci untuk membuka hati mertua.
    Berikut adalah beberapa tips yang dapat membantu Anda mencapai rasa makanan yang lezat dan memukau hati mertua :
  </p>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Pahami Preferensi Kuliner Mertua :
    <p>
      Sebelum memasak, lakukan riset ringan tentang preferensi kuliner mertua. Apakah mereka lebih suka hidangan pedas, gurih, atau manis? 
      Menyesuaikan rasa makanan dengan selera mereka adalah langkah pertama menuju kesuksesan.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Bermain dengan Kombinasi Rasa :
    <p>
      Eksperimen dengan kombinasi rasa yang menarik. Padukan rasa asam, manis, asin, pahit, dan umami secara seimbang untuk menciptakan hidangan
      yang kaya dan mendalam. Hidangan dengan lapisan rasa yang kompleks dapat meninggalkan kesan mendalam.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Gunakan Bahan-Bahan Berkualitas Tinggi :
    <p>
      Pilih bahan-bahan berkualitas tinggi untuk memastikan hidangan Anda memiliki dasar yang kuat. Daging segar, rempah-rempah berkualitas, 
      dan bahan-bahan segar lainnya akan meningkatkan rasa dan memberikan pengalaman makan yang lebih memuaskan.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Pelajari Teknik Memasak yang Berbeda :
    <p>
      Kuasai berbagai teknik memasak untuk memberikan variasi pada hidangan Anda. Mulai dari memasak dengan api langsung, menggoreng, 
      hingga merebus atau memanggang. Setiap teknik memberikan karakteristik rasa yang berbeda dan memberikan dimensi baru pada masakan Anda.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Jaga Keseimbangan Rasa :
    <p>
      Keseimbangan rasa adalah kunci utama dalam menciptakan hidangan yang enak. Pastikan tidak ada rasa yang dominan atau terlalu mendominasi, 
      sehingga setiap elemen dapat dinikmati dengan harmonis.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Tambahkan Sentuhan Pribadi :
    <p>
      Tambahkan sentuhan pribadi ke dalam hidangan Anda. Bumbui dengan cerita atau inspirasi di balik resep, atau tambahkan elemen unik yang 
      mencerminkan kepribadian Anda. Ini tidak hanya meningkatkan rasa tetapi juga menciptakan pengalaman yang berkesan.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Berfokus pada Presentasi yang Menarik :
    <p>
      Presentasi yang menarik dapat mempengaruhi persepsi terhadap rasa makanan. Susun hidangan dengan estetika yang indah, 
      gunakan piring yang menarik, dan pertimbangkan tata letak yang memikat mata.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Ajak Mertua untuk Terlibat :
    <p>
      Libatkan mertua dalam proses memasak atau biarkan mereka berbagi beberapa resep keluarga. 
      Ini dapat menciptakan ikatan emosional melalui makanan dan memberikan kesempatan untuk berbagi cerita kuliner.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Resapi Proses Memasak dengan Cinta :
    <p>
      Ingatlah bahwa masak dengan cinta adalah kunci utama untuk mendapatkan hati mertua. 
      Sampaikan kecintaan Anda melalui persiapan dan penyajian hidangan. 
      Keberhasilan tidak hanya terletak pada rasa, tetapi juga pada niat yang tulus.
    </p>
  </li>

  <li style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Jadilah Terbuka untuk Masukan :
    <p>
      Terbuka terhadap masukan mertua. Pertanyaan seperti, "Apa yang bisa saya tingkatkan?" atau "Apakah ada preferensi makanan tertentu?" 
      dapat menunjukkan bahwa Anda menghargai pendapat mereka dan ingin membuat pengalaman makan bersama menjadi lebih baik.
    </p>
  </li>

  <p style="margin-inline-start: 2.5%; margin-top:2%; text-align: justify; margin-right:2%;">
    Dengan menerapkan tips ini, Anda dapat menciptakan hidangan yang tidak hanya lezat tetapi juga mampu meraih hati mertua. Menggabungkan rasa dengan sentuhan pribadi dan cinta dalam proses memasak akan menciptakan pengalaman makan yang berkesan dan membangun hubungan yang lebih erat.
  </p>
</div>

  <p style="margin-inline-start: 2.5%; margin-top:4%; text-align: justify; margin-right:2%;">
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