window.addEventListener("load", (_) => {
    console.log("Setting up the timer");
    setupTimer();
});

const COUNTDOWN_COLUMNS = [100, 10, 1];

function setupTimer() {
    updateTimer();

    setTimeout(() => {
        updateTimer();
        setupTimer();
    }, 100)
}

function updateTimer() {
    var singularityTime = new Date("Sep 12, 2024 12:00:00").getTime();
    var now = new Date().getTime();

    var timeLeft = singularityTime - now;

    if (timeLeft > 0) {
        displayTime(timeLeft);
    } else {
        displayFinalMessage();
    }
}

function splitColumns(number) {
    var splitted = {}
    for (const column of COUNTDOWN_COLUMNS) {
        splitted[column] = Math.floor((number % (column * 10)) / column)
    }
    return splitted
}

function updateUnitCounter(value, unitSymbol) {
    var columns = splitColumns(value)
    for (const [unit, amount] of Object.entries(columns)) {
        var unitSpot = document.getElementById(`${unitSymbol}${unit}`);
        if (unitSpot == null) {
            // We don't have 100s columns for all the units.
            continue;
        }
        unitSpot.innerHTML = amount;
    }
}

function displayTime(timeToDisplay) {
    var days = Math.floor(timeToDisplay / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeToDisplay % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeToDisplay % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeToDisplay % (1000 * 60)) / 1000);

    updateUnitCounter(seconds, "s");
    updateUnitCounter(minutes, "m");
    updateUnitCounter(hours, "h");
    updateUnitCounter(days, "d");
}

var date1 = new Date();
var date2 = new Date();
var diff = date2 - date1;