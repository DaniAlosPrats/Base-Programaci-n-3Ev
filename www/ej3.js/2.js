let clasificación = ["Anna", "Oswaldo", "Raúl", "Celia", "María", "Antonio"];
console.log("Clasificación inicial:");
console.log(clasificación);

let Celia = clasificación.indexOf("Celia");
let Raul = clasificación.indexOf("Raúl");
clasificación.splice(Celia, 1);
clasificación.splice(Raúl, 0, "Celia");
console.log("Celia adelanta a Raúl:");
console.log(clasificación);

let Antonio = clasificación.indexOf("Antonio");
clasificación.splice(indexAntonio, 1);
console.log("Antonio es descalificado:");
console.log(clasificación);


let indexAna = clasificación.indexOf("Ana");
let indexOswaldo = clasificación.indexOf("Oswaldo");
clasificación.splice(indexOswaldo, 0, "Amaya", "Roberto");
console.log("Detrás de Ana y antes de Oswaldo se clasifican Roberto y Amaya:");
console.log(clasificación);


clasificación.unshift("Marta");
console.log("Hay una nueva participante que pasa a encabezar la clasificación: Marta:");
console.log(clasificación);