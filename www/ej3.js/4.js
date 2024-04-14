
let tamañoArray = parseInt(prompt("Introduce el tamaño del array de números primos:"));

while (isNaN(tamañoArray) || tamañoArray <= 0) {
    tamañoArray = parseInt(prompt("Por favor, introduce un número válido mayor que 0 para el tamaño del array:"));
}


let arrayPrimos = [];
let numero = 1;
while (arrayPrimos.length < tamañoArray) {
    let esPrimo = true;
    if (numero <= 1) {
        esPrimo = false;
    } else {
        for (let i = 2; i <= Math.sqrt(numero); i++) {
            if (numero % i === 0) {
                esPrimo = false;
                break;
            }
        }
    }
    if (esPrimo) {
        arrayPrimos.push(numero);
    }
    numero++;
}

console.log("Array de números primos:");
console.log(arrayPrimos);
