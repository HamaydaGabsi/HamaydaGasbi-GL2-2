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
    if(list.length===1)
        listElement.innerHTML='';
    listElement.innerHTML=listElement.innerHTML+`<li class="list-group-item">
${list[list.length-1]}    <i class="bi bi-trash-fill"></i>
<i id="trash" class='fa fa-trash'></i>
</li>`;
}
function executeTodo(e){
    e.preventDefault()
    addTodoToList();
    constructListItems(document.querySelector("ul"),todoList);
    document.querySelector("form").reset();
}




const trash=document.querySelector("#trash");
function deleteItem(trashItemElement){
    trashItemElement.parentNode.remove();

}

function executeDelete(e){
    if(e.target.id==="trash"){
        e.target.parentNode.remove();
    }
}
let button =document.querySelector("button");
let listElement =document.querySelector("#todoList");
button.addEventListener("click",executeTodo);
listElement.addEventListener("click",executeDelete);

