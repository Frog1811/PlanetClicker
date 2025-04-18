class Upgrade {
    constructor(name, CPS, type, owned = 0, power = 0, price, priceType,multname , mult = 1, multprice = 100) {
        this.name = name;
        this.CPS = CPS;
        this.type = type;
        this.owned = owned;
        this.power = power;
        this.price = price;
        this.priceType = priceType;
        this.multname = multname;
        this.mult = mult;
        this.multprice = multprice;
    }

    incrementOwned() {
        this.owned++;
        this.power = this.owned * this.CPS;
        this.price = (this.price * 1.5).toFixed(0);
        const elem = document.getElementById(this.name);
        if (elem) {
            elem.innerHTML = `Owned: ${this.owned}<br>Price: ${this.price} ${this.priceType}<br>${this.name}`;
        } else {
            console.warn(`Element with ID '${this.name}' not found.`);
        }
        if (typeof saveUpgrades === "function") saveUpgrades();
    }

    incrementMultiplier() {
            this.mult++;
            console.log(`${this.name} Multiplier: ${this.mult}`);
            const elem = document.getElementById(this.multname);
            if (elem) {
                elem.innerHTML = `Owned: ${this.mult} <br> Price: ${this.multprice} ${this.type} mult<br> ${this.name}`;
            } else {
                console.warn(`Element with ID '${this.multname}' not found.`);
            }
            if (typeof saveUpgrades === "function") saveUpgrades();
    }

    startAutomation() {
        setInterval(() => {
            let generated = this.power * this.mult;
                    clicker[this.type] += generated;
                    document.getElementById(this.type).textContent = `Total ${this.type}: ${clicker[this.type]}`;
        }, 1000);
    }
}



let T1_drill = new Upgrade("T1-drill", 5, "presure", 0, 0, 20, "Heat", "drillmult1", 1, 100);
let T2_drill = new Upgrade("T2-drill", 20, "presure", 0, 0, 200, "Heat" );
let T3_drill = new Upgrade("T3-drill", 60, "presure", 0, 0, 1000, "Heat", "drillmult2", 1, 100);

let T1_heater = new Upgrade("T1-Heater", 5, "heat", 0, 0, 20, "Biomass", "heatmult1", 1, 100);
let T2_heater = new Upgrade("T2-Heater", 20, "heat", 0, 0, 200, "Biomass");
let T3_heater = new Upgrade("T3-Heater", 60, "heat", 0, 0, 1000, "Biomass", "heatmult2", 1, 100);

let SeedGrower = new Upgrade("Seed-Grower", 5, "biomass", 0, 0, 20, "pressure", "biomult1", 1, 100);
let BiomassGen = new Upgrade("Biomass-Generator", 20, "biomass", 0, 0, 200, "pressure");
let TreeSpreader = new Upgrade("Tree-Spreader", 60, "biomass", 0, 0, 1000, "pressure", "biomult2", 1, 100);

// ---------------------------------------------------------------------------------------------------------------------------

function saveUpgrades() {
    const upgrades = { T1_drill, T2_drill, T3_drill, T1_heater, T2_heater, T3_heater, SeedGrower, BiomassGen, TreeSpreader,};
    localStorage.setItem('upgrades', JSON.stringify(upgrades));
}

