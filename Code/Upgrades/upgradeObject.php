<?php
echo '<script>';
include 'clickerUpgrade.js';
echo '</script>';
echo '<script>';
echo '</script>';
?>
<script>
    let T1_drill = new Upgrade(5, "Pressure", 0, 0, 20);
    let T2_drill = new Upgrade(20, "Pressure", 0, 0, 200);
    let T3_drill = new Upgrade(60, "Pressure", 0, 0, 1000);

    let T1_heater = new Upgrade(5, "Heat", 0, 0, 20);
    let T2_heater = new Upgrade(20, "Heat", 0, 0, 200);
    let T3_heater = new Upgrade(60, "Heat", 0, 0, 1000);

    let SeedGrower = new Upgrade(5, "Biomass", 0, 0, 20);
    let BiomassGen = new Upgrade(20, "Biomass", 0, 0, 200);
    let TreeSpreader = new Upgrade(60, "Biomass", 0, 0, 1000);

    function saveUpgrades() {
        const upgrades = { T1_drill, T2_drill, T3_drill, T1_heater, T2_heater, T3_heater, SeedGrower, BiomassGen, TreeSpreader };
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

            document.getElementById('T1-heater').innerHTML = `Owned: ${T1_heater.owned} <br> Price: ${T1_heater.price} Biomass<br> T1-Heater`;
            document.getElementById('T2-heater').innerHTML = `Owned: ${T2_heater.owned} <br> Price: ${T2_heater.price} Biomass<br> T2-Heater`;
            document.getElementById('T3-heater').innerHTML = `Owned: ${T3_heater.owned} <br> Price: ${T3_heater.price} Biomass<br> T3-Heater`;

            document.getElementById('SeedGrower').innerHTML = `Owned: ${SeedGrower.owned} <br> Price: ${SeedGrower.price} Pressure<br> Seed Grower`;
            document.getElementById('BiomassGen').innerHTML = `Owned: ${BiomassGen.owned} <br> Price: ${BiomassGen.price} Pressure<br> Biomass Generator`;
            document.getElementById('TreeSpreader').innerHTML = `Owned: ${TreeSpreader.owned} <br> Price: ${TreeSpreader.price} Pressure<br> Tree Spreader`;
        }
    }



    function incrementOwnedT1_drill() {
        if (click.heat >= T1_drill.price) {
            T1_drill.owned++;
            T1_drill.power = T1_drill.owned * T1_drill.CPS;
            T1_drill.price = (T1_drill.price * 1.5).toFixed(0);
            document.getElementById('T1-drill').innerHTML = `Owned: ${T1_drill.owned} <br> Price: ${T1_drill.price} Heat<br> T1-Drill`;
            saveUpgrades();
        }
    }

    function incrementOwnedT2_drill() {
        if (click.heat >= T2_drill.price) {
            T2_drill.owned++;
            T2_drill.power = T2_drill.owned * T2_drill.CPS;
            T2_drill.price = (T2_drill.price * 1.5).toFixed(0);
            document.getElementById('T2-drill').innerHTML = `Owned: ${T2_drill.owned} <br> Price: ${T2_drill.price} Heat<br> T2-Drill`;
            saveUpgrades();
        }
    }

    function incrementOwnedT3_drill() {
        if (click.heat >= T3_drill.price) {
            T3_drill.owned++;
            T3_drill.power = T3_drill.owned * T3_drill.CPS;
            T3_drill.price = (T3_drill.price * 1.5).toFixed(0);
            document.getElementById('T3-drill').innerHTML = `Owned: ${T3_drill.owned} <br> Price: ${T3_drill.price} Heat<br> T3-Drill`;
            saveUpgrades();
        }
    }

    function incrementOwnedT1_heater() {
        if (click.biomass >= T1_heater.price) {
            T1_heater.owned++;
            T1_heater.power = T1_heater.owned * T1_heater.CPS;
            T1_heater.price = (T1_heater.price * 1.5).toFixed(0);
            document.getElementById('T1-heater').innerHTML = `Owned: ${T1_heater.owned} <br> Price: ${T1_heater.price} Biomass<br> T1-Heater`;
            saveUpgrades();
        }
    }

    function incrementOwnedT2_heater() {
        if (click.biomass >= T2_heater.price) {
            T2_heater.owned++;
            T2_heater.power = T2_heater.owned * T2_heater.CPS;
            T2_heater.price = (T2_heater.price * 1.5).toFixed(0);
            document.getElementById('T2-heater').innerHTML = `Owned: ${T2_heater.owned} <br> Price: ${T2_heater.price} Biomass<br> T2-Heater`;
            saveUpgrades();
        }
    }

    function incrementOwnedT3_heater() {
        if (click.biomass >= T3_heater.price) {
            T3_heater.owned++;
            T3_heater.power = T3_heater.owned * T3_heater.CPS;
            T3_heater.price = (T3_heater.price * 1.5).toFixed(0);
            document.getElementById('T3-heater').innerHTML = `Owned: ${T3_heater.owned} <br> Price: ${T3_heater.price} Biomass<br> T3-Heater`;
            saveUpgrades();
        }
    }

    function incrementOwnedSeedGrower() {
        if (click.presure >= SeedGrower.price) {
            SeedGrower.owned++;
            SeedGrower.power = SeedGrower.owned * SeedGrower.CPS;
            SeedGrower.price = (SeedGrower.price * 1.5).toFixed(0);
            document.getElementById('SeedGrower').innerHTML = `Owned: ${SeedGrower.owned} <br> Price: ${SeedGrower.price} Pressure<br> Seed Grower`;
            saveUpgrades();
        }
    }

    function incrementOwnedBiomassGen() {
        if (click.presure >= BiomassGen.price) {
            BiomassGen.owned++;
            BiomassGen.power = BiomassGen.owned * BiomassGen.CPS;
            BiomassGen.price = (BiomassGen.price * 1.5).toFixed(0);
            document.getElementById('BiomassGen').innerHTML = `Owned: ${BiomassGen.owned} <br> Price: ${BiomassGen.price} Pressure<br> Biomass Generator`;
            saveUpgrades();
        }
    }

    function incrementOwnedTreeSpreader() {
        if (click.presure >= TreeSpreader.price) {
            TreeSpreader.owned++;
            TreeSpreader.power = TreeSpreader.owned * TreeSpreader.CPS;
            TreeSpreader.price = (TreeSpreader.price * 1.5).toFixed(0);
            document.getElementById('TreeSpreader').innerHTML = `Owned: ${TreeSpreader.owned} <br> Price: ${TreeSpreader.price} Pressure<br> Tree Spreader`;
            saveUpgrades();
        }
    }

    function automatedpressure() {
        setInterval(() => {
            click.presure += T1_drill.power + T2_drill.power + T3_drill.power;
            document.getElementById('presure').textContent = `Total Pressure: ${click.presure} nPa`;
        }, 1000);
    }

    function automatedheat() {
        setInterval(() => {
            click.heat += T1_heater.power + T2_heater.power + T3_heater.power;
            document.getElementById('heat').textContent = `Total Heat: ${click.heat} pK`;
        }, 1000);
    }

    function automatedBio() {
        setInterval(() => {
            click.biomass += SeedGrower.power + BiomassGen.power + TreeSpreader.power;
            document.getElementById('biomass').textContent = `Total Biomass: ${click.biomass} g`;
        }, 1000);
    }

    function resetGame() {
        // Clear saved data
        localStorage.removeItem('upgrades');

        // Reinitialize upgrades
        T1_drill = new Upgrade(5, "Pressure", 0, 0, 20);
        T2_drill = new Upgrade(20, "Pressure", 0, 0, 200);
        T3_drill = new Upgrade(60, "Pressure", 0, 0, 1000);

        T1_heater = new Upgrade(5, "Heat", 0, 0, 20);
        T2_heater = new Upgrade(20, "Heat", 0, 0, 200);
        T3_heater = new Upgrade(60, "Heat", 0, 0, 1000);

        SeedGrower = new Upgrade(5, "Biomass", 0, 0, 20);
        BiomassGen = new Upgrade(20, "Biomass", 0, 0, 200);
        TreeSpreader = new Upgrade(60, "Biomass", 0, 0, 1000);

        // Reset resource counts
        click.presure = 0;
        click.heat = 0;
        click.biomass = 0;

        // Update UI
        document.getElementById('presure').textContent = `Total Pressure: ${click.presure} nPa`;
        document.getElementById('heat').textContent = `Total Heat: ${click.heat} pK`;
        document.getElementById('biomass').textContent = `Total Biomass: ${click.biomass} g`;

        document.getElementById('T1-drill').innerHTML = `Owned: 0 <br> Price: 20 Heat<br> T1-Drill`;
        document.getElementById('T2-drill').innerHTML = `Owned: 0 <br> Price: 200 Heat<br> T2-Drill`;
        document.getElementById('T3-drill').innerHTML = `Owned: 0 <br> Price: 1000 Heat<br> T3-Drill`;

        document.getElementById('T1-heater').innerHTML = `Owned: 0 <br> Price: 20 Biomass<br> T1-Heater`;
        document.getElementById('T2-heater').innerHTML = `Owned: 0 <br> Price: 200 Biomass<br> T2-Heater`;
        document.getElementById('T3-heater').innerHTML = `Owned: 0 <br> Price: 1000 Biomass<br> T3-Heater`;

        document.getElementById('SeedGrower').innerHTML = `Owned: 0 <br> Price: 20 Pressure<br> Seed Grower`;
        document.getElementById('BiomassGen').innerHTML = `Owned: 0 <br> Price: 200 Pressure<br> Biomass Generator`;
        document.getElementById('TreeSpreader').innerHTML = `Owned: 0 <br> Price: 1000 Pressure<br> Tree Spreader`;
    }

    document.addEventListener("DOMContentLoaded", () => {
        const resetButton = document.createElement('button');
        resetButton.textContent = "Reset Game (Upgrades)";
        resetButton.onclick = resetGame;
        document.body.appendChild(resetButton);

        loadUpgrades();
        automatedpressure();
        automatedheat();
        automatedBio();
    });
</script>