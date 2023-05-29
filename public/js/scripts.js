// const hero = document.querySelector(".hero");
// const heroBackground = document.querySelector(".hero-background");
// const heroForeground = document.querySelector(".hero-foreground");

// hero.addEventListener("mousemove", (event) => {
//   const rect = hero.getBoundingClientRect();
//   const xPos = event.clientX - rect.left;
//   const yPos = event.clientY - rect.top;
//   const xRotation = (yPos / rect.height - 0.5) * 12;
//   const yRotation = (xPos / rect.width - 0.5) * -12;

//   const foregroundXShift = (xPos / rect.width - 0.5) * 20;
//   const foregroundYShift = (yPos / rect.height - 0.5) * 5;

//   const zoomThreshold = 0.005;
//   const zoomFactor = xPos < rect.width / 2 ? 1 + zoomThreshold : 1 - zoomThreshold;

//   heroBackground.style.transform = `rotateX(${xRotation}deg) rotateY(${yRotation}deg) scale(${zoomFactor})`;
//   heroForeground.style.transform = `translate3d(${foregroundXShift}px, ${foregroundYShift}px, 0)`;
// });

const hero = document.querySelector(".hero");

if (hero) {
    const heroBackground = document.querySelector(".hero-background");
    const heroForeground = document.querySelector(".hero-foreground");

    hero.addEventListener("mousemove", (event) => {
        const rect = hero.getBoundingClientRect();
        const xPos = event.clientX - rect.left;
        const yPos = event.clientY - rect.top;
        const xRotation = (yPos / rect.height - 0.5) * 12;
        const yRotation = (xPos / rect.width - 0.5) * -12;

        const foregroundXShift = (xPos / rect.width - 0.5) * 20;
        const foregroundYShift = (yPos / rect.height - 0.5) * 5;

        const zoomThreshold = 0.005;
        const zoomFactor =
            xPos < rect.width / 2 ? 1 + zoomThreshold : 1 - zoomThreshold;

        heroBackground.style.transform = `rotateX(${xRotation}deg) rotateY(${yRotation}deg) scale(${zoomFactor})`;
        heroForeground.style.transform = `translate3d(${foregroundXShift}px, ${foregroundYShift}px, 0)`;
    });
}
