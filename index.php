<!DOCTYPE html>
<?php include 'js/connection.php'  ?>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <title>index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="jquery/jquery.js"></script>
        <script src="js/conf.js"></script>
        <link media="all" type="text/css" rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
       <form class="form-inline" action="index.php" method="POST">
          <div class="container">
            <h2 class="value">
              Welcome to our website !
            </h2>
            <div id="content">
                <h1>Ru-Jak</h1>
                <img src="image/bus.png" class="icon"/>
            </div>
          </div>
          <footer>
              <ul>
                <div class="first-content">
                    <li>
                      <span align="center" style="margin-top:-20px; padding-bottom:10px;">RUTE<hr width="auto "></span>
                        <div id='category-menu'>
                          <ul class='ul-category'>                                                  
                            <li><a>Cileungsi - Bandung</a>
                              <ul class='ul-subcategory'>                                                       
                                <?php 
                                  $query_select = "select * from jurusan";
                                  $query_sql = mysql_query($query_select);
                                  $rows = array();
                                  while($row = mysql_fetch_array($query_sql))
                                  $rows[] = $row;                             
      //get data on database
                                  foreach($rows as $direction){ 
                                  echo"<li style='border-bottom:2px solid black;width:550px;'>";
                                  echo '<img src=image/angkot.png style=width:150px;float:left;margin-top:-10px;><div       style=margin-top:25px;margin-right:-25px;>'.$direction["cilengsi-bandung"].'<BR />Cileungsi - Bandung</div>';
                                  echo '<button type="submit" name="btn" class="button">rute</button></li><li></li>';}
                                ?>
                              </ul>
                            </li><ol></ol>
                            <li><a>Angkot 69</a>
                              <ul class='ul-subcategory'>
                                <?php 
                                  foreach($rows as $direction){
                                    echo '<li>'.$direction['angkot69'].'</li><li></li>';}
                                ?>
                              </ul>
                            </li>
                          </ul>
                        </div>
                    </li>
                </div>
                <div class="second-content">
                    <li>
                      <span align="center"style="margin-top:-20px; padding-bottom:10px;">PETA GOOGLE MAPS<hr></span>
                      <div class="container-narrow">
                        <p class='lead'>
                          Rute  Google maps
                        </p>                        
                        <div class='span8'>
                          <?php
                            if(isset($_POST['btn'])) {
                              $saddr = "cipeucang";
                              $daddr = "jonggol";
                              include('direction/direction.php');
                          }?>
                        </div>
                      </div>
                    </li>
                </div>
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list --></li>
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list --></li>
              </ul>
            </div>
         </footer>
        </form>
    </body>
</html>
 