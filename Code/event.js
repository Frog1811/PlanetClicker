let buttonActive = false;

document.addEventListener("click", () => {
    if (buttonActive || Math.random() >= 0.5) return;

    const button = document.createElement("button");
    button.textContent = "Click Me!";
    button.className = "random-popup-btn";
    button.style.position = "fixed";
    button.style.zIndex = 9999;

    const x = Math.random() * (window.innerWidth - 100);
    const y = Math.random() * (window.innerHeight - 50);
    button.style.left = `${x}px`;
    button.style.top = `${y}px`;

    const removeButton = () => {
        if (button.parentElement) {
            document.body.removeChild(button);
            buttonActive = false;
        }
    };

    const timeoutId = setTimeout(removeButton, 2000);

    button.addEventListener("click", () => {
        clearTimeout(timeoutId);
        removeButton();

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

        // 🔒 Disable refresh
        const disableRefresh = (e) => {
            e.preventDefault();
            e.returnValue = '';
        };
        window.addEventListener('beforeunload', disableRefresh);

        // Block F5 / Ctrl+R / Cmd+R
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
        });
    });

    document.body.appendChild(button);
    buttonActive = true;
});
