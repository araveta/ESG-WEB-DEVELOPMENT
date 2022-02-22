<?php include "connectdb.php"; 
if($page=='Home'){$class1='active';$class2='';$class3='';$class4='';}
elseif($page=='Gallery'){$class1='';$class2='active';$class3='';$class4='';}
elseif($page=='Info Lomba'){$class1='';$class2='';$class3='active';$class4='';}
elseif($page=='Kegiatan'){$class1='';$class2='';$class3='';$class4='active';}
else{$class1='';$class2='';$class3='';$class4='';}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >

    <title>ERP Study Group - <?= $page; ?></title>
  </head>
  <!---Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="keprof erp.png" alt="" width="86" height="43" style="margin-left: 0.8cm;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end p-2" id="navbarNav">
          <ul class="navbar-nav" > 
            <li class="nav-item <?= $class1; ?>">
              <a class="nav-link" aria-current="page" href="index.php" style="margin-left: 1cm;margin-right: 0.25cm;"><b>Home</b></a>
            </li>
            <li class="nav-item <?= $class2; ?>">
              <a class="nav-link" href="#" style="margin-left: 0.5cm;margin-right: 0.25cm;"><b>Gallery</b></a>
            </li>
            <li class="nav-item <?= $class3; ?>">
              <a class="nav-link" href="#" style="margin-left: 0.25cm;margin-right: 0.25cm;"><b>Info Lomba</b></a>
            </li>
            <li class="nav-item <?= $class4; ?>">
              <a class="nav-link" href="#" style="margin-left: 0.25cm;margin-right: 0.3cm;"><b>Kegiatan</b></a>
            </li>
          </ul>
          <a href="contact_us.php" class="btn-contact" ><b>Contact Us</b>
          </a>
        </div>
      </div>
    </nav>
    
    
  <body style="padding-top:70px; padding-bottom:70px">

