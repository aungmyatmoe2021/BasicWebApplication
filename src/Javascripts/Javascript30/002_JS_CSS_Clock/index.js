const hourHand = document.querySelector(".hour-hand");
const minHand = document.querySelector(".min-hand");
const secondHand = document.querySelector(".second-hand");

setDate();
setInterval(setDate, 1000);

function setDate(){
    const now = new Date();

    const seconds = now.getSeconds();
    const secondDegrees = ((seconds / 60) * 360) + 90;
    secondHand.style.transform = `rotate(${secondDegrees}deg)`;

    const mins = now.getMinutes();
    const minDegrees = ((mins / 60 ) * 360) + ((seconds / 60 ) * 6) + 90;
    minHand.style.transform = `rotate(${minDegrees}deg)`;

    const hour = now.getHours();
    const hourDegrees = ((hour / 12) * 360) + ((mins/60)*30) + 90;
    hourHand.style.transform = `rotate(${hourDegrees}deg)`;
}