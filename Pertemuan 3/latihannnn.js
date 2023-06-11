for(let i = 1; i <= 10; i++){
    if(i % 3 === 0 && i % 5 === 0){
        console.log("macan");
    } else if (i % 3 === 0){
        console.log("gajah");
    } else if (i % 5 === 0){
        console.log("monyet");
    } else {
        console.log(i);
    }
}