window.addEventListener("load", () => {
    const splash = document.querySelector(".splash-screen");
    setTimeout(() => {
        splash.style.display = "none";
    }, 3000); // Matches the CSS animation duration
});
