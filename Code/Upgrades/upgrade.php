<?php include 'upgradeObject.php'; ?>
<div class="upgradeField">
    <div class="heatUpgrades">
        <div class="upgrade-Heat">
            <button class="upContainer" onclick="incrementOwnedT1_drill()" id="T1-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill1">0</span> <br><br>
                </div>
                T1-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_drill()" id="T2-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill2">0</span> <br><br>
                </div>
                T2-Drill
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_drill()" id="T3-drill">
                <div class="test">
                    Owned: <span id="ownedCountDrill3">0</span> <br><br>
                </div>
                T3-Drill
            </button>
        </div>
    </div>
    <div class="pressureUpgrades">
        <div class="upgrade-Pressure">
            <button class="upContainer" onclick="incrementOwnedT1_heater()" id="T1-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater1">0</span> <br><br>
                </div>
                T1-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT2_heater()" id="T2-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater2">0</span> <br><br>
                </div>
                T2-Heater
            </button>
            <button class="upContainer" onclick="incrementOwnedT3_heater()" id="T3-heater">
                <div class="test">
                    Owned: <span id="ownedCountHeater3">0</span> <br><br>
                </div>
                T3-Heater
            </button>
        </div>
    </div>
    <div class="biomassUpgrades">
        <div class="upgrade-Biomass">
            <button class="upContainer">
                <div class="test" onclick="">
                    Owned: 0 <br><br>
                </div>
                seed Grower
            </button>
            <button class="upContainer">
                <div class="test" onclick="">
                    Owned: 0 <br><br>
                </div>
                Biomass <br> Generator
            </button>
            <button class="upContainer">
                <div class="test" onclick="">
                    Owned: 0 <br><br>
                </div>
                Tree <br> Spreader
            </button>
        </div>
    </div>
</div>