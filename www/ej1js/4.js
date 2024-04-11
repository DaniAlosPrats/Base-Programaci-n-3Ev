
 let ancho = parseFloat(prompt("Ingresa el valor del ancho:"));
    

 let largo = parseFloat(prompt("Ingresa el valor del largo:"));


 let a = parseFloat(prompt("Ingresa el valor de a:"));
 
let arearect =  ancho * largo;

let cateto1 = a - ancho ;

let areatring = (largo * cateto1)/ 2;

let areaTotal = arearect + areatring;

document.write(areaTotal);