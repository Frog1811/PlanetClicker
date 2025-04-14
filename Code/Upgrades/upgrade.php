<script>
    <?php include 'clickerUpgrade.js'; ?>
</script>
<div class="upgradeField">
    <div class="heatUpgrades">
        <b>Pressure Upgrades</b>
        <div class="upgrade-Heat">
            <button class="upContainer" onclick="T1_drill.incrementOwned();" id="T1-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill1">0</span> <br>
                </div>
                <div>Price: 20 Heat</div>
                T1-Drill
            </button>
            <button class="upContainer" onclick="T2_drill.incrementOwned()" id="T2-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill2">0</span> <br>
                </div>
                <div>Price: 200 Heat</div>
                T2-Drill
            </button>
            <button class="upContainer" onclick="T3_drill.incrementOwned()" id="T3-drill">
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
            <button class="upContainer" onclick="T1_heater.incrementOwned()" id="T1-Heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater1">0</span> <br>
                </div>
                <div>Price: 20 Biomass</div>
                T1-Heater
            </button>
            <button class="upContainer" onclick="T2_heater.incrementOwned()" id="T2-Heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater2">0</span><br>
                </div>
                <div>Price: 200 Biomass</div>
                T2-Heater
            </button>
            <button class="upContainer" onclick="T3_heater.incrementOwned()" id="T3-Heater">
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
            <button class="upContainer" onclick="SeedGrower.incrementOwned()" id="Seed-Grower">
                <div class="test">
                    Owned: <span id="ownedCountSeedGrower">0</span> <br>
                </div>
                <div>Price: 20 Pressure</div>
                Seed Grower
            </button>
            <button class="upContainer" onclick="BiomassGen.incrementOwned()" id="Biomass-Generator">
                <div class="test">
                    Owned: <span id="ownedCountBiomassGen">0</span> <br>
                </div>
                <div>Price: 200 Pressure</div>
                Biomass Generator
            </button>
            <button class="upContainer" onclick="TreeSpreader.incrementOwned()" id="Tree-Spreader">
                <div class="test">
                    Owned: <span id="ownedCountTreeSpreader">0</span> <br>
                </div>
                <div>Price: 1000 Pressure</div>
                Tree Spreader
            </button>
        </div>
    </div>
</div>