<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/all.css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Pegasus</title>
</head>
<body>

<nav class="navbar navbar-expand-lg  navColor" >
  <a class="navbar-brand ml-3 mainColor font-weight-bold" href="#"><span class='mainColor'>&#9812</span> Pegasus</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="menuBtn(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto text-uppercase menu">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="#">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">men</a>
          <a class="dropdown-item" href="#">women</a>
          <a class="dropdown-item" href="#">kids</a>
        </div>
      </li>
      <li class="nav-item"><a href="" class="nav-link  font-weight-bold ">CART</a></li>
    </ul>

    <ul class="navbar-nav regDiv">
      <li class="nav-item  d-none d-lg-block">
        <i class="fas fa-cart-plus cartIcon  mainColor"></i>    
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="#"><button class='signBtn font-weight-bold'> Sign in</button></a>
      </li>
    </ul>

  </div>
</nav>