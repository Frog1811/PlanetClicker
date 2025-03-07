class Clicker {
    presure = -100;
    heat = 0;
    biomass = 0;
    constructor(presure, heat, biomass) {
        this.presure = 0;
        this.heat = 0;
        this.biomass = 0;
    }

    clickPlanet() {
        this.presure++;
        console.log('Pressure:', this.presure);
        console.log('Heat:', this.heat);
        console.log('Biomass:', this.biomass);
        console.log('-----------');
    }
}

let click = new Clicker(-100, 0, 0);