<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <title>三双鞋 - Three pairs of shoes</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="elegant.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <style type="text/css">

    img {
    transition:transform 2s;
    }
    img:hover{
    transform: scale(1.2,1.2);
    } 

    .demo {
      background-image: url(image/bg1.png);
      width: 180px;
      height: 32px;
      margin-top: 10px;
      margin: auto;
    }

    .yellowstar {
      background-image: url(image/bg2.png);
      width: 180px;
      height: 32px;
    }
  </style>
  
  <?php include ('shoes_php.php'); ?>

</head>

<body onload="showStars()">
  <script type="text/javascript">
    function showStars() {
      var domLength = $(".demo").length;
      for (var f = 0; f < domLength; f++) {
        var result = parseInt($(".demo").eq(f).attr("data-scroe")); //获取对应的分值。
        var yellowstarWidth = 0;
        yellowstarWidth = 16 * result + (Math.ceil(result / 2) - 1) * 5; //计算宽度
        $(".yellowstar").eq(f).css("width", yellowstarWidth);
      }
    }
  </script>
  <!-- Navbar -->
  <nav class="navbar-expand-md navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <!-- <li class="nav-item mx-3">
            <a class="nav-link text-light" href="history.php">
              <b>往期</b>
            </a>
          </li> -->
          <li class="nav-item mx-2">
            <a class="nav-link" href="login.html">
              <b>登录</b>
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="signup.html">
              <b>注册</b>
            </a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="home.php">主页</a>
      </div>
    </div>
  </nav>
 
  
  <div class="py-5 text-center" id="menu" style="background-image: url(&quot;image/four1.png&quot;);">
    <div class="container">
      <div class="row p-4 my-5 bg-primary animate-in-down">
        <div class="col-md-12">
          <h2 class="mt-3">三双鞋 <br>Three pairs of shoes</h2>
          <p class="mb-5">第二期</p>
          <div class="row">
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo $image1; ?>">
              <p class="lead text-muted mb-1">
                <?php echo $name1; ?></p>
              <h5 class="text-dark">
                <b></b>
              </h5>
              <p class="mb-3">
              </p>
              <div>推荐指数： <div class="demo" data-scroe="<?php echo $level1; ?>">
                  <div class="yellowstar"></div>
                </div>
              </div>
              <p></p>
              <div class="col-md-12 p-4">
                <h2 class="mb-4"><?php echo $price1; ?></h2>
                <p><?php echo $brand1; ?> <br>
                </p>
              </div>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo $image2; ?>">
              <p class="lead text-muted mb-1"><?php echo $name2; ?></p>
              <h5 class="text-dark">
                <b></b>
              </h5>
              <p class="mb-3">
              </p>
              <div>推荐指数： <div class="demo" data-scroe="<?php echo $level2; ?>">
                  <div class="yellowstar"></div>
                </div>
              </div>
              <p></p>
              <div class="col-md-12 p-4">
                <h2 class="mb-4"><?php echo $price2; ?></h2>
                <p> <?php echo $brand2; ?> <br>
                </p>
              </div>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="<?php echo $image3; ?>">
              <p class="lead text-muted mb-1"><?php echo $name3; ?> </p>
              <h5 class="text-dark">
                <b></b>
              </h5>
              <p class="mb-3">
              </p>
              <div>推荐指数： <div class="demo" data-scroe="<?php echo $level3; ?>">
                  <div class="yellowstar"></div>
                </div>
              </div>
              <p></p>
              <div class="col-md-12 p-4">
                <h2 class="mb-4"><?php echo $price3; ?></h2>
                <p><?php echo $brand3; ?> <br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
</body>

</html>