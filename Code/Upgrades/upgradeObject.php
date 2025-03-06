<?php
echo '<script>';
include 'clickerUpgrade.js';
echo '</script>';
echo '<script>';
echo '</script>';
?>
<script>
    let ownedCountDrill1 = 0;
    let ownedCountDrill2 = 0;
    let ownedCountDrill3 = 0;
    let T1_drill_power = 0;
    let T2_drill_power = 0;
    let T3_drill_power = 0;

    let ownedCountHeater1 = 0;
    let ownedCountHeater2 = 0;
    let ownedCountHeater3 = 0;
    let T1_heater_power = 0;
    let T2_heater_power = 0;
    let T3_heater_power = 0;

    let T1_drill = new Upgrade(5, "Pressure");
    let T2_drill = new Upgrade(10, "Pressure");
    let T3_drill = new Upgrade(15, "Pressure");

    let T1_heater = new Upgrade(5, "Heat");
    let T2_heater = new Upgrade(10, "Heat");
    let T3_heater = new Upgrade(15, "Heat");

    function incrementOwnedT1_drill() {
        ownedCountDrill1++;
        T1_drill_power = ownedCountDrill1 * T1_drill.CPS;
        document.getElementById('T1-drill').innerHTML = `Owned: ${ownedCountDrill1} <br><br> T1-Drill`;
    }

    function incrementOwnedT2_drill() {
        ownedCountDrill2++;
        T2_drill_power = ownedCountDrill2 * T2_drill.CPS;
        document.getElementById('T2-drill').innerHTML = `Owned: ${ownedCountDrill2} <br><br> T2-Drill`;
    }

    function incrementOwnedT3_drill() {
        ownedCountDrill3++;
        T3_drill_power = ownedCountDrill3 * T3_drill.CPS;
        document.getElementById('T3-drill').innerHTML = `Owned: ${ownedCountDrill3} <br><br> T3-Drill`;
    }

    function incrementOwnedT1_heater() {
        ownedCountHeater1++;
        T1_heater_power = ownedCountHeater1 * T1_heater.CPS;
        document.getElementById('T1-heater').innerHTML = `Owned: ${ownedCountHeater1} <br><br> T1-Heater`;
    }

    function incrementOwnedT2_heater() {
        ownedCountHeater2++;
        T2_heater_power = ownedCountHeater2 * T2_heater.CPS;
        document.getElementById('T2-heater').innerHTML = `Owned: ${ownedCountHeater2} <br><br> T2-Heater`;
    }

    function incrementOwnedT3_heater() {
        ownedCountHeater3++;
        T3_heater_power = ownedCountHeater3 * T3_heater.CPS;
        document.getElementById('T3-heater').innerHTML = `Owned: ${ownedCountHeater3} <br><br> T3-Heater`;
    }

    function automatedpressure() {
        setInterval(() => {
            click.presure += T1_drill_power + T2_drill_power + T3_drill_power;
            document.getElementById('presure').textContent = `Total Pressure: ${click.presure}`;
        }, 1000);
    }

    function automatedheat() {
        setInterval(() => {
            console.log(`T1_heater_power: ${T1_heater_power}, T2_heater_power: ${T2_heater_power}, T3_heater_power: ${T3_heater_power}`); // Debug log
            click.heat += T1_heater_power + T2_heater_power + T3_heater_power;
            document.getElementById('heat').textContent = `Total Heat: ${click.heat}`;
        }, 1000);
    }

    document.addEventListener("DOMContentLoaded", () => {
        automatedpressure();
        automatedheat();
    });
</script>