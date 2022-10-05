<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>

<!--

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Welcome | PGLife</title>

    <link href="css/home.css" rel="stylesheet"/>

  </head>

  <body>

  <div class="banner-container">
    <h2 class="white pb-3">Happiness per Square Foot</h2>

    <form id="search-form">
        <div class="input-group city-search">
            <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter your city to search for PGs">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>

  <div class="page-container">
    <h1 class="city-heading">
        Major Cities
    </h1>
    <div class="row">
        <div class="city-card-container col-md">
            <a href="property_list.html">
                <div class="city-card rounded-circle">
                    <img src="img/delhi.png" class="city-img">
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
            <a href="property_list.html">
                <div class="city-card rounded-circle">
                    <img src="img/mumbai.png" class="city-img">
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
            <a href="property_list.html">
                <div class="city-card rounded-circle">
                    <img src="img/bangalore.png" class="city-img">
                </div>
            </a>
        </div>

        <div class="city-card-container col-md">
            <a href="property_list.html">
                <div class="city-card rounded-circle">
                    <img src="img/hyderabad.png" class="city-img">
                </div>
            </a>
        </div>
    </div>
</div>

    <div class="searchpane">
      <h2 style = "color: white;">Happiness per square feet</h2>
      <div class="search-box">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter your city to search for PGs">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="desc">
      <h2>Major Cities</h2>
      <div class="city-list">
        <a href="property_detail.html">
          <button class="img-circle img1"></button>
        </a>
        <a href="property_detail.html">
        <button class="img-circle img2">
        </button>
        </a>
        <a href="property_detail.html">
        <button class="img-circle img3">
        </button>
        </a>
        <a href="property_detail.html">
        <button class="img-circle img4">
        </button>
        </a>
      </div>
    </div> 
    
  </body>

</html> -->