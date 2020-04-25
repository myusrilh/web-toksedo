<!DOCTYPE HTML>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    </style>
    <title>Home Toksedo</title>
  </head>
  <body>
        <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="#">TOKSEDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url();?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li id="product" class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>produk/index">Product</a>
                </li>
                <li id="testimoni" class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>">Testimoni</a>
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
                  <a class="nav-link" href="<?php echo base_url();?>login/index">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>register/index">Register</a>
                </li>
              </ul>
            </div>
          </nav>