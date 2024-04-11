let radio = parseFloat(prompt("Ingresa el valor del radio:"));
    

let high = parseFloat(prompt("Ingresa el valor de la altura:"));
let pi = 3.1416;

let areaSemi= (pi * Math.pow(Radio,2))/ 2;
let areaTriangulo = (Math.sqrt(3) / 4) * Math.pow(High, 2);
let areaTotal = areaSemi + areaTriangulo;
window.alert(areaTotal);

