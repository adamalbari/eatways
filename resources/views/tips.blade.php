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
<p class="tips-eatways" mau mengolah bahan makanan di rumah? <br>Yuk coba cek tips dari <span style="color: #FF910F; font-style: italic;">EatWays!</span></p>

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
  <a target="_blank" href="makanan.png">
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
  <img class="imagefooter1" src="images/image9.png" alt="imagefooter">
  <div class="footer-text">Ayo Penuhi Kebutuhan Stok <br> Harian Kamu!</div>
  <button class ="button-footer"> Kunjungi Toko EatWays </button>
</div>

<style>
  .footer {
      display: flex;
      width: 100%;
      height: 300px;
      background: linear-gradient(180deg, rgb(255, 245.4, 15) 0%, rgb(255, 168.3, 0) 100%);
      font-size: 200%;
      text-align: center;
      align-items: center;
      color: white;
      margin-top: 6%;
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