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
    <div class="containerss">
          <div class="cover">
            <img style="width: 100%; height: 800px; " src="../images/coveronly.jpg">
            <div class="centered">
            	<a href="../home"><img style="width: 50%;" src="../images/logo/logo1.gif"></a>
            </div>
          </div>
          <div class="join-container">
            <button><a id="download_btn" href="#">Download Game</a></button>
            <button><a href="accounts">Login Account</a></button>
          </div>
    </div>

<div class="php_code_form">
    </div>
    <!-- Start Form SignUp -->
    <aside id="left">
    <article>
      <section class="body">
        <center>
          <tr>
            <td colspan="2" class="panelsurround">
              <div class="joinus-form">
                <h1 style="color:silver;">Join us</h1>
                <p>
                <i class="fas fa-exclamation-triangle"></i>
                 <b>How to Join Us </b><br>
                  <em>
                  Fill in all the data requested in the form respecting the limits.<br>
                  <b>Sign Up Character Limit:</b> <font color="red">05 a 20</font> Digits!<br>
                  <b>Password Character Limit:</b> <font color="red">06 a 26</font> Digits!<br>
                  </em>
                </p>
                <br>
                <form action="" method="post">
                    <br>
                      <?php if (isset($open_class->error)){echo $open_class->error;} ?>
                      <?php if (isset($open_class->succ)){echo $open_class->succ;} ?>

                      <input class="input" name="username" type="text" placeholder="USERNAME ." required/>

                      <input class="input" name="password" type="password" placeholder="PASSWORD ." required/>

                      <input class="input" name="repassword" type="password" placeholder="Confirm PASS... ." required/>

                      <input class="input" name="email" type="text" placeholder="E-MAIL ." required/>

                      <input type='text' class='input' name='rand' AutoComplete='off' placeholder='Recaptcha' required>
                        <br>
                      <input type='image' src='inc/captcha.php' width='75px' class='captchainput'><br>
                     <button type="submit"class="submit" name="join_btn">
                    <i class="fas fa-plus-square"></i>
                    Create Account
                    </button>
                    <br />
                    <a href="recoverpassword"><button type="button" class="btn btn-dark">Forgot Password</button></a>
                    <a href="accounts"><button type="button" class="btn btn-dark">Login Your Account</button></a>
                </form>
              </div>
      </center>
    </center>
  </section>
</article>
</aside>
    <!-- End Form SignUp -->
    <br>
    <br>
    <br>

    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <img style="width:10%;" src="images/logo/logo1.gif" alt="Logo">
          <div class="footer-text">
            <h3>About Server</h3>
            Name Conquer 3D Active game Conquer Online The server <br>
             .
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
          <a href="<?php echo $open_DB_Class->y; ?>"><i class="fab fa-youtube"></i></a>
        </div>
        <center>
        <p>Copyright (c) 2020 Copyright <a href="https://www.youtube.com/@ConquerOnline2023/videos">M-G Developer</a> All Rights Reserved.</p>
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
