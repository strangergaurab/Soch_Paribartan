//Script For Tic-Tac-Toe Game
let boxes = document.querySelectorAll(".box");
let resetBtn = document.querySelector("#reset");
let newBtn=document.querySelector('#new-Btn');
let message = document.querySelector('#msg');
let messageContainer=document.querySelector('.Message-Container');
let draw=document.querySelector(".draw");
let drawMessage = document.querySelector('#draw-mesg');
let drawBtn=document.querySelector('#draw-Btn');
let gamesButton=document.querySelector(".game-Btn");
let gameButton=document.querySelector(".games-Btn");
let turn = true;
const validclickonhome=()=>{
    
    gamesButton.addEventListener("click",()=>{
        validClick = true;
        window.location.href = 'GameHome.html';
    })
    gameButton.addEventListener("click",()=>{
        validClick = true;
        window.location.href = 'GameHome.html';
    })
}
const win=[
    [0,1,2], 
    [0,4,8],
    [0,3,6],
    [3,4,5],
    [6,7,8],
    [2,4,6],
    [1,4,7],
    [2,5,8],
];
const resetGame=()=>{
    validClick = true;
    turn=true;
    enableCall();
    messageContainer.classList.add("hide");
    draw.classList.add("hide");
}
const enableCall=()=>{
    for(box of boxes){
        validClick = true;
        box.disabled=false;
        box.innerText="";
    }
}
const disabledCall=()=>{
    for(box of boxes){
        validClick = true;
        box.disabled=true;
    }
}

boxes.forEach((box) =>{
    box.addEventListener("click",()=>{
        validClick = true;
        if(turn){
            box.innerText = "O";
           
            turn=false;
            
        } else {
            box.innerText = "X";
            turn=true;
        } 
            box.disabled=true;
            checkWinner();
            checkDraw()
    });
});
const showWinner=(winner)=>{
    validClick = true;
    message.innerText=`Congratulation, Winner is ${winner}`;
    messageContainer.classList.remove("hide");
    disabledCall();
    
}
const showDraw = () => {
    validClick = true;
    drawBtn.addEventListener("click", resetGame);
    draw.classList.remove("hide");
    drawMessage.innerText="Game is draw";
    
   
};

const checkDraw = () => {
    validClick = true;
    const allBoxesFilled = [...boxes].every(box => box.innerText.trim() !== "");
    if (allBoxesFilled) {
        showDraw();
    }
};
const checkWinner = ()=>{
    for (let pattern of win){
        validClick = true;
       let position1=boxes[pattern[0]].innerText; 
       let position2=boxes[pattern[1]].innerText; 
       let position3=boxes[pattern[2]].innerText;
       if(position1!=""&&position2!=""&&position3!=""){
        if(position1===position2 && position2===position3){
                showWinner(position1);
              
        }}};
};

resetBtn.addEventListener("click",resetGame);
newBtn.addEventListener("click",resetGame);
validclickonhome();

//Script For Rock-Paper-Scissor
let userValue = 0;
let compValue = 0;
let validClick = false;
let userChoicePara = document.querySelector("#user-Score");
let compChoicePara = document.querySelector("#comp-Score");
let changeBtn = document.querySelector("#play-btn");

// Check if required elements exist
if (!userChoicePara || !compChoicePara || !changeBtn) {
    console.error("One or more required elements not found");
}

const choices = document.querySelectorAll(".choice");

const drawGame = (userChoice, randomChoice) => {
    changeBtn.innerText = `Game was draw. ${userChoice} Same as ${randomChoice}`;
    changeBtn.style.backgroundColor = "yellow";
    changeBtn.style.color = "black";
    userChoicePara.innerText=++userValue;
    compChoicePara.innerText=++compValue;
};

const showWin = (userWin, userChoice, randomChoice) => {
    if (userWin === true) {
        userValue++;
        userChoicePara.innerText = userValue;
        changeBtn.innerText = `Cool! 😎 You win, Your ${userChoice} beats Computer ${randomChoice}`;
        changeBtn.style.backgroundColor = "green";
        changeBtn.style.color = "white";
    } else {
        compValue++;
        compChoicePara.innerText = compValue;
        changeBtn.innerText = `Looser 😢, Computer ${randomChoice} beats Your Dumb ${userChoice} choice`;
        changeBtn.style.backgroundColor = "red";
        changeBtn.style.color = "white";
    }
};

const playGame = (userChoice) => {
    const randomChoice = compChoice();

    try {
        if (userChoice === randomChoice) {
            drawGame(userChoice, randomChoice);
        } else {
            let userWin = true;
            if (userChoice === "rock") {
                userWin = randomChoice === "paper" ? false : true;
            } else if (userChoice === "paper") {
                userWin = randomChoice === "scissor" ? false : true;
            } else {
                userWin = randomChoice === "rock" ? false : true;
            }
            showWin(userWin, userChoice, randomChoice);
            butoClickEvent();
        }
    } catch (error) {
        console.error("An error occurred during game play:", error);
    }
};

const compChoice = () => {
    const options = ["rock", "paper", "scissor"];
    const randomIndx = Math.floor(Math.random() * 3);
    return options[randomIndx];
};

choices.forEach((choice) => {
    choice.addEventListener("click", () => {
        validClick = true;
        const userChoice = choice.getAttribute("id");
        playGame(userChoice);
    });
});

const butoClickEvent = () => {
    try {
        const gameBtn = document.querySelector("#play-btn");
        gameBtn.addEventListener("click", () => {
            validClick = true;
            changeBtn.innerText = "Play your Game";
            changeBtn.style.backgroundColor = "black";
            changeBtn.style.color = "white";
            userChoicePara.innerText = 0;
            compChoicePara.innerText = 0;
        });
    } catch (error) {
        console.error("An error occurred during button click event:", error);
    }
};

document.body.addEventListener("click", (event) => {
    if (!validClick) {
        alert("Please make a choice or click the Play button!");
    }
    validClick = false; 
});