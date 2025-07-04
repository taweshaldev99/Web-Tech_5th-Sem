
//Creating a RegExp in JavaScript
// 1. Using Constructor
let pattern ="Hello"; // Pattern to match
let flags = "i"; //Case insensitive flag
let regex = new RegExp(pattern,flags);
let s = "Hey World";
let y = "Hello Jas"
console.log(regex.test(s));  // False
console.log(regex.test(y));  // True
console.log("\n");
//2. Using Regular Expression Literal
let pat = /hello/i;
let t = "Hello World";
console.log(regex.test(t));