let yourScore = 0;
let computerScore = 0;

function getComputerChoice(){
    let randomNum = Math.round(Math.random() * 10);
    if (randomNum >= 0 && randomNum <=4){
        randomNum = 1;
    }else if (randomNum >= 5 && randomNum <=7){
        randomNum = 2;
    }else {
        randomNum = 3;
    }
    return randomNum;
}

function getHumanChoice(){
    let humanNum = prompt(`What is your choice?\nType : \n"1" for Rock \n"2" for Paper \n"3" for Scissor`);
    if(humanNum === "1"){
        playRound(Number(humanNum),Number(getComputerChoice()));
    }else if(humanNum === "2"){
        playRound(Number(humanNum),Number(getComputerChoice()));
    }else if(humanNum === "3"){
        playRound(Number(humanNum),Number(getComputerChoice()));
    }else{
        getHumanChoice();
    }
}

function playRound(humanChoice,computerChoice){
    if((humanChoice === 1 && computerChoice === 3) || (humanChoice === 3 && computerChoice === 2) || (humanChoice === 2 && computerChoice === 1)){
        yourScore += 1;
    }else{
        computerScore += 1;
    }
}

for(i=0;i<5;i++){
    alert(`Match is approaching ${i+1} time`);
    getHumanChoice();
}

document.getElementById("humanScore").innerText = `You win ${yourScore}-time`;

document.getElementById("computerScore").innerText = `Computer win ${computerScore}-time`;

// Javascript Exercies (it's not related with this exercise)
function camelize(name){
    let splitedName = name.split("-");
    let finalizedName = splitedName.reduce((newName,currentName)=>{
        return newName + currentName[0].toUpperCase() +currentName.slice(1);
    });
    return finalizedName;
}

console.log(camelize("background-color") == 'backgroundColor');
console.log(camelize("list-style-image") == 'listStyleImage');
console.log(camelize("-webkit-transition") == 'WebkitTransition');

function filterRange(arr,a,b){
    return arr.filter(item => (a <= item && item <= b));
}

let arr = [5, 3, 8, 1];

let filtered = filterRange(arr, 1, 4);

alert(filtered);
alert(arr);