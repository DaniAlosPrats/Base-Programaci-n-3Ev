let tarifaPorHora = 10; 
let totalPagado = 0;

let empleado = parseInt(prompt("Ingrese el número de empleados (N):"));

for (let i = 0; i < empleado; i++) {
    let horas = parseInt(prompt("Ingrese las horas trabajadas por el empleado " + (i + 1) + ":"));
    let sueldoSemana = horas * tarifaPorHora;
    totalPagado += sueldoSemana;
    document.getElementById("entradas").innerHTML += "Horas trabajadas por el empleado " + (i + 1) + ": " + horas + "<br>";
    document.getElementById("salidas").innerHTML += "El sueldo semanal del empleado " + (i + 1) + " es: $" + sueldoSemana + "<br>";
}

document.getElementById("salidas").innerHTML += "El total pagado por la empresa por los " + empleado + " empleados es: $" + total
