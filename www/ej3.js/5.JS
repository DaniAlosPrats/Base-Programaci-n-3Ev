let letra = "TRWAGMYFPDXBNJZSQVHLCKE";
let letras = letra.split("");

let numero = parseInt(prompt("Introduce el número del DNI sin letras"));
let numeroletra = numero % 23;
let letraResultado = letras[numeroletra];

document.getElementById("entradas").innerHTML += "<p>Número introducido: " + numero + "</p>";
document.getElementById("salidas").innerHTML += "Número de DNI con letra: " + numero + letraResultado + "<br>";
