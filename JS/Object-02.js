
      // Object = Collection of key value pairs


let person = { name: "Taweshal" , age:20};
console.log("Name of the person is " +person.name)

// Two ways of creating obj i.e
  // 1. Obj Literal
  // 3. Obj Constructor

  // 1.Creation Using Object Literal

let detail= {
    name: 'Jasmine Aara Hussain' ,
    age : 21
};
detail.age= 22  // Manipulating data 
delete detail.name; 
console.log(detail,"age is"+detail.age);

 //2. Creation Using new Object() Constructor
 let obj= new Object();
 obj.name = "Jas";
 obj.age = 20;
 console.log("Her name is " +obj.name,"\n Her age is "+obj.age);

 // 7. Merging Objects
 let obj3 = {...detail,... obj};
console.log(obj3);

//8. Object Length 
console.log(Object.keys(obj).length);