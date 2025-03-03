
function init(){
    setInterval(counter,1000);
    // console.log('hoi');
}
function counter(){
    // console.log('count');
    document.getElementById('presure').innerHTML = `Total Pressure: ${click.presure}`;  
}

document.addEventListener("DOMContentLoaded", function() {
    // console.log('ready main');
    init();
  });