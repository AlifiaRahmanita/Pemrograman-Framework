const calculator = require('./calculator.js');

const totalPriceElectronics = calculator.getTotalPriceCategory('electronics');
console.log('total price for electronics: $(totalPriceElectronics)');

const totalPriceBooks = calculator.getTotalPriceCategory('books');
console.log('total price for books: $(totalPriceBooks)');

const totalPriceClothing = calculator.getTotalPriceCategory('clothing');
console.log('total price for clothing: $(totalPriceClothing)');