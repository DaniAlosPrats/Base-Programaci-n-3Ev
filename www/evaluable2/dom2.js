document.addEventListener("DOMContentLoaded", main);

function main() {

    cambiocolor();
    tamañoDiv();
}


function cambiocolor() {
    let dateElements = document.getElementsByTagName('th');
    for (let i = 0; i < dateElements.length; i++) {
        dateElements[i].addEventListener("click", function() {
            let backgroundColor = this.style.backgroundColor;
            if (backgroundColor === "rgb(255, 0, 0)" || backgroundColor === "blue") {
                this.style.backgroundColor = ""; 
            } else {
                this.style.backgroundColor = "blue"; 
            }
        });
    }
}
function tamañoDiv() {
    let fontSize = 16; 
    let contador = Math.pow(fontSize, 2);
    let content = document.getElementById('Titulo'); 

    content.addEventListener("click", function () {
        if (content.style.fontSize === "2em") {
            while (fontSize < contador) {
                fontSize += 1;
                content.style.fontSize = fontSize + "px";
            }
            content.style.fontSize = "3em";
        } else {
            content.style.fontSize = "2em";
        }
    });
}