function loadUpgrades() {
    const savedUpgrades = JSON.parse(localStorage.getItem('upgrades'));
    if (savedUpgrades) {
        Object.assign(T1_drill, savedUpgrades.T1_drill);
        Object.assign(T2_drill, savedUpgrades.T2_drill);
        Object.assign(T3_drill, savedUpgrades.T3_drill);
        Object.assign(T1_heater, savedUpgrades.T1_heater);
        Object.assign(T2_heater, savedUpgrades.T2_heater);
        Object.assign(T3_heater, savedUpgrades.T3_heater);
        Object.assign(SeedGrower, savedUpgrades.SeedGrower);
        Object.assign(BiomassGen, savedUpgrades.BiomassGen);
        Object.assign(TreeSpreader, savedUpgrades.TreeSpreader);

        document.getElementById('T1-drill').innerHTML = `Owned: ${T1_drill.owned} <br> Price: ${T1_drill.price} Heat<br> T1-Drill`;
        document.getElementById('T2-drill').innerHTML = `Owned: ${T2_drill.owned} <br> Price: ${T2_drill.price} Heat<br> T2-Drill`;
        document.getElementById('T3-drill').innerHTML = `Owned: ${T3_drill.owned} <br> Price: ${T3_drill.price} Heat<br> T3-Drill`;

        document.getElementById('T1-Heater').innerHTML = `Owned: ${T1_heater.owned} <br> Price: ${T1_heater.price} Biomass<br> T1-Heater`;
        document.getElementById('T2-Heater').innerHTML = `Owned: ${T2_heater.owned} <br> Price: ${T2_heater.price} Biomass<br> T2-Heater`;
        document.getElementById('T3-Heater').innerHTML = `Owned: ${T3_heater.owned} <br> Price: ${T3_heater.price} Biomass<br> T3-Heater`;

        document.getElementById('Seed-Grower').innerHTML = `Owned: ${SeedGrower.owned} <br> Price: ${SeedGrower.price} Pressure<br> Seed Grower`;
        document.getElementById('Biomass-Generator').innerHTML = `Owned: ${BiomassGen.owned} <br> Price: ${BiomassGen.price} Pressure<br> Biomass Generator`;
        document.getElementById('Tree-Spreader').innerHTML = `Owned: ${TreeSpreader.owned} <br> Price: ${TreeSpreader.price} Pressure<br> Tree Spreader`;

        document.getElementById('drillmult1').innerHTML = `Owned: ${T1_drill.mult} <br> Price: ${T1_drill.multprice} Pressure mult<br> T1-Heater`;
        document.getElementById('heatmult1').innerHTML = `Owned: ${T1_heater.mult} <br> Price: ${T1_heater.multprice} Heat mult<br> T1-Heater`;
        document.getElementById('biomult1').innerHTML = `Owned: ${SeedGrower.mult} <br> Price: ${SeedGrower.multprice} Biomass Mult<br> T1-Heater`;

        document.getElementById('drillmult2').innerHTML = `Owned: ${T3_drill.mult} <br> Price: ${T3_drill.multprice} T3 Drill mult<br> T1-Heater`;
        document.getElementById('heatmult2').innerHTML = `Owned: ${T3_heater.mult} <br> Price: ${T3_heater.multprice} T3 Heat mult<br> T1-Heater`;
        document.getElementById('biomult2').innerHTML = `Owned: ${TreeSpreader.mult} <br> Price: ${TreeSpreader.multprice} Treespreader mult <br> T1-Heater`;
    }
}

function resetGame() {
    // Clear saved data
    localStorage.removeItem('upgrades');

    // Reinitialize upgrades
    T1_drill = new Upgrade("T1-drill", 5, "Pressure", 0, 0, 20, "Heat", 1, 100);
    T2_drill = new Upgrade("T2-drill", 20, "Pressure", 0, 0, 200, "Heat" );
    T3_drill = new Upgrade("T3-drill", 60, "Pressure", 0, 0, 1000, "Heat", 1, 100);

    T1_heater = new Upgrade("T1-Heater", 5, "Heat", 0, 0, 20, "Biomass", 1, 100);
    T2_heater = new Upgrade("T2-Heater", 20, "Heat", 0, 0, 200, "Biomass");
    T3_heater = new Upgrade("T3-Heater", 60, "Heat", 0, 0, 1000, "Biomass", 1, 100);

    SeedGrower = new Upgrade("Seed-Grower", 5, "Biomass", 0, 0, 20, "pressure", 1, 100);
    BiomassGen = new Upgrade("Biomass-Generator", 20, "Biomass", 0, 0, 200, "pressure");
    TreeSpreader = new Upgrade("Tree-Spreader", 60, "Biomass", 0, 0, 1000, "pressure", 1, 100);

    // Reset resource counts
    clicker.presure = 0;
    clicker.heat = 0;
    clicker.biomass = 0;

    // Update UI
    document.getElementById('presure').textContent = `Total Pressure: ${clicker.presure} nPa`;
    document.getElementById('heat').textContent = `Total Heat: ${clicker.heat} pK`;
    document.getElementById('biomass').textContent = `Total Biomass: ${clicker.biomass} g`;

    document.getElementById('T1-drill').innerHTML = `Owned: 0 <br> Price: 20 Heat<br> T1-Drill`;
    document.getElementById('T2-drill').innerHTML = `Owned: 0 <br> Price: 200 Heat<br> T2-Drill`;
    document.getElementById('T3-drill').innerHTML = `Owned: 0 <br> Price: 1000 Heat<br> T3-Drill`;

    document.getElementById('T1-Heater').innerHTML = `Owned: 0 <br> Price: 20 Biomass<br> T1-Heater`;
    document.getElementById('T2-Heater').innerHTML = `Owned: 0 <br> Price: 200 Biomass<br> T2-Heater`;
    document.getElementById('T3-Heater').innerHTML = `Owned: 0 <br> Price: 1000 Biomass<br> T3-Heater`;

    document.getElementById('Seed-Grower').innerHTML = `Owned: 0 <br> Price: 20 Pressure<br> Seed Grower`;
    document.getElementById('Biomass-Generator').innerHTML = `Owned: 0 <br> Price: 200 Pressure<br> Biomass Generator`;
    document.getElementById('Tree-Spreader').innerHTML = `Owned: 0 <br> Price: 1000 Pressure<br> Tree Spreader`;
}

