document.addEventListener("click", createConfetti);
document.querySelectorAll('img').forEach(img => {
    img.ondragstart = () => false;
});

function createConfetti(event) {
    for (let i = 0; i < 30; i++) {
        let confetti = document.createElement("div");
        confetti.classList.add("confetti");

        confetti.style.left = `${event.clientX}px`;
        confetti.style.top = `${event.clientY}px`;

        confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 60%)`;

        let size = Math.random() * 10 + 5;
        confetti.style.width = `${size}px`;
        confetti.style.height = `${size}px`;

        let angle = Math.random() * 2 * Math.PI; // Random direction
        let speed = Math.random() * 200 + 100; // Random speed

        let xVelocity = Math.cos(angle) * speed;
        let yVelocity = Math.sin(angle) * speed;

        confetti.style.setProperty("--x", `${xVelocity}px`);
        confetti.style.setProperty("--y", `${yVelocity}px`);

        let duration = Math.random() * 1.5 + 1.5;
        confetti.style.animation = `explode ${duration}s ease-out`;

        document.body.appendChild(confetti);

        setTimeout(() => confetti.remove(), duration * 1000);
    }
}


