<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../images/circle.png">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="home.html">Home</a></li>
          <li role="presentation"><a href="#">About</a></li>
          <li role="presentation"><a href="#">Contact</a></li>
          <?php session_start();
          include 'conn.php';
          //session_destroy();
          if( isset( $_SESSION['username'] )){
              ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><?echo 'Hi! '.$_SESSION['username']; ?><strong class="caret"></strong></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
          <?php }else{ ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                    <div class="dropdown-menu" style="padding: 15px;">
                        <form method="post" action="proses.php" accept-charset="UTF-8">
                            <input style="margin-bottom: 15px;" autocomplete="off" type="text" placeholder="Username" id="username" name="username">
                                <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                                <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                                <label class="string optional" for="user_remember_me"> Remember me</label>
                                <input class="btn btn-primary btn-block" type="submit" name="login" id="sign-in" value="Sign In">
                        </form>
                    </div>
                </li>
          <?php } ?>
        </ul>
        <h3 class="text-muted">CHOERUL AFIFANTO</h3>
      </div>
        
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../images/withLaksita.jpg" alt="First slide">
          </div>
          <div class="item">
            <img src="../images/MKers.jpg" alt="Second slide">
          </div>
          <div class="item">
            <img src="../images/jogja1.JPG" alt="Third slide">
          </div>
          <div class="item">
            <img src="../images/jogja2.JPG" alt="Fourth slide">
          </div>
          <div class="item">
            <img src="../images/Permata.jpg" alt="Fifth slide">
          </div>
          <div class="item">
            <img src="../images/selfiePermata.jpg" alt="Sixth slide">
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->
      
      

      <div class="row ">
        <div class="col-lg-6">
          <div class="container">
                <h4>CELOTEHAN SAYA</h4>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item">Apa Maumu?</a>
                <a href="#" class="list-group-item">Apa Mauku?</a>
                <a href="#" class="list-group-item">Selalu saja menjadi</a>
                <a href="#" class="list-group-item">satu masalah yang tak kunjung henti</a>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="container">
                <h4>DAFTAR PROJECT</h4>
            </div>
            <div class="list-group">
                <a href="tugasJavascript.php" class="list-group-item">[Javascript] Ganti Warna & Perkalian</a>
                <a href="guestBook.php" class="list-group-item">[PHP] Buku Tamu </a>
            </div>
        </div>
      </div>

      <div class="footer">
          <p>&copy; Choerul Afifanto<br><i>12.7077 - 3KS2</i></p>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>