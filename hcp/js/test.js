var _createClass=function(){function a(a,b){for(var c,d=0;d<b.length;d++)c=b[d],c.enumerable=c.enumerable||!1,c.configurable=!0,"value"in c&&(c.writable=!0),Object.defineProperty(a,c.key,c)}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}();function _classCallCheck(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}var d=[1,2,3],people=[{name:"Casper",like:"\u934B\u71D2\u610F\u9EB5",age:1},{name:"Wang",like:"\u7092\u9EB5",age:3}];console.log(d.includes(2));var mapAgeThan5=d.map(function(a){return 1<a.age}),kk=people.forEach(function(a){++a.age});console.log("test: "+mapAgeThan5),console.log(people[0].age);function ohd(c,a){return Promise.resolve().then(function(){return c+a})}ohd(1,2).then(console.log);var Person=function(){function a(b,c,d){_classCallCheck(this,a),this.name=b,this.age=c,this.job=d}return _createClass(a,[{key:"getBio",value:function(){return this.name+" is a "+this.age+" year-old "+this.job}}]),a}(),square=new Person("P",10,"still P");