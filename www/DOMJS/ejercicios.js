document.addEventListener("DOMContentLoaded", main);

function main(){
    count(); 
    enlace(); 
    img();
    cambiocolor();
    tamañoDiv();
    //Ejercicio 7
//Esto en el main
let botones = document.getElementsByClassName("oculta");
for (let index = 0; index < botones.length; index++) {
    botones[index].addEventListener("click", function (e) {
        ocultar(e.currentTarget);
        e.stopPropagation();
    });
 
}
hora();
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


function ocultar(ele) {
    let hermano = ele.nextSibling;
while (hermano.nodeName !== "DIV") {
    hermano = hermano.nextSibling;
}
if (ele.innerHTML === "Mostrar") {
    hermano.style.display = "block";
    ele.innerHTML = "Ocultar";
} else {
    hermano.style.display = "none";
    ele.innerHTML = "Mostrar";
}
}

function hora(){
    let reloj = document.createElement("div");
    reloj.innerHTML = "00:00:00";
    reloj.id = "reloj";
    reloj.setAttribute("style", "position: absolute; display: none; background-color: red; color: white; border: 1px solid black;");
    document.body.appendChild(reloj);

    let parrafos = document.getElementsByTagName("p");
    for (let index = 0; index < parrafos.length; index++) {
        parrafos[index].addEventListener("mouseenter", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.display = "block";
            let d = new Date();
            reloj.innerHTML = (d.getHours()) + ":" + (d.getMinutes()) + ":" + (d.getSeconds());
        });

        parrafos[index].addEventListener("mousemove", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.left = (e.clientX + 5) + "px";
            reloj.style.top = (e.clientY - 5) + "px";
        });

        parrafos[index].addEventListener("mouseleave", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.display = "none";
            console.log(e.target, e.currentTarget);
        });
    }
}
    

