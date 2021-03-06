<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name', 'Sosling')}}</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>

<div class="hero-bg">
<section class="top">
    <header>
       <a href="/beranda" style="color:rgb(0, 0, 0)">Beranda </a> 
       <a href="/pesanan"style="color:rgb(0, 0, 0)">Pesanan</a> 
       <a href="/bantuan" style="color:rgb(0, 0, 0)">Bantuan</a>
       <a href="/posts" style="color:rgb(0, 0, 0)">Daftar Wisata</a>
    </header>

    <h1 style="color: #445B00" font-size: 300%;>SOSLING</h1>
    <h2>Sosial Travelling</h2>
    <h5 style="color: #FBFF31"> Plan Your Travel Now!</h5>

    <div class="btn-group" role="group">
    <a class="button" href="/posts/create" role="button">Tambah Rekomendasi Wisata</a>
    </div>

</div>


<style>
    * {
      box-sizing: border-box;
    }
    
    .box {
      float: left;
      width: 25%;
      padding: 60px;
    }
    
    .text {
  background-color: rgb(248, 248, 248);
  color: black;
  font-size: 14; 
  font-weight: bold;
  margin-top: 0 auto;
  padding: 5px;
  width: 50%;
  text-align: center;
  position: top;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
    }
    
    </style>
    </head>
    <body>
        <section style="text-align: center">
    <h2>Rekomendasi Lokasi Wisata Pantai</h2>
    <p> Sebagai negara kepulauan, Indonesia dianugerahi jutaan lautan dan pantai yang sangat memesona. Kita sebagai orang Indonesia, seharusnya bisa menjelajahi keindahan bahari dalam negeri, sebelum ke luar negeri
        </p>
        </section>
        <div class="clearfix" >
            <div class="box" style="background-image: url('../img/image(1).jpg');  background-size:100% 100%; 
            position: relative">
                <div class="text"><a href="#">Pantai Pasir Putih</a></div>
            </div>
            <div class="box" style="background-image: url('../img/image(5).jpg');  background-size:100% 100%; position: relative" >
                <div class="text"><a href="#">Pantai Kelagian</a></div>
            </div>
            <div class="box" style="background-image: url('../img/image(1).jpg');  background-size:100% 100%; position: relative">
                <div class="text"><a href="#">Pantai Klara Indah</a></div>
            </div>
            <div class="box" style="background-image: url('../img/image(6).jpg');  background-size:100% 100%; position: relative">
                <div class="text"><a href="#">Pantai Kelapa</a></div>
            </div>
          </div>
    
          <section style="text-align: center">
          <h2>Rekomendasi Lokasi Wisata Pegunungan</h2>
    <p>Wisata adalah kegiatan perjalanan atau sebagian dari kegiatan tersebut yang dilakukan secara sukarela serta bersifat sementara untuk menikmati obyek dan daya tarik wisata. Berdasarkan pengertian diatas, Wisata Alam pegunungan memiliki pengertian wisata (obyek wisata) yang daya tarik utamanya adalah bersumber kepada keindahan alam, sumber daya alam dan tata lingkungan yang terletak di lingkungan dataran tinggi. Berikut ini adalah beberapa contoh Keindahan Wisata alam
        </p>
    </section>

        <div class="clearfix">
            <div class="box" style="background-image: url('../img/image(2).jpg');  background-size:100% 100%; 
            position: relative">
           <div class="text"><a href="#">Gunung Bromo</a></div>
            </div>
            <div class="box" style= "background-image: url('../img/image(3).jpg');  background-size:100% 100%; position: relative">
                <div class="text"><a href="#">Gunung Semeru</a></div>
            </div>
            <div class="box" style= "background-image: url('../img/image(2).jpg');  background-size:100% 100%; position: relative">
                <div class="text"><a href="#">Bukit Mokko</a></div>
                </div>
            <div class="box" style= "background-image: url('../img/image(4).jpg');  background-size:100% 100%; position: relative">
                <div class="text"><a href="#">Gunung Bromo</a></div>
            </div>
          </div>
    </body>
</html>