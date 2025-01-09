
<?php
require 'system/php_func/func.class.php';
?>
<title><?php echo $open_DB_Class->servername;  ?>  | Login Account</title>
<?php
require'system/header.php';
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
<div class="containerss">
    <div class="cover">
        <img style="width: 100%; height: 800px; " src="../images/coveronly.jpg">
        <div class="centered">
            <a href="../home"><img style="width: 50%;" src="../images/logo/logo1.gif"></a>
        </div>
    </div>
    <div class="join-container">
        <button><a id="download_btn" href="#">Download Game</a></button>
        <button><a href="join">Join Now</a></button>
    </div>
</div>



    <div class="login-form-box-contianer">

        <div class="login-form-box">
            <form class="form-box" action="" method="POST">
                <h1 style="color:silver;">Login Account</h1>
                <br> <br> <br>
                <?php if (isset($open_class->error)){echo $open_class->error;} ?>

                <input class="input" name="login_username" type="text" placeholder="USERNAME ." required/>
                <br>
                <input class="input" name="login_password" type="password" placeholder="PASSWORD ." required/>
                <br>
                <button type="submit"class="submit" name="login_btn"><i class="fas fa-plus-square" aria-hidden="true"></i> Login</button>

            </form>
        </div>
    </div>

<br>
<br>
<br>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img style="width:10%;" src="images/logo/logo1.gif" alt="Logo">
            <div class="footer-text">
                <h3>About Server</h3>
                Name Conquer 2D Active 200+ is an unofficial<br>
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
            <button><a href="#">Store</a></button>
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
            <p>Copyright (c) 2020 Copyright <a href="">M-G Developer</a> All Rights Reserved.</p>
        </center>
    </div>
</footer>
<!-- Start Js File By Mustafa Gamal !-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- End Js File By Mustafa Gamal  !-->
<script>
    var download_table = document.getElementById('download_table'),
        download_table_show = document.getElementById('download_table_show');

    download_table.onclick = function()
    {
        download_table_show.setAttribute("class","download_table_block");
    }
    let download_btn = document.getElementById('download_btn');
    download_btn.onclick=function()
    {
        download_table_show.setAttribute("class","download_table_block");

    }
</script>
</body>

</html>
