function init(){
    setInterval(counter,100);
    setInterval(Planet,1000);
}
function counter(){
    document.getElementById('presure').innerHTML = `Total Pressure: ${clicker.presure} nPa`;
    document.getElementById('heat').innerHTML = `Total Heat: ${clicker.heat} pK`;
    document.getElementById('biomass').innerHTML = `Total Biomass: ${clicker.biomass} g`;
}

function Planet(){
if(clicker.presure >= 100000 && clicker.heat >= 100000 && clicker.biomass >= 100000){
    document.getElementById("PlanetFire").style.display = "inline";
    document.getElementById("PlanetIce").style.display = "none";
}
if(clicker.presure >= 1000000 && clicker.heat >= 1000000 && clicker.biomass >= 1000000){
    document.getElementById("PlanetEarth").style.display = "inline";
    document.getElementById("PlanetFire").style.display = "none";
}
}
document.addEventListener("DOMContentLoaded", function() {
    init();
    Planet();
  });