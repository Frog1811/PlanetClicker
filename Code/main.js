
function init(){
    setInterval(counter,100);
    // console.log('hoi');
}
function counter(){
    // console.log('count');
    document.getElementById('presure').innerHTML = `Total Pressure: ${click.presure}`;  
    document.getElementById('heat').innerHTML = `Total Heat: ${click.heat}`;
}

document.addEventListener("DOMContentLoaded", function() {
    // console.log('ready main');
    init();
  });