class Clicker {
    presure = 0;
    heat = 0;
    biomass = 0;

    constructor(presure = 0, heat = 0, biomass = 0) {
        this.presure = presure;
        this.heat = heat;
        this.biomass = biomass;

      
        this.loadState();
    }

    clickPlanet() {
        this.presure++;
        console.log('Pressure:', this.presure);
        console.log('Heat:', this.heat);
        console.log('Biomass:', this.biomass);
        console.log('-----------');

       
        this.saveState();
    }

    saveState() {
        localStorage.setItem('clickerState', JSON.stringify({
            presure: this.presure,
            heat: this.heat,
            biomass: this.biomass
        }));
    }

    loadState() {
        const savedState = localStorage.getItem('clickerState');
        if (savedState) {
            const { presure, heat, biomass } = JSON.parse(savedState);
            this.presure = presure;
            this.heat = heat;
            this.biomass = biomass;
        }
    }

    reset() {
        this.presure = 0;
        this.heat = 0;
        this.biomass = 0;
        this.saveState();
    }
}


let clicker = new Clicker();

