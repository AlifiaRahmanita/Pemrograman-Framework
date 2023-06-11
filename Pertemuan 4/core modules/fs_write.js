const fs = require('fs');

//syncronous
fs.writeFileSync('file_contoh.txt', 'ini adalah contoh generate file pada nodeJS');
console.log('Berhasil generate file_contoh.txt');

//Asyncronous
fs.writeFile('file_contoh_async.txt', 'asyncronous generate file', (error)=>{
    console.log("berhasil generate file_async.txt");
})