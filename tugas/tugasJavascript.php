<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../images/circle.png">

    <title>Javascript</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    
    <!-- script javascript PROJECT -->
    <script>
            function CreateTable(){
                var body = document.getElementById("stripe");
                var tbl  = document.createElement("table");
                tbl.style.align = "center";
                tbl.style.margin = "auto";

                var baris = ['A','B','C','D'];
                var kolom = ["one", "two", "three"];
                for (var j = 0; j < 4; j++) {
                    var row = document.createElement("tr");
                    for (var i = 0; i < 3; i++) {
                        var cell = document.createElement("td");
                        cell.innerHTML = baris[j]+"-"+kolom[i];
                        cell.setAttribute("style", "padding: 4px 10px");
                        if( j%2 === 1 ){
                            row.style.backgroundColor = "#FFCC33";
                        }else{
                            row.style.backgroundColor = "#CCEEFF";
                        }
                        row.appendChild(cell);
                    }
                    tbl.appendChild(row);
                }
                body.appendChild(tbl);
                tbl.setAttribute("border", "2");
            }

            function tabelPerkalian(){
                var body = document.getElementById("multiplication");
                var tbl  = document.createElement("table");
                tbl.id = "kali";
                tbl.style.align = "center";
                tbl.style.margin = "auto";

                for(var j=0; j<=20; j++){
                    var bar = document.createElement("tr");
                    for(var i=0; i<=20; i++){
                        var kol = document.createElement("td");
                        if( i==0 || j==0 ){
                            if( i==0 && j==0 ) kol.innerHTML = "X";
                            else kol.innerHTML = (i+j);
                            kol.style.backgroundColor = "black";
                            kol.style.color = "white";
                        }
                        else {
                            kol.innerHTML = i*j;
                            kol.style.color = "red";
                        }
                        kol.style.padding = "4px";

                        bar.appendChild(kol);
                    }
                    tbl.appendChild(bar);
                }
                body.appendChild(tbl);
            }

            function cekTabel(ini){
                var tbl = document.getElementById("kali");
                var ki = parseInt(ini.num1.value);
                var ka = parseInt(ini.num2.value);

                if( 0<ki && ki<=20 && 0<ka && ka<=20 ){
                    tbl.rows[ki].cells[ka].style.backgroundColor = "black";
                    tbl.rows[ki].cells[ka].style.color = "white";
                }else{
                    alert("ERROR:\nInput diluar jangkauan.\nPastikan angka yang dimasukkan antara 1-20 !");
                    location.reload();
                }
            }

            function LewatAtas(){
                var hoverx = document.getElementsByTagName("table")[0];
                var teer = hoverx.childNodes;
                for(var i=0; i<teer.length; i++){
                    var warna;
                    teer[i].onmouseover = function(){
                        warna = this.style.backgroundColor;
                        this.setAttribute("style","background-color: yellow; padding: 4px 10px");
                    };
                    teer[i].onmouseout = function(){
                        this.style.backgroundColor = warna;
                    };
                    teer[i].onclick = function(){
                        var tede = this.childNodes;
                        var pesan = "";
                        var ix = this.rowIndex+1;
                        for(var j=0; j<tede.length; j++){
                            pesan += ("Baris ke-"+ix+" Kolom ke-"+(j+1)+" : "+tede[j].innerHTML+"\n");
                        }
                        alert(pesan);
                    };
                }
            }
    </script>
    
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation"><a href="home.html">Home</a></li>
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
        
        <div id="stripe">
            <h2 align="center">Latihan A</h2>
            <script>
                CreateTable();
                LewatAtas();
            </script>
        </div>
        
        <div id="multiplication">
            <h2 align="center">Latihan B</h2>
            <script>tabelPerkalian();</script><br>
            <center><form>
                    <input type="text" name="num1" size="6" autocomplete="off" placeholder="Angka 1" >X
                <input type="text" name="num2" size="6" autocomplete="off" placeholder="Angka 2" >
                <input type="button" value="Cari" onclick="cekTabel(this.form)">
                <input type="button" value="Reset" onclick="location.reload()">
            </form></center>
        </div>
      
      <br><br>
      <div class="row">
         <div class="container">
             <h4>DAFTAR PROJECT LAINNYA</h4>
         </div>
         <div class="list-group">
             <a href="tugasJavascript.php" class="list-group-item active">[Javascript] Ganti Warna & Perkalian</a>
             <a href="guestBook.php" class="list-group-item">[PHP] Buku Tamu </a>
         </div>
      </div>
      

      <div class="footer">
          <p>&copy; Choerul Afifanto<br><i>12.7077 - 3KS2</i></p>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>