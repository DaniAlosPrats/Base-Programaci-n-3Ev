let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let dias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
let totalFechas = 10;
let año = 2018;

for (let num = 0; num < totalFechas; num++) {
    let mes = Math.floor(Math.random() * 12); 
    let dia = Math.floor(Math.random() * dias[mes]) + 1;
    document.getElementById("salidas").innerHTML += "El dia es " + meses[mes] + " " + dia + "<br>"; 
}
