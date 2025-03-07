class Clicker {
    presure = 0;
    heat = 0;
    constructor(presure, heat) {
        this.presure = 0;
        this.heat = 0;
    }

    clickPlanet() {
        this.presure++;
        console.log(this.presure);
        console.log(this.heat);
    }
}

let click = new Clicker(0, 0);