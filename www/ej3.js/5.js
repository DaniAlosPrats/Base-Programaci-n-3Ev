
const letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";


let numeroDNI = parseInt(prompt("Introduce el número de DNI:"));

while (isNaN(numeroDNI) || numeroDNI <= 0) {
    numeroDNI = parseInt(prompt("Por favor, introduce un número de DNI válido:"));
}

const indiceLetra = numeroDNI % 23;
const letraDNI = letrasDNI.charAt(indiceLetra);


console.log("La letra del DNI para el número " + numeroDNI + " es: " + letraDNI);
