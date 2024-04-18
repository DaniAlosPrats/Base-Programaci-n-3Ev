let dados = [[], []];
let resultados = ["Jugador 1", "Jugador 2", "Empate"];


function rollDie() {
    return Math.floor(Math.random() * 6) + 1;
}


for (let i = 0; i < 10; i++) {
    let rollPlayer1 = rollDie();
    let rollPlayer2 = rollDie();

    
    if (rollPlayer1 > rollPlayer2) {
        dados[0].push(resultados[0]);
    } else if (rollPlayer2 > rollPlayer1) {
        dados[1].push(resultados[1]);
    } else {
        dados[0].push(resultados[2]);
        dados[1].push(resultados[2]);
    }
}


let winsPlayer1 = dados[0].filter(resultado => resultado === "Jugador 1").length;
let winsPlayer2 = dados[1].filter(resultado => resultado === "Jugador 2").length;


let winner;
if (winsPlayer1 > winsPlayer2) {
    winner = "Jugador 1";
} else if (winsPlayer2 > winsPlayer1) {
    winner = "Jugador 2";
} else {
    winner = "Empate";
}

let totalWins = winsPlayer1 + winsPlayer2;
let percentage = (totalWins / (10 * 2)) * 100; 

document.getElementById("salidas").innerHTML += "el ganador es  " + winner  + "<br>";

