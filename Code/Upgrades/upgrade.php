<?php include 'upgradeObject.php'; ?>
<div class="upgradeField">
    <div class="heatUpgrades">
        <b>Pressure Upgrades</b>
        <div class="upgrade-Heat">
            <button class="upContainer" onclick="incrementOwnedT1_drill()" id="T1-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill1">0</span> <br>
                </div>
                <div>Price: 20 Heat</div>
                T1-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_drill()" id="T2-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill2">0</span> <br>
                </div>
                <div>Price: 200 Heat</div>
                T2-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_drill()" id="T3-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill3">0</span> <br>
                </div>
                <div>Price: 1000 Heat</div>
                T3-Drill
            </button>
        </div>
    </div>
    <div class="pressureUpgrades">
        <b>Heat Upgrades</b>
        <div class="upgrade-Pressure">
            <button class="upContainer" onclick="incrementOwnedT1_heater()" id="T1-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater1">0</span> <br>
                </div>
                <div>Price: 20 Biomass</div>
                T1-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_heater()" id="T2-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater2">0</span><br>
                </div>
                <div>Price: 200 Biomass</div>
                T2-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_heater()" id="T3-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater3">0</span> <br>
                </div>
                <div>Price: 1000 Biomass</div>
                T3-Heater
            </button>
        </div>
    </div>
    <div class="biomassUpgrades">
        <b>Biomass Upgrades</b>
        <div class="upgrade-Biomass">
            <button class="upContainer" onclick="incrementOwnedSeedGrower()" id="SeedGrower">
                <div class="test">
                    Owned: <span id="ownedCountSeedGrower">0</span> <br>
                </div>
                <div>Price: 20 Pressure</div>
                Seed Grower
            </button>
            <button class="upContainer" onclick="incrementOwnedBiomassGen()" id="BiomassGen">
                <div class="test">
                    Owned: <span id="ownedCountBiomassGen">0</span> <br>
                </div>
                <div>Price: 200 Pressure</div>
                Biomass Generator
            </button>
            <button class="upContainer" onclick="incrementOwnedTreeSpreader()" id="TreeSpreader">
                <div class="test">
                    Owned: <span id="ownedCountTreeSpreader">0</span> <br>
                </div>
                <div>Price: 1000 Pressure</div>
                Tree Spreader
            </button>
        </div>
    </div>
</div>