// var object1={
//     "nama" : "Alifia Rahmanita",
//     "umur" : "35",
// }

// console.log(object1); 

var object1={
  "nama" : "Alifia Rahmanita",
  "umur" : 20,
};
var object2 = Object.assign({}, object1);
object2.umur = 30;

console.log(object1);//hasil object 1
console.log("----------------");
console.log(object2);//hasil object 2