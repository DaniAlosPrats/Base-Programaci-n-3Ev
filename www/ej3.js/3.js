let array1 = [];
let numero = parseInt(prompt("Introduce un número entero para el primer array (0 para terminar):"));
while (numero !== 0) {
    array1.push(numero);
    numero = parseInt(prompt("Introduce otro número entero para el primer array (0 para terminar):"));
}


let array2 = [];
numero = parseInt(prompt("Introduce un número entero para el segundo array (0 para terminar):"));
while (numero !== 0) {
    array2.push(numero);
    numero = parseInt(prompt("Introduce otro número entero para el segundo array (0 para terminar):"));
}


if (array1.length !== array2.length) {
    console.log("Los arrays proporcionados no tienen la misma longitud. No se puede realizar el proceso.");
} else {
   
    let producto = 1;
    for (let i = 0; i < array1.length; i++) {
        producto *= array1[i] * array2[i];
    }

    console.log("El producto de los elementos que ocupan la misma posición es: " + producto);
}