<?php
require 'system/php_func/func.class.php';

require 'inc/optionrank.php';
?>
<!-- Mustafa Gamal Developer -->
<title><?php echo $open_DB_Class->servername;  ?> | A Free Online Game</title>
<?php
  include("system/header.php");
  ?>
<center>
  <div class="download_table" id="download_table_show">
    <table width="50%">
      <tr>
        <th>Number</th>
        <th>Hosting</th>
        <th>Size</th>
        <th>Name</th>
        <th>download</th>
         <tr>
        <td>1</td>
        <td>Media Fire</td>
        <td>2.5: GB</td>
        <td>Client</td>
        <td><a href="<?php echo $open_DB_Class->C_MediaFire; ?>" target="_blank"><i class="fas fa-file-download"></i> Dwonload</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Media Fire</td>
        <td>120 : MB</td>
        <td>Patch</td>
        <td><a href="<?php echo $open_DB_Class->P_MediaFire; ?>" target="_blank"><i class="fas fa-file-download"></i> Dwonload</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Mega</td>
        <td>2.5: GB</td>
        <td>Client</td>
        <td><a href="<?php echo $open_DB_Class->C_Mega; ?>" target="_blank"><i class="fas fa-file-download"></i> Dwonload</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Mega</td>
        <td>120 : MB</td>
        <td>Patch</td>
        <td><a href="<?php echo $open_DB_Class->P_Mega; ?>" target="_blank"><i class="fas fa-file-download"></i> Dwonload</a></td>
      </tr>
    </table>
  </div>
</center>
<div class="containerss">
  <div class="cover">
    <img style="width: 100%; height: 800px; " src="images/coveronly.jpg">
    <div class="centered">
      <a href="home"><img style="width: 50%;" src="images/logo/logo1.gif"></a>
    </div>
  </div>
  <div class="join-container">
    <button><a href="join">Join Now</a></button>
    <button><a href="accounts">Login Account</a></button>
  </div>
</div>
<center>
    <div class="news">
        <h2>Top Game</h2>
    </div>
      <?php
        $open_class->rank_func();
      ?>


</center>

    <!-- End Conquer Points Rank -->
<center>
    <div class="centershow">
      <div class="databtn">
        <button type="button" onclick="showall()" class="btn btn-dark">All</button>
        <button type="button" onclick="status()" class="btn btn-dark">Status </button>
      </div>
      <div id="showalldata">
        <br>
        <center>
          <h5>For You</h5>
        </center>
        <div class='line'>
          <hr>
        </div>
        <br>
        <p>Game Version is [ ONLINE ]</p>
        <a href='<?php echo $open_DB_Class->P_MediaFire; ?>' target="_blank">
        <button type='button' class='btn btn-danger'>Download [ Patch ] </a> </button>
        <br><br>
        <a href='<?php echo $open_DB_Class->C_MediaFire; ?>' target="_blank"> <button type='button' class='btn btn-danger'>Download [ Client ] </a> </button>
        <br> <br>
        <a href='#'>Program For Solve Problrm Game</a>
        <br> <br>
        <center>
          <h5 class="ServerName"><?php echo $open_DB_Class->servername;  ?> | A Free Online Game</h5>
        </center>
      </div>
    </div>
  </div>

    <br> <br>
    <br> <br>
    <br> <br>

  <div class="news">
    <h2>Class</h2>
  </div>
  <br> <br>
</center>
<!-- Start Js File By Mustafa Gamal !-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- End Js File By Mustafa Gamal  !-->

<div class="sidenav" style="margin-top: -250px;">
  <a href="https://www.youtube.com/@ConquerOnline2023/videos" target="_blank" title="Treasure Mall" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2019/icons/treasuremall01.png?v1" alt="Treasure Mall"></a>
  <a href="https://www.youtube.com/@ConquerOnline2023/videos1" target="_blank" title="Event Center" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2019/icons/eventcenter.png?v1" alt="Event Center"></a>
  <a href="https://www.youtube.com/@ConquerOnline2023/videos" target="_blank" title="FACEBOOK" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2019/icons/Facebook.png?v1" alt="FACEBOOK"></a>
  <a href="https://www.youtube.com/@ConquerOnline2023/videos" target="_blank" title="SVIP Privilege" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2019/icons/svips.png?v1" alt="SVIP Privilege"></a>
  <a href="https://www.youtube.com/@ConquerOnline2023/videos" target="_blank" title="Official Staff" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2019/icons/officialstaff.png?v1" alt="Official Staff"></a>
  <a href="https://www.youtube.com/@ConquerOnline2023/videos" target="_blank" title="Suppliers Wanted" class="enterpoker"><img src="https://hw.99.com/uploads/co/images/2020/icon/suppliers_wanted.png?v1" alt="Suppliers Wanted"></a>
