<!DOCTYPE HTML>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="toksedo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .badge{
        margin-left: 3px;
    }
    #logoweb, #logoemail, #logoinsta, #logofb{
      width: 25px;
    }
    a{
      color: black;
    }
    a:hover{
      color: white;
      text-decoration: none;
    }
    a#link-register-password{
        color: blue;
    }
    a#link-register-password:hover{
        color: green;
    }
    .has-feedback .form-control {
    padding-left: 40px;
    }

    .has-feedback .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 40px;
        height: 40px;
        line-height: 50px;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }
    .wrapper{
      display:flex;
      width:100%;
      align-items:stretch;
    }
    #sidebar{
      min-width:250px;
      max-width:250px;
      min-height:100vh;
    }
    #sidebar.active{
      margin-left: -250px;
    }
    a[data-toggle="collapse"]{
      position:relative;
    }
    .dropdown-toggle::after{
      display:block;
      position:absolute;
      top:50%;
      right:20px;
      transform:translateY(-50%);
    }
    @media (max-width:768px){
      #sidebar{
        margin-left:-250px;
      }
      #sidebar.active{
        margin-left:0;
      }
    }
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body{
      font-family: 'Poppins',sans-serif;
    }
    p{
      font-family: 'Poppins', sans-serif;
      font-size: 1.1em;
      font-weight: 300;
      line-height: 1.7em;
      color: #999;
    }
    a, a:hover, a:focus{
      color: inherit;
      text-decoration: none;
      transition: all 0.3s;
    }
    #sidebar{
      background: #7386D5;
      color: #fff;
      transition: all 0.3s;
    }
    #sidebar .sidebar-header{
      padding: 20px;
      background: #6d7fcc;
    }
    #sidebar ul.components{
      padding: 20px 0;
      border-bottom: 1px solid #47748b;
    }
    #sidebar ul p{
      color: #fff;
      padding: 10px;
    }
    #sidebar ul li a{
      padding: 10px;
      font-size: 1.1em;
      display: block;
    }
    #sidebar ul li a:hover{
      color: #7386D5;
      background: #fff;
    }
    #sidebar ul li.active > a,a[aria-expanded="true"]{
      color:#fff;
      background:#6d7fcc;
    }
    ul li a{
      font-size: 0.9em !important;
      padding-left: 30px !important;
      background: #6d7fcc;
    }
    </style>
    <title>Halaman Admin</title>
  </head>
  <body>
        <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">TOKSEDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li id="product" class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>produk">Product</a>
                </li>
                <li id="testimoni" class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>testimoni">Testimoni</a>
                </li>

                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->

              </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
              </form> -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>register">Register</a>
                </li>
              </ul>
            </div>
          </nav>