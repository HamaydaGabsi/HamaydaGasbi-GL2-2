


function randomColor(){
    return Math.floor(Math.random()*16777215).toString(16);
}

document.querySelector("ol").addEventListener("click",
    (e)=>{e.target.style.color = "#"+randomColor().toUpperCase();});