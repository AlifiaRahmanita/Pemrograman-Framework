const fs = require('fs');

//syncronous
const data = fs.readFileSync('./file.txt', 'utf-8');
console.log(data);

//Asyncronous
fs.readFile('./file.txt', 'utf-8', (err, data)=>{
    if(err) throw err;
    console.log(data)
})