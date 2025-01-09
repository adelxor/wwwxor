<?php
require 'system/php_func/func.class.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "icon" href="images/icon/icon.png" type = "image/x-icon">
    <title> Events| A Free Online Game</title>
</head>
<body>
<?php
require 'system/header.php';
?>
<div class="containerss">
    <div class="cover">
        <img style="width: 100%; height: 800px; " src="../images/coveronly.jpg">
        <div class="centered">
            <a href="../home"><img style="width: 50%;" src="../images/logo/logo1.gif"></a>
        </div>
    </div>
</div>
<center>
    <div class="download_table" id="download_table_show">
        <table width="50%">
            <tr>
                <th>Number</th>
                <th>Hosting</th>
                <th>Size</th>
                <th>Name</th>
                <th>download</th>
            </tr>
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

<?php $open_class->New_Events() ?>
<br>
    <br>
        <br>

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
            <button><a href="home">Home</a></button>
            <button><a href="join">New Account</a></button>
            <br>
            <button><a href="#">Download</a></button>
            <button><a href="store">Store</a></button>
            <br>
            <button><a href="#">New Event</a></button>
            <button><a href="ranking">Ranking</a></button>
        </div>
        <div class="social-media">
            <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-facebook-messenger"></i></a>
            <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-discord"></i></a>
            <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-youtube"></i></a>
        </div>
        <center>
            <p>Copyright (c) 2020 Copyright <a href="https://www.facebook.com/mustafa.gamal.5688/">M-G Developer</a> All Rights Reserved.</p>
        </center>
    </div>
</footer>
</body>
    <script>
        var download_table = document.getElementById('download_table'),
            download_table_show = document.getElementById('download_table_show');

        download_table.onclick = function()
        {
            download_table_show.setAttribute("class","download_table_block");
        }
    </script>
</html>
