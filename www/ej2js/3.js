let clave = parseInt(prompt("¿Qué artículo quieres? 1, 2, 3, 4, 5 o 6"));
let gastoFab;
let manodeobra;
let materiaprima = parseInt(prompt("Coste materia prima"));

switch (clave) {
    case 3:
    case 4:
        manodeobra = materiaprima * 0.75;
        break;
    case 1:
    case 5:
        manodeobra = materiaprima * 0.80;
        break;
    case 2:
    case 6:
        manodeobra = materiaprima * 0.85;
        break;
    default:
        alert("No existe la clave.");
}

switch (clave) {
    case 2:
    case 5:
        gastoFab = materiaprima * 0.3;
        break;
    case 3:
    case 6:
        gastoFab = materiaprima * 0.35;
        break;
    case 1:
    case 4:
        gastoFab = materiaprima * 0.28;
        break;
    default:
        alert("No existe la clave.");
}

let costeproduccion = materiaprima + gastoFab + manodeobra;
let precioVenta = costeproduccion + (costeproduccion * 0.45);

document.getElementById("entradas").innerHTML = "Qué artículo quieres: " + clave + "<br>" +
    "Dinero de materia prima: " + materiaprima + "<br>";

document.getElementById("salidas").innerHTML =
    "Costo total sin cargo: " + costeproduccion + "€<br>" +
    "Cargo por tarjeta (45%): " + precioVenta + "€<br>";
