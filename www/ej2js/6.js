let kmPersona1 = 70;
let kmPersona2 = 150;

let velocidad = 1;
const distancia = kmPersona2 - kmPersona1;

if (distancia === 0) {
    document.getElementById("entradas").innerHTML = "Las dos personas ya están en el mismo kilómetro: Km " + kmPersona1 + "<br>";
} else {
    let tiempoEncuentro = distancia / velocidad;

    let kmEncuentro = kmPersona1 + (velocidad * tiempoEncuentro);
    let kmEncuentro2 = kmPersona2 +(velocidad * tiempoEncuentro);
    let Kmfinal = kmEncuentro2 - kmEncuentro;

    document.getElementById("salidas").innerHTML = "Las dos personas se encontrarán en el kilómetro " + Kmfinal + "<br>"+
    "km persona 1: " + kmEncuentro + "<br>" +
    "km persona 2 " + kmEncuentro2 + "<br>" ;
}
