let x = 2;
let y = 3;
let result;

switch(x){
    case 1:
        result = y + 1;
        break;
    case 2:
        result = y * 3;
        break;
    case 3:
        result = y - 1;
        break;
    default:
        result = y;
        break;
}

console.log(result);