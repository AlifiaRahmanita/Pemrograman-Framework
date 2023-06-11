const readline = require('readline');
const process = require('process');

const input = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});
input.question("Hello!! Nama mu Siapa? : ", (nama) => {
    input.question("Apakah Kamu masih Berpuasa??? : ", (puasa) => {
        console.log(`Nama kamu adalah ${nama}`);
        console.log(`${puasa}`);
        input.close();
    })
});