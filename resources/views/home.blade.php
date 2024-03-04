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

<div class="label">
  <div class="text-wrapper">Rekomendasi Menu Hari Ini</div>
</div>

<div class="frame">
      <div class="group">
        <div class="menu">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="image" src="images/ikanpindang.png" />
            <div class="text-wrapper">Ikan Pindang Bumbu Geprek</div>
            <div class="bookmark">
              <div class="overlap-group">
                <div class="div">1</div>
              </div>
            </div>
            <div class="rating">
              <div class="text-wrapper-2">(4.5)</div>
              <img class="img" src="images/star.png" />
            </div>
            <div class="time">
              <div class="text-wrapper-2">15 Mnt</div>
              <img class="img" src="images/clock.png" />
            </div>
          </div>
        </div>
        <div class="overlap-wrapper">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="image" src="images/ayammanis.png" />
            <div class="text-wrapper">Ayam Bakar Kecap Manis</div>
            <div class="bookmark">
              <div class="div-wrapper">
                <div class="div">2</div>
            </div>
            </div>
            <div class="rating-2">
              <div class="text-wrapper-2">(4.7)</div>
              <img class="img" src="images/star.png" />
            </div>
            <div class="time-2">
              <div class="text-wrapper-2">45 Mnt</div>
              <img class="img" src="images/clock.png" />
            </div>
          </div>
        </div>
        <div class="overlap-group-wrapper">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="image" src="images/miayam.png" />
            <div class="text-wrapper">Mie Ayam Jawa Sederhana</div>
            <div class="bookmark">
              <div class="overlap-group-2">
                <div class="div">5</div>
              </div>
            </div>
            <div class="rating">
              <div class="text-wrapper-2">(4.5)</div>
              <img class="img" src="images/star.png" />
            </div>
            <div class="time">
              <div class="text-wrapper-2">15 Mnt</div>
              <img class="img" src="images/clock.png" />
            </div>
          </div>
        </div>
        <div class="menu-2">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="image" src="images/sate.png" />
            <div class="text-wrapper">Sate Ayam Bumbu Kacang</div>
            <div class="bookmark">
              <div class="overlap-group-3">
                <div class="div">3</div>
              </div>
            </div>
            <div class="rating-3">
              <div class="text-wrapper-2">(4.3)</div>
              <img class="img" src="images/star.png" />
            </div>
            <div class="time-3">
              <div class="text-wrapper-2">20 Mnt</div>
              <img class="img" src="images/clock.png" />
            </div>
          </div>
        </div>
        <div class="menu-3">
          <div class="overlap">
            <div class="rectangle"></div>
            <img class="image" src="images/nasgortelor.png" />
            <p class="text-wrapper">Nasi Goreng Telor Mata Sapi</p>
            <div class="bookmark">
              <div class="overlap-group-4">
                <div class="div">4</div>
              </div>
            </div>
            <div class="rating">
              <div class="text-wrapper-2">(4.5)</div>
              <img class="img" src="images/star.png" />
            </div>
            <div class="time-3">
              <div class="text-wrapper-2">20 Mnt</div>
              <img class="img" src="images/clock.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

<h1>Tips dari Eatways ! <span class="lihatlainnya">Lihat tips lainnya!</span></h1>
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

  <h1>Kuliner bareng Eatways !</h1>
<p><span style="color: #FF910F; font-style: italic;">EatWays!</span> Punya rekomendasi kulineran yang enak lho! Yuk Kepoin!!</p>

<div class="gallery1">
  <a target="_blank" href="image8(1).jpeg">
    <img src="images/image8(1).jpeg" alt="taco" width="600" height="400">
  </a>
  <div>
    <h2>Kuliner asal <span style="color: #ff910f;">Meksiko!</span> Taco, dengan daging cincang asap!!</h2>
    <p class="taco">Taco, makanan yang begitu sederhana namun memiliki kelezatan  tak tertandingi, telah menjadi ikon kuliner Meksiko...</p>
    <button type="button" class="btn btn-warning" 
    style=
    "background-color: orange; 
    margin-left: 30px;
    padding: 10px 246px; 
    margin-top: 10px;
    color: white" 
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
  <a target="_blank" href="sushi.png">
    <img src="images/sushi.png" alt="taco" width="600" height="400">
  </a>
  <div>
    <h2>Sushi, Kuliner <span style="color: #ff910f;">Khas Jepang</span> yang paling eksotis!</h2>
    <p class="sushi">Sushi, karya seni kuliner yang berasal dari Jepang, bukan hanya sekedar makanan. Ia adalah kombinasi yang indah dari rasa, tekstur, dan presentasi...</p>
    <button type="button" class="btn btn-warning" 
    style=
    "background-color: orange; 
    margin-left: 30px;
    padding: 10px 246px; 
    margin-top: 10px;
    color: white" 
    >Baca Selengkapnya</button>
  </div>
</div>
  <style>
    h2 {
    width: auto;
    font-size: 45px;
    text-align: left;
    margin-top: 1px;
    padding: 30px;
    }

    .sushi {
      font-size: 19px;
      text-align: left;
      margin-inline-start: 30px;
      margin-top: -32px;
    }
  </style>

<div class="container">
  <img src="images/footermemek.png" alt="image9.png" class="footermemek">
</div>

<style>

  .container {
    background-color: 
  }

  .footermemek {
    position: relative;
    max-width: 101%;
    right: 9%;
  }
</style>
@endsection   