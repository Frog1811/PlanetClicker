<?php include 'upgradeObject.php'; ?>
<div class="upgradeField">
    <div class="heatUpgrades">
        <b>Heat Upgrades: needs Pressure</b>
        <div class="upgrade-Heat">
            <button class="upContainer" onclick="incrementOwnedT1_drill()" id="T1-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill1">0</span> <br>
                </div>
                <div>Price: 5</div>
                T1-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_drill()" id="T2-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill2">0</span> <br>
                </div>
                <div>Price: 10</div>
                T2-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_drill()" id="T3-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill3">0</span> <br>
                </div>
                <div>Price: 15</div>
                T3-Drill
            </button>
        </div>
    </div>
    <div class="pressureUpgrades">
        <b>Heat Upgrades: needs biomass</b>
        <div class="upgrade-Pressure">
            <button class="upContainer" onclick="incrementOwnedT1_heater()" id="T1-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater1">0</span> <br>
                </div>
                <div>Price: 5</div>
                T1-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_heater()" id="T2-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater2">0</span><br>
                </div>
                    <div>Price: 10</div>
                T2-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_heater()" id="T3-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater3">0</span> <br>
                </div>
                <div>Price: 15</div>
                T3-Heater
            </button>
        </div>
    </div>
    <div class="biomassUpgrades">
        <b>Heat Upgrades: needs heat</b>
        <div class="upgrade-Biomass">
            <button class="upContainer" onclick="incrementOwnedSeedGrower()" id="SeedGrower">
                <div class="test">
                    Owned: <span id="ownedCountSeedGrower">0</span> <br>
                </div>
                <div>Price: 5</div>
                Seed Grower
            </button>
            <button class="upContainer" onclick="incrementOwnedBiomassGen()" id="BiomassGen">
                <div class="test">
                    Owned: <span id="ownedCountBiomassGen">0</span> <br>
                </div>
                <div>Price: 10</div>
                Biomass Generator
            </button>
            <button class="upContainer" onclick="incrementOwnedTreeSpreader()" id="TreeSpreader">
                <div class="test">
                    Owned: <span id="ownedCountTreeSpreader">0</span> <br>
                </div>
                <div>Price: 15</div>
                Tree Spreader
            </button>
        </div>
    </div>
</div>