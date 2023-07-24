<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{url('user_interface/assets/css/style.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">

    <title>Heritage Temples</title>
  </head>
  <body>


<!-- ------------------------Header-Start--------------------->
     <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
  <div class="container">
        <div class="logo">
          <a href="#">
          <span>
        <img src="{{url('user_interface/assets/image/Heritage-Temple-Logo-WhiteNew.svg')}}">
        </span>
    
        </a>
        </div>

        <div class="d-flex">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

           <span class="icn">
            <a href="#" id="pop1btn" class="cd-popup-trigger" onclick="openpopup('pop1')"><i class="fa-solid fa-magnifying-glass yellow"></i></a>
          </span>

        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/pune_projects')}}">Pune Project</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="#">Journal</a>
        </li>

        <li class="nav-item none">
          <a class="nav-link" href="#" id="pop1btn" class="cd-popup-trigger" onclick="openpopup('pop1')"><i class="fa-solid fa-magnifying-glass yellow"></i></a>
        </li>

      </ul>
    </div>
    
</nav>
      </section><!-- --------------END header -->



<!-- -----------------------banner-start----------------------->

<section class="banner">
  <div class="bnr-con">
    <span>
      <img src="{{url('user_interface/assets/image/Temple-and-Patronage-2-Frame1-3.webp')}}">
    </span>

    <div class="bnr-txt v-align">
      <p class="sb-hdng">Documenting, Mapping & Conserving</p>
      <h1 class="hdng">The Heritage Temples of India</h1>
      <div class="bnr-btn">
        <a href="#">Explore</a>
      </div>
    </div>
  </div>
</section>