</div>
<script>
  function showall()
  {
  	document.getElementById('showalldata').innerHTML="<br><center><h5>For You</h5></center> <div class='line'><hr></div><br><p>Game Version is [ ONLINE ]</p><a href='https://www.youtube.com/channel/UC0qNe21B7K6imvPr8cLc97g'> <button type='button' class='btn btn-danger'>Download [ Patch ] </a> </button><br><br><a href='https://www.youtube.com/channel/UC0qNe21B7K6imvPr8cLc97g'> <button type='button' class='btn btn-danger'>Download [ Client ] </a> </button> <br> <br> <a href='https://www.youtube.com/channel/UC0qNe21B7K6imvPr8cLc97g'>Program For Solve Problrm Game</a> <br><br> <center> <h5><?php echo $open_DB_Class->servername;?> | A Free Online Game </h5></center>";
  }
  
  
  function status()
  {
  	document.getElementById('showalldata').innerHTML="<br><center><h5> <?php echo $open_DB_Class->servername; ?> | Server Information </h5> <div class='line'><hr></div></center> <p> Server Status : Online</p> <?php echo '<p>  Online Version</p>';  echo '<p> Like TQ Game</p> '; ?> <br><br> <center> <h5><?php echo $open_DB_Class->servername;?> | A Free Online Game </h5></center> ";
  }
  

  
  var download_table = document.getElementById('download_table'),
      download_table_show = document.getElementById('download_table_show');
  
      download_table.onclick = function()
      {
        download_table_show.setAttribute("class","download_table_block");
      }
  
  
  
</script>
<center>
  <div class="footerclassbox">
    <div class="classboximg">
      <div>
        <img style="width:20%;" onclick="class1()" src="/images/classbox/classn.png">
        <img style="width:20%;" onclick="class2()" src="/images/classbox/classw.png">
        <br>
        <img style="width:20%;" onclick="class3()" src="/images/classbox/classm.png">
        <img style="width:20%;" onclick="class4()" src="/images/classbox/classa.png">
        <div id="class1information"></div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img style="width:10%;" src="images/logo/logo1.gif">
        <div class="footer-text">
          <h3>About Server</h3>
          Name Conquer 3D Active 200+ is an unofficial<br>
          Game Server for the popular multiplayer <br>
          game Conquer Online The server is developed <br>
          using C# with .NET Framework 4.5 .
        </div>
      </div>
      <div class="quick-link">
        <button><a href="#">Home</a></button>
        <button><a href="join">New Account</a></button>
        <br>
        <button><a href="#">Download</a></button>
        <button><a href="store">Store</a></button>
        <br>
        <button><a href="events">New Event</a></button>
        <button><a href="ranking">Ranking</a></button>
      </div>
      <div class="social-media">
        <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-facebook-f"></i></a>
        <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-facebook-messenger"></i></a>
        <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-discord"></i></a>
        <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-youtube"></i></a>
      </div>
      <center>
        <p>Copyright (c) 2020 Copyright <a href="https://www.youtube.com/@ConquerOnline2023/videos/">M-G Developer</a> All Rights Reserved.</p>
      </center>
    </div>
  </footer>
</center>
<script>
  function class1()
  {
  	document.getElementById('class1information').innerHTML="<div class='class1information'>Ninja<br><span>Character OF Conquer Ninja - Skills!</span><hr><p>Twofold Blades<img src='images/skills/n1.jpg'></p>     <p>Toxic Fog<img src='images/skills/n2.jpg'></p>   <p>Poison Star<img src='images/skills/n3.jpg'></p>   <p>Archer Bane<img src='images/skills/n4.jpg'></p> <p>Fatal Strike<img src='images/skills/n5.jpg'></p>    <p>Shuriken Vortex<img src='images/skills/n6.jpg'></p>   </div>";
  }
  function class2()
  {
  	document.getElementById('class1information').innerHTML="<div class='class1information'>Warrior<br><span>Character OF Conquer Warrior - Skills!</span><hr>  <p>Accuracy<img src='images/skills/w1.jpg'></p>   <p>Shield<img src='images/skills/w2.jpg'></p>  <p>Superman<img src='images/skills/w3.jpg'></p>   <p>Roar<img src='images/skills/w4.jpg'></p>   <p>Flying Moon<img src='images/skills/w5.jpg'></p>  <p>Shield Block<img src='images/skills/w6.jpg'></p> </div>";
  }
  function class3()
  {
  	document.getElementById('class1information').innerHTML="<div class='class1information'>Monk<br><span>Character OF Conquer Monk - Skills!</span><hr>   <p>Triple Attack<img src='images/skills/m1.jpg'></p>  <p>Oblivion<img src='images/skills/m2.jpg'></p>   <p>Whirlwind Kick<img src='images/skills/m3.jpg'></p>   <p>Radiant Palm	<img src='images/skills/m4.jpg'></p>   <p>Soul Shackle<img src='images/skills/m5.jpg'></p>   <p>Serenity<img src='images/skills/m6.jpg'></p> </div>";
  }
  function class4()
  {
  	document.getElementById('class1information').innerHTML="<div class='class1information'>Archer<br><span>Character OF Conquer Archer - Skills!</span><hr>  <p>Scatter<img src='images/skills/a1.jpg'></p>  <p>Rapid Fire<img src='images/skills/a2.jpg'></p> <p>Elementary Fly<img src='images/skills/a5.jpg'></p> <p>Intensify<img src='images/skills/a3.jpg'></p>  <p>Senior Fly<img src='images/skills/a4.jpg'></p>    <p>Arrow Rain<img src='images/skills/a6.jpg'></p></div>";
  }
  
</script>
<audio controls autoplay style="display: none;">
  <source src="/images/icon/Song/song.mp3" type="audio/mpeg">
</audio>
</body>
</html>