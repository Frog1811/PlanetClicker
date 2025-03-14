function init(){
    setInterval(counter,100);
    setInterval(Planet,1000);
}
function counter(){
    document.getElementById('presure').innerHTML = `Total Pressure: ${click.presure} nPa`;
    document.getElementById('heat').innerHTML = `Total Heat: ${click.heat} pK`;
    document.getElementById('biomass').innerHTML = `Total Biomass: ${click.biomass} g`;
}

function Planet(){
if(click.presure >= 100000 && click.heat >= 100000 && click.biomass >= 100000){
    document.getElementById("PlanetFire").style.display = "inline";
    document.getElementById("PlanetIce").style.display = "none";
}
if(click.presure >= 1000000 && click.heat >= 1000000 && click.biomass >= 1000000){
    document.getElementById("PlanetEarth").style.display = "inline";
    document.getElementById("PlanetFire").style.display = "none";
}
}
document.addEventListener("DOMContentLoaded", function() {
    init();
    Planet();
  });