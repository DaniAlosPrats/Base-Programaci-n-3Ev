
let numeros = [];
for (let i = 0; i < 5; i++) {
    let numero = parseInt(prompt("Introduce el número " + (i + 1) + ":"));
    numeros.push(numero);
}


let suma = 0;
for (let i = 0; i < numeros.length; i++) {
    suma += numeros[i];
}


const media = suma / numeros.length;


window.alert("La media aritmética de los números es: " + media);
