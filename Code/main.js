
function init(){
    setInterval(counter,100);
    setInterval(Planet,1000);
    // console.log('hoi');
}
function counter(){
    // console.log('count');
    document.getElementById('presure').innerHTML = `Total Pressure: ${click.presure}`;  
    document.getElementById('heat').innerHTML = `Total Heat: ${click.heat}`;
}

function Planet(){
//  console.log('planet');
if(click.presure >= 10 && click.heat >= 10){
    document.getElementById("PlanetFire").style.display = "inline";
    document.getElementById("PlanetIce").style.display = "none";
    // console.log('maartijn is dik');
}
if(click.presure >= 100 && click.heat >= 100){
    document.getElementById("PlanetEarth").style.display = "inline";
    document.getElementById("PlanetFire").style.display = "none";
    // console.log('maartijn is dik');
}
}
document.addEventListener("DOMContentLoaded", function() {
    // console.log('ready main');
    init();
    Planet();
  });