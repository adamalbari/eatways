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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel.png" class="d-block w-100" alt="carousel.png">
      </div>
      <div class="carousel-item">
        <img src="images/carousel.png" class="d-block w-100" alt="carousel.png">
      </div>
      <div class="carousel-item">
        <img src="images/carousel.png" class="d-block w-100" alt="carousel.png">
      </div>
    </div>
</div>

<div class="resepayam">
    <h1>Resep Ayam Bakar Bumbu Kecap Manis</h1>
    <p>Bahan :</p>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 1 kg ayam (potong sesuai selera, bisa pilih bagian sayap, paha, atau dada)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 5 sendok makan kecap manis</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 sendok makan saus tiram</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 2 sendok makan kecap inggris</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 3 sendok makan madu atau gula kelapa</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 4 siung bawang putih (haluskan)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> 2 cm jahe (haluskan)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Garam secukupnya</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Merica secukupnya</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Air jeruk nipis atau air lemon (1-2 sendok makan)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Daun bawang atau daun ketumbar (untuk taburan, opsional)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div class="box">
  <ul> 
    <li class="textbox1"> Tusuk sate (rendam dalam air agar tidak gosong saat dipanggang)</li>
  </ul>
  <button class="btn-right">Cek Bahan</button>
</div>

<div>
  <p class="text1"> Alat :</p>
  <ul>
    <li class="paragraf1"> Mangkuk besar untuk merendam ayam </li>
    <li class="paragraf1"> Wajan / Penggorengan </li>
    <li class="paragraf1"> Peralatan dapur standar seperti spatula, sendok, dan pisau </li>
  </ul>
</div>

<div>
  <p class="text2"> Langkah - Langkah :</p>
  <ul class="listangka">
    <li class="judul1"> Persiapkan Ayam :</li>
      <ul>
        <li class="jadul1"> Bersihkan ayam dan potong sesuai selera. Lumuri ayam dengan air jeruk nipis atau air lemon, lalu cuci bersih. </li>
      </ul>
    <li class="judul2"> Campur Bumbu Marinasi :</li>
    <ul>
      <li class="jadul2"> Dalam mangkuk besar, campurkan kecap manis, saus tiram, kecap inggris, madu atau gula kelapa, bawang putih, jahe, garam, dan merica. Aduk rata. </li>
    </ul>
    <li class="judul3"> Marinasi Ayam :</li>
    <ul>
      <li class="jadul3"> Rendam potongan ayam dalam campuran bumbu marinasi. Pastikan semua bagian ayam terbalut rata oleh marinasi. Diamkan selama minimal 1-2 jam di dalam lemari es untuk memberikan waktu agar bumbu meresap. </li>
    </ul>
    <li class="judul4"> Tusuk Ayam :</li>
    <ul>
      <li class="jadul4"> Ambil tusuk sate yang telah direndam, tusukkan potongan ayam pada tusuk sate. Sisihkan. </li>
    </ul>
    <li class="judul5"> Panggang Ayam :</li>
    <ul>
      <li class="jadul5"> Panaskan wajan atau panggangan dengan api sedang. Panggang ayam sambil diolesi sisa marinasi untuk memberikan rasa yang lebih kaya. Panggang hingga ayam matang dan kecoklatan di kedua sisi. </li>
    </ul>
    <li class="judul6"> Sajikan :</li>
    <ul>
      <li class="jadul6"> Angkat ayam bakar kecap manis dari wajan atau panggangan. Letakkan di atas piring saji. Taburi dengan potongan daun bawang atau daun ketumbar sebagai hiasan (opsional). </li>
    </ul>
    <li class="judul7"> Sajikan dengan Nasi atau Lainnya :</li>
    <ul>
      <li class="jadul7"> Panaskan wajan atau panggangan dengan api sedang. Panggang ayam sambil diolesi sisa marinasi untuk memberikan rasa yang lebih kaya. Panggang hingga ayam matang dan kecoklatan di kedua sisi. </li>
    </ul>  
  </ul>
</div>

<div class="footer">
  <img class="imagefooter1" src="images/image9.png" alt="imagefooter">
  <div class="footer-text">Ayo Penuhi Kebutuhan Stok <br> Harian Kamu!</div>
  <button class ="button-footer"> Kunjungi Toko EatWays </button>
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

      .footer {
      display: flex;
      width: 100%;
      height: 300px;
      background: linear-gradient(180deg, rgb(255, 245.4, 15) 0%, rgb(255, 168.3, 0) 100%);
      font-size: 200%;
      text-align: center;
      align-items: center;
      color: white;
    }

    .footer-text {
      margin-left: 7%;
    }

    .imagefooter1 {
      width: 30%;
      height: 100%;
    }

    .button-footer {
    margin-top: 13%; /* Menggeser tombol ke bawah */
    padding: 5px 100px; /* Padding tombol */
    font-size: 75%;
    color: #FF910F; /* Warna latar belakang tombol */
    background-color: white; /* Warna teks tombol */
    border: none; /* Menghapus border */
    border-radius: 10px; /* Membuat sudut tombol menjadi melengkung */
    flex-direction: column;
    }
</style>

@endsection