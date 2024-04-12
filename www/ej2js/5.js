let tarjeta = parseInt(prompt("¿Qué tarjeta tienes?"));
let limite = parseInt(prompt("¿Qué límite tienes?"));

if (tarjeta === 1) {
    limite = limite * 0.25;
} else if (tarjeta === 2) {
    limite = limite * 0.35;
} else if (tarjeta === 3) {
    limite = limite * 0.40;
} else {
    limite = limite * 0.50;
}

document.getElementById("entradas").innerHTML = "¿Qué tarjeta tienes?: " + tarjeta + "<br>";
document.getElementById("salidas").innerHTML = "Tu nuevo límite es: " + limite + "<br>";
