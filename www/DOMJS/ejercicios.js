document.addEventListener("DOMContentLoaded", count);

function main(){
    
}

function count(){
    let parrafos = document.getElementsByTagName('p');
    for(let i = 0; i<parrafos.length;i++){
        let parrafo = parrafos[i];
        let palabras =  parrafo.innerText.split(' ').length;
        var infoPalabras = document.createElement("span");
        infoPalabras.innerHTML = "<br><strong>Total palabras: " + palabras + "</strong>";
        parrafos[i].appendChild(infoPalabras);

    }
}

