<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('landing-page/style.css')}}">
  </head>
  <body id="home">
   <nav class="navbar navbar-expand-lg navbar-light"
   style="background-color: #7A553B;" fixed-top>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mutia's Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link" href="#Education">Education</a>
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>
<!-- Section -->
<section class="Herosection">
  <img src="{{vite::asset('resource/image/Mee.jpg')}}" class="img-thumbnail rounded-circle mx-auto d-block" alt="..." width="200px">
  <h1 class="display-4">Mutia Putri Zakiyyah</h1>
  <p class="lead mb-4"> Student | Web Developer</p>
</selection>

<section id="about">
  <div class="container">
   <div class="row text-center mb-3">
    <div class="col">
      <h2> ABOUT ME</h2>
    </div>
   </div>
   <div class="row justify-content-center fs-5 text-center">
    <div class="col-4">
      <p>Hello, Perkenalkan namaku adalah Mutia Putri Zakiyyah orang orang memanggilku Mutia atau Tia. saat ini saya merupakan mahasiswa semester 4 di Telkom University Surabaya dan ikut aktif dalam mengikuti organisasi maupun kepanitiaan </p>
    </div>
    <div class="col-4">
      <p>hobby ku adalah bulutangkis, setiap hari sabtu dan minggu aku meluangkan waktu untuk bermain bulutangkis. Selain bulutangkis aku memiliki hoby lain yaitu memasak, biasanya aku memasak cake, ataupun kue tradisional</p>
    </div>
   </div>
  </div>
</section>
 
<section id="Education">
  <div class="container">
    <div class="row text-center " style="background-color: #DEB887;">
     <div class="col mb-3">
      <h2>PENDIDIKAN</h2>
     </div>
    </div>
  </div>

    <!-- Button trigger modal -->
    <p class="startEnd">Started on Jul 2009</p>
    <button type="button" class="btn btn-danger itemEdu" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      SDN Karangraharja 01
    </button>
    <p class="startEnd">Started on Jul 2016</p>
    <button type="button" class="btn btn-danger itemEdu" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      SMPN 3 Waru
    </button>
    <p class="startEnd">Started on Jul 2019</p>
    <button type="button" class="btn btn-danger itemEdu" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      SMAS Muhammadiyah 1 Taman
    </button>
</section>
<footer class=" text-white" style="background-color:#7A553B; " >
<p> Create by Mutia Putri</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{asset('landing-page/js/script.js')}}"> </script>
</body>
</html>