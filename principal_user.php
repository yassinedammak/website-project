<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal_user.css" media="screen"  />
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <div id="logo_container">
            <img src="download.png" alt="logo">
        </div>
        <div id="center_elements">
            <span id="Acceuil"><a href="./Acceuil.html">Home</a></span>
            <span id="Contact"><a href="./contact.html">Contact</a></span>
            <span id="About"><a href="about.html">About Us</a></span>
        </div>
        <div class="right_elements">
                        <span id="Login"><a href=".\Acceuil.html">Logout</a></span>
            
        </div>
    </nav>
    <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 }
 }
 else if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 ?>
 <div class="message">Bonjour <span class="username"><?php echo $user; ?></span>, vous êtes connecté(e).</div>
 <?php
}
?>
 
 </div>
    <div class="carousel">
        <div class="carousel-container">
          <div class="carousel-item">
            <img src="image1.jpg" alt="Slide 1">
          </div>
          <div class="carousel-item">
            <img src="image2.jpg" alt="Slide 2">
          </div>
          <div class="carousel-item">
            <img src="image3.jpg" alt="Slide 3">
          </div>
        </div>
        <button class="carousel-button carousel-button-prev">&#8249;</button>
        <button class="carousel-button carousel-button-next">&#8250;</button>
      </div>
      <div class="audio-container">
        <audio id="audio-player" controls autoplay>
          <source src=".\687374__oldmansmusic__glimmer-of-hope-freesound-mix.wav" type="audio/wav">
        </audio>
        <button id="stop-button">Stop music</button>
        <br>
        <button id="play-button">Play music</button>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="about.js"></script>
      
      
      
    <div class="Products">
        <div class="OnSale_products">
            <div class="product_card"> 
                <img src="chemise.jpg" alt="chemise">
                <div class="info">
                    <div class="name"> Chemise</div>
                    <div class="price"> 120£</div>
                </div>
            </div>
            <div class="product_card">
                <img src="serwel.jpg" alt="serwel">
                <div class="info">
                    <div class="name"> pantalon</div>
                    <div class="price"> 100£</div>
                </div>
            </div>
            <div class="product_card"><img src="tshirt.jpg" alt="">
                <div class="info">
                    <div class="name"> T-shirt</div>
                    <div class="price"> 50£</div>
                </div>
            </div>
        </div>
        <div class="Chassures">
            <div class="product_card">
                <img src="jkk.jpg" alt="serwel">
                <div class="info">
                    <div class="name"> Black Sneakers</div>
                    <div class="price"> 220£</div>
                </div>
            </div>
            <div class="product_card">
                <a href="./Product.html"><img src="whitesneakers-2048px-4180.webp" alt="white sneackers"></a>
                <div class="info">
                    <div class="name"> White Sneakers</div>
                    <div class="price"> 100£</div>
                </div>
            </div>
                <div class="product_card">
                    <img src="STEVEMADDEN_SHOES_POSESSION_BLACK-TAN_SIDE_grande.webp" alt="Black Tan shoes">
                    <div class="info">
                        <div class="name"> Black Tan Shoes</div>
                        <div class="price"> 150£</div>
                    </div></div>
        </div>
    </div>
    <footer>
        <div >
            <div class="row">
                <a href="https://www.facebook.com" target="_blank"><img  src="facebook .png" alt="Facebook"></a>
                <a href="https://www.instagram.com" target="_blank"><img  src="instagram (3).png" alt="Instagram"></a>
                <a href="https://www.youtube.com" target="_blank"><img  src="youtub.png" alt="YouTube"></a>
                <a href="https://www.twitter.com" target="_blank"><img  src="twitter.png" alt="Twitter"></a>
            </div>
        </div>
  
    
        
        <div class="row">
        <ul>
        <li><a href="./contact.html">Contact us</a></li>
        <li><a href="./PrivacyPolicy.html">Privacy Policy</a></li>
        <li><a href="./termsandconditions.html">Terms & Conditions</a></li>
        </ul>
        </div>
        
        <div class="row">
        Copyright © 2023 - All rights reserved
        </div>
        
    </footer>

<script src="Acceuil.js"></script>

</body>
</html>
