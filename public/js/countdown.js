const targetTime = new Date("2024-09-20T23:59:59").getTime();

function updateCountdown() {
    const now = new Date().getTime();
    const timeRemaining = targetTime - now;

    const hours = Math.floor(timeRemaining / (1000 * 60 * 60)); // Total hours including converted days
    const minutes = Math.floor(
        (timeRemaining % (1000 * 60 * 60)) / (1000 * 60)
    );
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    document.getElementById("hours").textContent = String(hours).padStart(
        2,
        "0"
    );
    document.getElementById("minutes").textContent = String(minutes).padStart(
        2,
        "0"
    );
    document.getElementById("seconds").textContent = String(seconds).padStart(
        2,
        "0"
    );

    if (timeRemaining < 0) {
        clearInterval(interval);
        document.querySelector(".countdown").textContent = "Countdown Ended!";
    }
}

const interval = setInterval(updateCountdown, 1000);
