


function randomColor(){
    return Math.floor(Math.random()*16777215).toString(16);
}
/*Ce code marche pour la console mais pas come un fichier js*/
document.querySelector("ol").addEventListener("click",
    (e)=>{e.target.style.color = "#"+randomColor().toUpperCase();});