const readline = require('readline');

const input = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function kalkulator() {
  input.question('Masukkan angka pertama: ', (num1) => {
    input.question('Masukkan angka kedua: ', (num2) => {
      input.question('Masukkan operator (+/-/*//): ', (operator) => {
        let hasil;

        switch(operator) {
          case '+':
            hasil = Number(num1) + Number(num2);
            break;
          case '-':
            hasil = Number(num1) - Number(num2);
            break;
          case '*':
            hasil = Number(num1) * Number(num2);
            break;
          case '/':
            hasil = Number(num1) / Number(num2);
            break;
          default:
            console.log('Operator yang dimasukkan tidak valid');
            kalkulator();
            return;
        }

        console.log(`Hasil: ${hasil}`);
        input.close();
      });
    });
  });
}

kalkulator();
