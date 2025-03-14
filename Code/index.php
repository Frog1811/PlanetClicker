<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Game</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="title">Planet Clicker</div>
    <div class="container">
        <div class="menu">
            <button>Specific mail</button>
            <button>Specific mail</button>
            <button>Specific mail</button>
            <button>Send Heat rocket - x2 mult</button>
            <button>Send Pressure rocket - x2 mult</button>
            <button>Send Plants rocket - x2 mult</button>
        </div>
        <div class="game-area">
            <div class="planet">
                <img src="img/afbeelding (1).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: block;">
                <img src="img/afbeelding (3).png" class="planet" alt="" style="display: none;">
                <!-- <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (4).png" class="planet" alt="">
                <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (5).png" class="planet" alt="">
                <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (6).png" class="planet" alt="">
            <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (7).png" class="planet" alt="" >    
            <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (8).png" class="planet" alt="" >    
            <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding (9).png" class="planet" alt="" >    
            <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding(2).png" class="planet" alt="" >    
            <img src="<?php global $baseurl; echo $baseurl;?>img/afbeelding.png" class="planet" alt="" >     -->
            </div>
            <div class="progress-bar"><div class="progress"></div></div>
        </div>
        <div class="stats">
            <div id="heat">Total Heat: 0 pK</div>
            <div id="presure">Total Pressure: 0  nPa</div>
            <div id="biomass">Total Biomass: 0 g</div>  
        </div>
        <?php
        include 'clicker/clicker.php';
        ?>
    </div>
    <footer>
        <?php
        include 'Upgrades/upgrade.php';
        include 'Shop/shop.php';
        ?>
    </footer>     
</body>
</html>