//**********la fonction d'ajout deTodo
function getFormElements (selector){

    return document.querySelector(selector).elements;

}
function getFormData(formSelector){
    let elements=getFormElements(formSelector);
    let data=[];
    for(let i =0 ;i<2;i++){
        data.push(elements[i].value);
    }
    return data;
}

let todoList = [];

function addTodoToList(){
    const newData= getFormData("#addTodo")
    let newTodo = newData[0]+": "+newData[1];
    todoList.push(newTodo);
}
function constructListItems(listElement,list){
    listElement.innerHTML="";
    for(let i=0;i<list.length;i++)
    listElement.innerHTML=listElement.innerHTML+`<li class="list-group-item">
${list[i]}    <i class="bi bi-trash-fill"></i>
<i id="trash" class='fa fa-trash'></i>
</li>`;
}
function executeTodo(e){
    e.preventDefault()
    addTodoToList();
    constructListItems(document.querySelector("ul"),todoList);
    document.querySelector("form").reset();
}
/*La ligne suivante n'est executee que on l'ecrit sur la console*/
document.querySelector("button").addEventListener("click",executeTodo);

//******************La fonction de supression
const trash=document.querySelector("#trash");
function deleteItem(trashItemElement){
    trashItemElement.parentNode.remove();

}

function executeDelete(e){
    if(e.target.id==="trash"){
        e.target.parentNode.remove();
    }
}
/*la ligne suivante ne marche que sur la console*/
document.querySelector("#todoList").addEventListener("click",executeDelete);

