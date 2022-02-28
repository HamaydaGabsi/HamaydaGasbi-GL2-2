function readValue(id){
    const element={
        theElement :document.querySelector(id),
        theValue : document.querySelector(id).value
    };
    return element;
}

function activateEditor(selector){
    let colorElement,sizeElement,fontElement,editElement;
    setInterval(
        ()=>{
        colorElement=readValue("#colorInput");
        sizeElement=readValue("#fontSize");
        fontElement=readValue("#fontStyle");
        editElement=document.querySelector(selector);
        editElement.style.color=colorElement.theValue;
        editElement.style.fontSize=sizeElement.theValue+"px";
        editElement.style.fontFamily=fontElement.theValue;
        }
        ,100
    )
}
function activateEditor1(selector){
    let colorElement,sizeElement,fontElement,editElement;
    document.addEventListener("input",
        ()=>{
        colorElement=readValue("#colorInput");
        sizeElement=readValue("#fontSize");
        fontElement=readValue("#fontStyle");
        editElement=document.querySelector(selector);
        editElement.style.color=colorElement.theValue;
        editElement.style.fontSize=sizeElement.theValue+"px";
        editElement.style.fontFamily=fontElement.theValue;
        }
    )
}
activateEditor1(".test");