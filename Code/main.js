function init(){
    setInterval(counter,100);
    setInterval(Planet,100);
}
function counter(){
    document.getElementById('presure').innerHTML = `Total Pressure: ${clicker.presure} nPa`;
    document.getElementById('heat').innerHTML = `Total Heat: ${clicker.heat} pK`;
    document.getElementById('biomass').innerHTML = `Total Biomass: ${clicker.biomass} g`;
}

function Planet(){
if(clicker.presure >= 100000 && clicker.heat >= 100000){
    document.getElementById("Icemelts").style.display = "inline";
    document.getElementById("PlanetIce").style.display = "none";
}
if(clicker.presure >= 200000 && clicker.heat >= 200000){
    document.getElementById("IceMoreLands").style.display = "inline";
    document.getElementById("Icemelts").style.display = "none";
}
if(clicker.presure >= 300000 && clicker.heat >= 300000){
    document.getElementById("PlanetFire").style.display = "inline";
    document.getElementById("IceMoreLands").style.display = "none";
}
if(clicker.presure >= 400000 && clicker.heat >= 400000){
    document.getElementById("FireBitWater").style.display = "inline";
    document.getElementById("PlanetFire").style.display = "none";
}
if(clicker.presure >= 400000 && clicker.heat >= 400000){
    document.getElementById("FireBitWater").style.display = "inline";
    document.getElementById("PlanetFire").style.display = "none";
}
if(clicker.presure >= 500000 && clicker.heat >= 500000){
    document.getElementById("FireMoreWater").style.display = "inline";
    document.getElementById("FireBitWater").style.display = "none";
}
if(clicker.presure >= 600000 && clicker.heat >= 600000 && clicker.biomass >= 600000){
    document.getElementById("FireWaterLand").style.display = "inline";
    document.getElementById("FireMoreWater").style.display = "none";
}
if(clicker.presure >= 700000 && clicker.heat >= 700000 && clicker.biomass >= 700000){
    document.getElementById("FireWaterLand").style.display = "inline";
    document.getElementById("FireMoreWater").style.display = "none";
}
if(clicker.presure >= 700000 && clicker.heat >= 700000 && clicker.biomass >= 800000){
    document.getElementById("FireEvenMoreLand").style.display = "inline";
    document.getElementById("FireWaterLand").style.display = "none";
}
if(clicker.presure >= 800000 && clicker.heat >= 800000 && clicker.biomass >= 900000){
    document.getElementById("PlanetPlants").style.display = "inline";
    document.getElementById("FireEvenMoreLand").style.display = "none";
}
if(clicker.presure >= 900000 && clicker.heat >= 900000 && clicker.biomass >= 1000000){
    document.getElementById("PlanetEarth").style.display = "inline";
    document.getElementById("PlanetPlants").style.display = "none";
}
}

document.addEventListener("DOMContentLoaded", function() {
    init();
    Planet();
  });