// ---------------------------------------------------------------------------------------------------------------------------

function activateCheat() {
    T1_drill.owned += 100;
    T2_drill.owned += 100;
    T3_drill.owned += 100;
    T1_heater.owned += 100;
    T2_heater.owned += 100;
    T3_heater.owned += 100;
    SeedGrower.owned += 100;
    BiomassGen.owned += 100;
    TreeSpreader.owned += 100;

    T1_drill.power = T1_drill.owned * T1_drill.CPS;
    T2_drill.power = T2_drill.owned * T2_drill.CPS;
    T3_drill.power = T3_drill.owned * T3_drill.CPS;
    T1_heater.power = T1_heater.owned * T1_heater.CPS;
    T2_heater.power = T2_heater.owned * T2_heater.CPS;
    T3_heater.power = T3_heater.owned * T3_heater.CPS;
    SeedGrower.power = SeedGrower.owned * SeedGrower.CPS;
    BiomassGen.power = BiomassGen.owned * BiomassGen.CPS;
    TreeSpreader.power = TreeSpreader.owned * TreeSpreader.CPS;

    document.getElementById('T1-drill').innerHTML = `Owned: ${T1_drill.owned} <br> Price: ${T1_drill.price} Heat<br> T1-Drill`;
    document.getElementById('T2-drill').innerHTML = `Owned: ${T2_drill.owned} <br> Price: ${T2_drill.price} Heat<br> T2-Drill`;
    document.getElementById('T3-drill').innerHTML = `Owned: ${T3_drill.owned} <br> Price: ${T3_drill.price} Heat<br> T3-Drill`;

    document.getElementById('T1-heater').innerHTML = `Owned: ${T1_heater.owned} <br> Price: ${T1_heater.price} Biomass<br> T1-Heater`;
    document.getElementById('T2-heater').innerHTML = `Owned: ${T2_heater.owned} <br> Price: ${T2_heater.price} Biomass<br> T2-Heater`;
    document.getElementById('T3-heater').innerHTML = `Owned: ${T3_heater.owned} <br> Price: ${T3_heater.price} Biomass<br> T3-Heater`;

    document.getElementById('SeedGrower').innerHTML = `Owned: ${SeedGrower.owned} <br> Price: ${SeedGrower.price} Pressure<br> Seed Grower`;
    document.getElementById('BiomassGen').innerHTML = `Owned: ${BiomassGen.owned} <br> Price: ${BiomassGen.price} Pressure<br> Biomass Generator`;
    document.getElementById('TreeSpreader').innerHTML = `Owned: ${TreeSpreader.owned} <br> Price: ${TreeSpreader.price} Pressure<br> Tree Spreader`;

    saveUpgrades();
    alert("Cheat activated! All upgrades increased by 100.");
}

let konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'KeyA', 'KeyB'];
let konamiIndex = 0;

document.addEventListener('keydown', (event) => {
    if (event.code === konamiCode[konamiIndex]) {
        konamiIndex++;
        if (konamiIndex === konamiCode.length) {
            activateCheat();
            konamiIndex = 0;
        }
    } else {
        konamiIndex = 0;
    }
});

// ---------------------------------------------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", () => {
    const resetButton = document.createElement('button');
    resetButton.textContent = "Reset Game (Upgrades)";
    resetButton.onclick = resetGame;
    document.body.appendChild(resetButton);

    loadUpgrades();
    [
        T1_drill, T2_drill, T3_drill,
        T1_heater, T2_heater, T3_heater,
        SeedGrower, BiomassGen, TreeSpreader
    ].forEach(upg => upg.startAutomation());
});

