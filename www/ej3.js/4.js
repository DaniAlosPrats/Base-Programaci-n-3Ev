let tamano = parseInt(prompt("Ingrese el tamaño del array de números primos:"));

while (isNaN(tamano) || tamano <= 0) {
    tamano = parseInt(prompt("Por favor, ingrese un número positivo mayor que 0:"));
}

let primos = [];
let numero = 2;

while (primos.length < tamano) {
    let esPrimo = true;
    for (let i = 2; i <= Math.sqrt(numero); i++) {
        if (numero % i === 0) {
            esPrimo = false;
            break;
        }
    }
    if (esPrimo) {
        primos.push(numero);
    }
    numero;
}


document.getElementById("salidas").innerHTML += numero;