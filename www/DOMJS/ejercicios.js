document.addEventListener("DOMContentLoaded", main);

function main(){
    count(); 
    enlace(); 
    img();
    cambiocolor();
    tamañoDiv();
 
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
function enlace(){
    let parrafos = document.getElementsByTagName('p');
    for(let i = 0; i<parrafos.length;i++){
    let palabraNulla = parrafos[i].textContent;
    if (palabraNulla = "nulla"){
        parrafos[i].innerHTML = parrafos[i].innerHTML.replace('nulla', '<a href="http://google.com">nulla</a>');
    }
    }

}
function img(){
   
    let H1 = document.getElementsByTagName("h1");
    for (let i = 0; i < H1.length; i++) {
        let imagen = document.createElement('img');
        imagen.src = "https://lledogrupo.com/wp-content/uploads/2019/01/star-256.png";
        imagen.style.width = "10px";
        imagen.style.marginLeft = "10px";
        H1[i].appendChild(imagen);
    }
    
}

function cambiocolor() {
    
    document.getElementById('abstract').addEventListener("click", function() {
        let abstract = document.getElementById('abstract');
        if (abstract.style.backgroundColor === "red") {
            abstract.style.backgroundColor = ""; 
        } else {
            abstract.style.backgroundColor = "red"; 
        }
    });
  }

  function tamañoDiv() {
    let fontSize = 16; 
    let contador = Math.pow(fontSize, 2);
    let content = document.getElementById('content');

    content.addEventListener("click", function () {
        if (content.style.fontSize === "2em") {
            while (fontSize < contador) {
                fontSize += 1;
                content.style.fontSize = fontSize + "px";
            }
            content.style.fontSize = "1em";
        } else {
            content.style.fontSize = "2em";
        }
    });
}


function ocultar() {
    let oculta = document.getElementsByClassName("oculta");
    content.addEventListener("click", function(){});
   
       
    }

