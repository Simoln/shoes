<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          
      }

      .yellowstar {
          background-image: url(image/bg2.png);
          width: 180px;
          height: 32px;
      }
  </style>
    
    <?php 
      include ('shoes_php.php'); 
      include ('shoesimage_php.php'); 
    ?>

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
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent"
            aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link text-light" href="history.php">
                        <b>往期</b>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="home.php">
                        <b>注销</b>
                    </a>
                </li>
                <!-- <li class="nav-item mx-2">
                    <a class="nav-link" href="signup.html">
                        <b>注册</b>
                    </a>
                </li> -->
            </ul>
            <a class="btn navbar-btn btn-secondary mx-2" href="home1.php">主页</a>
        </div>
    </div>
</nav>


  <div class="py-3" id="venue" style="background-image: url(&quot;image/four1.png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12" >
          <div class="carousel-item active">
            <br>
            <br>
            <br>
            <img class="d-block img-fluid mx-auto" src="<?php echo $logo2; ?>" data-holder-rendered="true" width="300">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-4">
          <h2 class="mb-4">外观：</h2>
          <p class="m-0">
              <p class="mb-3">
                  <div class="demo" data-scroe="<?php echo $view2; ?>">
                          <div class="yellowstar"></div>
                      </div>
              </p>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">穿搭：</h2>
          <p class="mb-3">
              <div class="demo" data-scroe="<?php echo $wear2; ?>">
                      <div class="yellowstar"></div>
                  </div>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">实战：</h2>
          <p class="mb-3">
              <div class="demo" data-scroe="<?php echo $fight2; ?>">
                      <div class="yellowstar"></div>
                  </div>
          </p>
        </div>     
      </div>
      <div style="text-align: center;">
            <i  class="fa fa-star d-inline"><a href="<?php echo $offical2; ?>">官网地址</a></i>
            <i class="fa fa-star mx-1 d-inline"><a href="<?php echo $taobao2; ?>">淘宝链接</a></i>
            <i class="fa fa-star mx-1 d-inline"><a href="<?php echo $bili2; ?>">B站评测</a></i></div>
      <div class="row">
        <div class="col-md-12">
          <div class="row my-5 bg-primary animate-in-down">
            <div class="p-4 col-md-6 align-self-center">
              <p class="mb-1">为热爱球鞋的你</p>
              <h2 class="">穿搭简评</h2><h5>by simo</h5>
              <p class="my-3"><?php echo $des2; ?>
              </p>
              
            </div>
            <div class="p-0 col-md-6">
              <div class="carousel slide" data-ride="carousel" id="carousel1">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" src="image/shoes2/hd1.jpeg" atl="first slide">
                    <div class="carousel-caption">
                        <h3>黑色束腿裤</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="image/shoes2/hd2.jpeg" data-holder-rendered="true">
                    <div class="carousel-caption">
                      <h3>高弹PRO</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="image/shoes2/hd3.jpeg" data-holder-rendered="true">
                    <div class="carousel-caption">
                      <h3>长袜</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="image/shoes2/hd4.jpeg" data-holder-rendered="true">
                    <div class="carousel-caption">
                      <h3>短裤短袜</h3>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
</body>

</html>