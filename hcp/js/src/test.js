var d=[1,2,3];
var people = [
  {
    name: 'Casper',
    like: '鍋燒意麵',
    age: 1
  },
  {
    name: 'Wang',
    like: '炒麵',
    age: 3
  },
];
console.log(d.includes(2));

var mapAgeThan5 = d.map(function(item, index, array){
  return item.age > 1;
});
var kk = people.forEach(function(item, index, array){
  item.age = item.age + 1;
});
console.log(`test: ${mapAgeThan5}`);
console.log(people[0].age);

async function ಠ_ಠ(a,b){
  // a = await a_f(a);
  // b = await a_f(b);
  return a+b;
}
ಠ_ಠ(1,2).then(console.log);

// function a_f(p){
//   return new Promise(resolve => {
//     setTimeout(resolve(p**2),1000);
//   })
// }
class Person {
  constructor (name, age, job) {
    this.name = name
    this.age = age
    this.job = job
  }

  getBio () {
    return `${this.name} is a ${this.age} year-old ${this.job}`
  }
}
const square = new Person('P', 10, 'still P');
