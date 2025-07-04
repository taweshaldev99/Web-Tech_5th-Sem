
let y= 10;
let x= "Dev";
const PI =3.14;
let hour =19;
console.log(typeof(x))
console.log(typeof(y));
console.log(typeof(PI));

if (hour<18){
    console.log("Good Day\n");
}else{
    console.log("Good Evening\n");
}

 //If time is less than 10:00, create a "Good morning" greeting, if not, but time is less than 20:00, create a "Good 
 // day" greeting, otherwise a "Good evening":  

let time= 11;
if(time <10){
    console.log("Good Morning\n");
    
}else if(time>10 && time<20){
    console.log("Good Day\n");
    
}else{
    console.log("Good Evening\n");
}
  // Array  //
let a=["Thakur","2sl"];
let b =["JASMINE" , "Ara" , "Hussain"];
console.log(b[1]);
console.log(typeof a);

// Accessing First Array Elements 
let fst = b[0]; 
console.log("First ITEM FROM B : " ,fst);

// Accessing Last Array Elements 
let last =b[b.length-1];
console.log("Last Item : ",last);

// Modifying the Array Elements
b[1]="Dev";
console.log(b);

//Adding Elements to the Array
  // Push = end maa add garxa
  // unshift = beginning maa add garxa

b.push('TATA');
b.unshift('Taweshal');
console.log(b);

// Removes and returns the last element
let lst= b.pop();
// Removes and returns the first element 
let Fst = b.shift();

console.log(b);

// Removes 2 elements starting from index 1 
b.splice(1,2);
console.log(b);

//  Array Length 
len = b.length;
console.log(len);

//Concatenate both arrays 
let concateArray = a.concat(b);
console.log()