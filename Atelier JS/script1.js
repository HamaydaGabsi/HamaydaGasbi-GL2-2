function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min);
}


function getTentatives(niveau){
    if(niveau===1) return 5;
    else if (niveau===2) return 3;
    else  return 1;
}
function play(tentatives){
    let randomNumber= getRandomInt(0,11);
    while (tentatives>0){
        let guess = prompt("What's your guess?");

        if (guess === randomNumber ){
            alert("Right guess!");
            break;
        }
        else alert("Wrong guess!");
        tentatives--;
    }
    if (tentatives===0) alert("Game over");
}

play(getTentatives(1));