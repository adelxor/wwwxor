
<?php
require 'system/php_func/func.class.php';
?>
<title><?php echo $open_DB_Class->servername;  ?>  | Store</title>
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
    <div class="store-item-box-continer">
        <div class="store-item-box">
            <ul class="store">
                <li class="stor-item">
                    <img src="images/store/item-1.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> CPS</h5>
                    <p><i class="fab fa-sellcast"></i> 1000000 For 3 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-2.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 6</h5>
                    <p><i class="fab fa-sellcast"></i> For 40 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-3.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 7</h5>
                    <p><i class="fab fa-sellcast"></i> Sell 150 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-1.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> CPS</h5>
                    <p><i class="fab fa-sellcast"></i> 1000000 For 3 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-3.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 7</h5>
                    <p><i class="fab fa-sellcast"></i> Sell 150 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-1.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> CPS</h5>
                    <p><i class="fab fa-sellcast"></i> 1000000 For 3 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-2.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 6</h5>
                    <p><i class="fab fa-sellcast"></i> For 40 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-3.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 7</h5>
                    <p><i class="fab fa-sellcast"></i> Sell 150 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-1.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> CPS</h5>
                    <p><i class="fab fa-sellcast"></i> 1000000 For 3 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
                <li class="stor-item">
                    <img src="images/store/item-3.png" alt="Store Item">
                    <h5><i class="fab fa-product-hunt"></i> VIP 7</h5>
                    <p><i class="fab fa-sellcast"></i> Sell 150 LE</p>
                    <button><i class="fas fa-shopping-cart"></i> Buy</button>
                </li>
            </ul>
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
            <p>Copyright (c) 2020 Copyright <a href="https://www.youtube.com/channel/UC0qNe21B7K6imvPr8cLc97g">M-G Developer</a> All Rights Reserved.</p>
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
