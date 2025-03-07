<?php
echo '<script>';
include 'clickerUpgrade.js';
echo '</script>';
echo '<script>';
echo '</script>';
?>
<script>
    let T1_drill = new Upgrade(5, "Pressure", 0, 0, 0);
    let T2_drill = new Upgrade(10, "Pressure", 0, 0, 0);
    let T3_drill = new Upgrade(15, "Pressure", 0, 0, 0);

    let T1_heater = new Upgrade(5, "Heat", 0, 0, 0);
    let T2_heater = new Upgrade(10, "Heat", 0, 0, 0);
    let T3_heater = new Upgrade(15, "Heat", 0, 0, 0);

    let SeedGrower = new Upgrade(5, "Biomass", 0, 0, 0);
    let BiomassGen = new Upgrade(10, "Biomass", 0, 0, 0);
    let TreeSpreader = new Upgrade(15, "Biomass", 0, 0, 0);



    function setBasePrice() {
        T1_drill.price = 5;
        T2_drill.price = 10;
        T3_drill.price = 15;

        T1_heater.price = 5;
        T2_heater.price = 10;
        T3_heater.price = 15;

        SeedGrower.price = 5;
        BiomassGen.price = 10;
        TreeSpreader.price = 15;
    }

    function incrementOwnedT1_drill() {
        if (click.heat >= T1_drill.price) {
            T1_drill.owned++;
            T1_drill.power = T1_drill.owned * T1_drill.CPS;
            T1_drill.price = (T1_drill.price * 1.5).toFixed(0);
            document.getElementById('T1-drill').innerHTML = `Owned: ${T1_drill.owned} <br> price ${T1_drill.price}<br> T1-Drill`;
        }
    }

    function incrementOwnedT2_drill() {
        if (click.heat >= T2_drill.price) {
            T2_drill.owned++;
            T2_drill.power = T2_drill.owned * T2_drill.CPS;
            T2_drill.price = (T2_drill.price * 1.5).toFixed(0);
            document.getElementById('T2-drill').innerHTML = `Owned: ${T2_drill.owned} <br> price ${T2_drill.price}<br> T2-Drill`;
        }
    }

    function incrementOwnedT3_drill() {
        if (click.heat >= T3_drill.price) {
            T3_drill.owned++;
            T3_drill.power = T3_drill.owned * T3_drill.CPS;
            T3_drill.price = (T3_drill.price * 1.5).toFixed(0);
            document.getElementById('T3-drill').innerHTML = `Owned: ${T3_drill.owned} <br> price ${T3_drill.price}<br> T3-Drill`;
        }
    }

    function incrementOwnedT1_heater() {
        if (click.presure >= T1_heater.price) {
            T1_heater.owned++;
            T1_heater.power = T1_heater.owned * T1_heater.CPS;
            T1_heater.price = (T1_heater.price * 1.5).toFixed(0);
            document.getElementById('T1-heater').innerHTML = `Owned: ${T1_heater.owned} <br> price ${T1_heater.price}<br> T1-Heater`;
        }
    }

    function incrementOwnedT2_heater() {
        if (click.presure >= T2_heater.price) {
            T2_heater.owned++;
            T2_heater.power = T2_heater.owned * T2_heater.CPS;
            T2_heater.price = (T2_heater.price * 1.5).toFixed(0);
            document.getElementById('T2-heater').innerHTML = `Owned: ${T2_heater.owned} <br> price ${T2_heater.price}<br> T2-Heater`;
        }
    }

    function incrementOwnedT3_heater() {
        if (click.presure >= T3_heater.price) {
            T3_heater.owned++;
            T3_heater.power = T3_heater.owned * T3_heater.CPS;
            T3_heater.price = (T3_heater.price * 1.5).toFixed(0);
            document.getElementById('T3-heater').innerHTML = `Owned: ${T3_heater.owned} <br> price ${T3_heater.price}<br> T3-Heater`;
        }
    }

    function incrementOwnedSeedGrower() {
        if (click.heat >= SeedGrower.price) {
            SeedGrower.owned++;
            SeedGrower.power = SeedGrower.owned * SeedGrower.CPS;
            SeedGrower.price = (SeedGrower.price * 1.5).toFixed(0);
            document.getElementById('SeedGrower').innerHTML = `Owned: ${SeedGrower.owned} <br> price ${SeedGrower.price}<br> Seed Grower`;
        }
    }

    function incrementOwnedBiomassGen() {
        if (click.heat >= BiomassGen.price) {
            BiomassGen.owned++;
            BiomassGen.power = BiomassGen.owned * BiomassGen.CPS;
            BiomassGen.price = (BiomassGen.price * 1.5).toFixed(0);
            document.getElementById('BiomassGen').innerHTML = `Owned: ${BiomassGen.owned} <br> price ${BiomassGen.price}<br> Biomass Generator`;
        }
    }

    function incrementOwnedTreeSpreader() {
        if (click.heat >= TreeSpreader.price) {
            TreeSpreader.owned++;
            TreeSpreader.power = TreeSpreader.owned * TreeSpreader.CPS;
            TreeSpreader.price = (TreeSpreader.price * 1.5).toFixed(0);
            document.getElementById('TreeSpreader').innerHTML = `Owned: ${TreeSpreader.owned} <br> price ${TreeSpreader.price}<br> Tree Spreader`;
        }
    }

    function automatedpressure() {
        setInterval(() => {
            click.presure += T1_drill.power + T2_drill.power + T3_drill.power;
            document.getElementById('presure').textContent = `Total Pressure: ${click.presure}`;
        }, 1000);
    }

    function automatedheat() {
        setInterval(() => {
            click.heat += T1_heater.power + T2_heater.power + T3_heater.power;
            document.getElementById('heat').textContent = `Total Heat: ${click.heat}`;
        }, 1000);
    }

    function automatedBio() {
        setInterval(() => {
            click.biomass += SeedGrower.power + BiomassGen.power + TreeSpreader.power;
            document.getElementById('biomass').textContent = `Total Biomass: ${click.biomass}`;
        }, 1000);
    }

    document.addEventListener("DOMContentLoaded", () => {
        automatedpressure();
        automatedheat();
        automatedBio()
        setBasePrice();
    });
</script>