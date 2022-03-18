//********Disabeling the submit button
/*les constantes suivantes reste toujours nuls*/
const inputElements = document.querySelectorAll("input");
const buttonElement = document.querySelector("button");
const formElement=document.querySelector("form");
formElement.addEventListener("input",()=>{handleState(inputElements,buttonElement)});
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