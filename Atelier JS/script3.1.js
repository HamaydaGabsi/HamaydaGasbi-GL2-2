//********Disabeling the submit button
/*les constantes suivantes reste toujours nuls*/
const inputElements = document.querySelectorAll("input");
const buttonElement = document.querySelector("button");

function handleState(input,button){
    let empty=false;
    for(let i =0; i<input.length;i++){
        if(input[i].value==="") {
            empty=true;
            break;
        }
    }
    button.disabled = empty;
}
/*J'ai pas trouver une solution avec eventListener qui marche mais
* la fonction handleState marche convenablement*/
document.querySelector("form").addEventListener("change", handleState(document.querySelectorAll("input"),document.querySelector("button")));
