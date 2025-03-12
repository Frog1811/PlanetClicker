<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Game</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <script src="clicker/clicker.js"></script>
    <script src="main.js"></script>
    <script src="event.js"></script>
    <div class="title">Planet Clicker</div>
    <div class="container">
        <div class="menu">
            <button onclick="pressureMultiplierT3()">yuutgtyt mail</button>
            <button>Specific mail</button>
            <button>Specific mail</button>
            <button>Send Heat rocket - x2 mult</button>
            <button onclick="pressureMultiplier()">Send Pressure rocket - x2 mult</button>
            <button>Send Plants rocket - x2 mult</button>
        </div>
        <div class="game-area">
            <div class="planet">
                <img src="img/afbeelding(1).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetPlants1">
                <img src="img/afbeelding(3).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="Icemelts3">
                <img src="img/afbeelding(4).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="IceMoreLands4">
                <img src="img/afbeelding(5).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetFire5">
                <img src="img/afbeelding(6).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireBitWater6">
                <img src="img/afbeelding(7).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireMoreWater7">
                <img src="img/afbeelding(8).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireWaterLand8">
                <img src="img/afbeelding(9).png" onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="FireEvenMoreLand9">
                <img src="img/afbeelding(2).png"  onclick="clicker.clickPlanet()" class="planet" alt="" style="display: inline;" id="PlanetIce2">
                <img src="img/afbeelding.png"     onclick="clicker.clickPlanet()" class="planet" alt="" style="display: none;"   id="PlanetEarthM">
            </div>
        </div>
        <div class="stats">
            <div id="heat">Total Heat: 0 pK</div>
            <div id="presure">Total Pressure: 0 nPa</div>
            <div id="biomass">Total Biomass: 0 g</div>
            <button onclick="clicker.reset()">reset</button>
        </div>
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