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
                <img src="img/afbeelding (1).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetPlants">
                <img src="img/afbeelding (3).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="Icemelts">
                <img src="img/afbeelding (4).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="IceMoreLands">
                <img src="img/afbeelding (5).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetFire">
                <img src="img/afbeelding (6).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireBitWater">
                <img src="img/afbeelding (7).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireMoreWater">
                <img src="img/afbeelding (8).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireWaterLand">
                <img src="img/afbeelding (9).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireEvenMoreLand">
                <img src="img/afbeelding(2).png"  onclick="clicker.clickPlanet()" class="planet" alt="" style="display: inline;" id="PlanetIce">
                <img src="img/afbeelding.png"     onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetEarth">
            </div>
            <!-- <div class="progress-bar">
                <div class="progress"></div>
            </div> -->
        </div>
        <div class="stats">
            <div id="heat">Total Heat: 0 pK</div>
            <div id="presure">Total Pressure: 0&nbsp;nPa</div>
            <div id="biomass">Total Biomass: 0 g</div>
        </div>
        <script src="clicker/clicker.js"></script>
        <script src="confetti.js"></script>
    </div>
    <footer>
        <?php
        include 'Upgrades/upgrade.php';
        include 'Shop/shop.php';
        ?>
    </footer>
</body>

</html>