<?php
require 'system/php_func/func.class.php';
?>
<title><?php echo $open_DB_Class->servername;  ?>  | Join</title>
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


<?php


if (isset($_SESSION['Username'])) {

    ?>
    <div class="containerss">
        <div class="cover">
            <img style="width: 100%; height: 800px; " src="../images/coveronly.jpg">
            <div class="centered">
                <a href="../home"><img style="width: 50%;" src="../images/logo/logo1.gif"></a>
            </div>
        </div>

        <div class="join-container">
            <button id="change_pass"><a href="#">Change Password</a></button>
            <button><a href="system/logout">Logout</a></button>
        </div>

    </div>



    <div class="login-form-box-contianer" id="Change_password_form">
        <div class="login-form-box">
            <?php if (isset($open_class->error)){echo $open_class->error;} ?>
            <?php if (isset($open_class->succ)){echo $open_class->succ;} ?>
            <form class="form-box" action="" method="POST">
                <h1 style="color:silver;">Change Password</h1>
                <br> <br> <br>
                <input class="input" name="old_password" type="password" placeholder="OLD PASSWORD ." required/>
                <br>
                <input class="input" name="new_password" type="password" placeholder="NEW PASSWORD ." required/>
                <br>
                <input class="input" name="confirm_new_password" type="password" placeholder="Confirm PASS... ." required/>
                <br>
                <button type="submit"class="submit" name="change_btn"><i class="fas fa-plus-square" aria-hidden="true"></i> Change Password</button>

            </form>
        </div>
    </div>


    <?php
} else{
    echo "<div class='login_msg '><h2>Please Login <a href='accounts'>Login</a></a></h2></div>";
}
?>



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
            <button><a href="">New Account</a></button>
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
            <a href="<?php echo $open_DB_Class->y; ?>">https://www.youtube.com/@ConquerOnline2023/videos<i class="fab fa-youtube"></i></a>
        </div>
        <center>
            <p>Copyright (c) 2020 Copyright <a href="https://www.youtube.com/@ConquerOnline2023/videos">M-G Developer</a> All Rights Reserved.</p>
        </center>
    </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>

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
    <script>
        var change_pass          = document.getElementById('change_pass'),
            Change_password_form = document.getElementById('Change_password_form');
        change_pass.onclick = function (){
            Change_password_form.style.display='block';
        }
    </script>
</body>

</html>
