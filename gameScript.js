//Declaration of All Value That Is To Be Included
let chooseGame=document.querySelector(".chooseGame");
let firstGame=document.querySelector(".ticTacToe");
let tictac=document.querySelector("#gameOne");
let scissorpaper=document.querySelector("#gameTwo");
let firstStyle=document.querySelector(".style1");
let secondStyle=document.querySelector(".style2");
let rps=document.querySelector(".ScissorPaper");

//Function To Add class In Element If Element Have ClassList
const addClass=(element)=>{
    if(element && element.classList){
    element.classList.add("hide");
    }
};
//Function To Remove class In Element If Element Have ClassList
const removeClass=(element)=>{
    if(element && element.classList){
    element.classList.remove("hide");
    }
};
//Function To Remove Child In Element If Element Have ParentNode
const removeElement=(element)=>{
    if (element.parentNode) {
        element.parentNode.removeChild(element);
    }
};
//Function To Add Style In Element If Element Have Style
const style=(element)=>{
    if(element && element.style){
    element.style.display="none";
    }
};
//Function To Be Called In Changegame If Click Event Is Fired
const ticGame =()=>{
    validClick = true;
    addClass(chooseGame);
    removeClass(firstGame);
    removeElement(firstStyle);
    document.title="Tic-Tac-Toe";
};
//Function To Be Called In rockGame If Click Event Is Fired
const rockGame=()=>{
    validClick = true;
    addClass(chooseGame);
    removeClass(rps);
    removeElement(firstStyle);
    style(firstGame);
    style(chooseGame);
    document.title="Rock Paper Scissors"
};
// Function to be called when the Tic Tac Toe button is clicked
function changeGame(){
    tictac.addEventListener("click", ticGame);
};
// Function to be called when the Rock Paper Scissors button is clicked
function secondGame(){
    scissorpaper.addEventListener("click", rockGame);
};
// Calling the functions to set up event listeners
changeGame();
secondGame();