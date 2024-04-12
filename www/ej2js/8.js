let primerPago = 10;
let totalPagado = primerPago;
let pagoMensual = primerPago;

for (var i = 2; i <= 20; i++) {
    pagoMensual *= 2; 
    totalPagado += pagoMensual;
}
document.getElementById("entradas").innerHTML = "primer: " + primerPago + "<br>";
document.getElementById("salidas").innerHTML = "total " + totalPagado + "<br>";
