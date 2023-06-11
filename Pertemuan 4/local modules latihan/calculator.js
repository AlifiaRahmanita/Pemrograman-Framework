const fs = require('fs');
const path = require('path');

const data = fs.readFileSync(path.resolve(__dirname, 'item.json'));
const item = JSON.parse(data);

function getTotalPriceCategory(category){
    let totalPrice = 0;
    item.forEach(items => {
        if(items.category === category){
            totalPrice += item.price;
        }
    });

    return totalPrice;
}
modules.exports = {
    getTotalPriceCategory
};