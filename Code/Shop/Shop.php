<div class="shop">
    <style>
        body {
            background-color: #0b0f2c;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById("bg1").addEventListener("click", () => {
                if (clicker.presure >= 0) {
                document.body.style.backgroundColor = "#0b0f2c";
                }
            });

            document.getElementById("bg2").addEventListener("click", () => {
                if (clicker.biomass >= 20) {
                    document.body.style.backgroundColor = "#0a0b1c";
                }
            });

            document.getElementById("bg3").addEventListener("click", () => {
                if (clicker.heat >= 30) {
                    document.body.style.backgroundColor = "#1b1c3c";
                }
            });

            document.getElementById("bg4").addEventListener("click", () => {
                if (clicker.biomass >= 50) {
                    document.body.style.backgroundColor = "#2d1f56";
                }
            });

            document.getElementById("bg5").addEventListener("click", () => {
                if (clicker.presure >= 100) {
                    document.body.style.backgroundColor = "#3e2a7b";
                }
            });

            document.getElementById("bg6").addEventListener("click", () => {
                if (clicker.biomass >= 200) {
                    document.body.style.backgroundColor = "#4f3a97";
                }
            });

            document.getElementById("bg7").addEventListener("click", () => {
                if (clicker.heat >= 300) {
                    document.body.style.backgroundColor = "#614bb1";
                }
            });

            document.getElementById("bg8").addEventListener("click", () => {
                if (clicker.presure >= 1000) {
                    document.body.style.backgroundColor = "#7561d2";
                }
            });

            document.getElementById("bg9").addEventListener("click", () => {
                if (clicker.presure >= 2000) {
                    const overlay = document.createElement("div");
                    overlay.className = "video-overlay";

                    const video = document.createElement("video");
                    video.src = "img/never.mp4";
                    video.autoplay = true;
                    video.controls = false;
                    video.style.width = "100%";
                    video.style.height = "100%";
                    video.style.objectFit = "cover";

                    overlay.appendChild(video);
                    document.body.appendChild(overlay);

                    const disableRefresh = (e) => {
                        e.preventDefault();
                        e.returnValue = '';
                    };
                    window.addEventListener('beforeunload', disableRefresh);

                    const keyBlocker = (e) => {
                        if (
                            e.key === "F5" ||
                            (e.ctrlKey && e.key === "r") ||
                            (e.metaKey && e.key === "r")
                        ) {
                            e.preventDefault();
                            e.stopPropagation();
                        }
                    };
                    window.addEventListener("keydown", keyBlocker, true);

                    // 🎬 Cleanup when video ends
                    video.addEventListener("ended", () => {
                        document.body.removeChild(overlay);
                        window.removeEventListener('beforeunload', disableRefresh);
                        window.removeEventListener("keydown", keyBlocker, true);
                    });                }
            });
        });
    </script>
    <b>Shop</b>
    <div class="items">
        <button id="bg1" class="item">BG 1</button>
        <button id="bg2" class="item">BG 2 <br> biomass: 20</button>
        <button id="bg3" class="item">BG 3 <br> heat: 30</button>
        <button id="bg4" class="item">BG 4 <br> biomass: 50</button>
        <button id="bg5" class="item">BG 5 <br> pressure: 100</button>
        <button id="bg6" class="item">BG 6 <br> biomass: 200</button>
        <button id="bg7" class="item">BG 7 <br> heat: 300</button>
        <button id="bg8" class="item">BG 8 <br> pressure: 1000</button>
        <button id="bg9" class="item">BG 9 <br> pressure: 2000</button>
    </div>
</div>
