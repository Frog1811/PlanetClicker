function init(){
    Planet();
    setInterval(Planet, 100);
}   

function Planet(){
    console.log('rick dik red');
if(clicker.presure >= 100000 && clicker.heat >= 100000){
    document.getElementById("Icemelts3").style.display = "inline";
    document.getElementById("PlanetIce2").style.display = "none";
}
if(clicker.presure >= 200000 && clicker.heat >= 200000){
    document.getElementById("IceMoreLands4").style.display = "inline";
    document.getElementById("Icemelts3").style.display = "none";
}
if(clicker.presure >= 300000 && clicker.heat >= 300000){
    document.getElementById("PlanetFire5").style.display = "inline";
    document.getElementById("IceMoreLands4").style.display = "none";
}
if(clicker.presure >= 400000 && clicker.heat >= 400000){
    document.getElementById("FireBitWater6").style.display = "inline";
    document.getElementById("PlanetFire5").style.display = "none";
}
if(clicker.presure >= 500000 && clicker.heat >= 500000){
    document.getElementById("FireMoreWater7").style.display = "inline";
    document.getElementById("FireBitWater6").style.display = "none";
}
if(clicker.presure >= 600000 && clicker.heat >= 600000){
    document.getElementById("FireWaterLand8").style.display = "inline";
    document.getElementById("FireMoreWater7").style.display = "none";
}
if(clicker.presure >= 700000 && clicker.heat >= 700000 && clicker.biomass >= 700000){
    document.getElementById("FireEvenMoreLand9").style.display = "inline";
    document.getElementById("FireWaterLand8").style.display = "none";
}
if(clicker.presure >= 800000 && clicker.heat >= 800000 && clicker.biomass >= 800000){
    document.getElementById("PlanetPlants1").style.display = "inline";
    document.getElementById("FireEvenMoreLand9").style.display = "none";
}
if(clicker.presure >= 900000 && clicker.heat >= 900000 && clicker.biomass >= 900000){
    document.getElementById("PlanetEarthM").style.display = "inline";
    document.getElementById("PlanetPlants1").style.display = "none";
}
}
document.addEventListener("DOMContentLoaded", function() {
    init();
    console.log('DOM fully loaded and parsed');
  });