document.addEventListener("DOMContentLoaded", main);

function main() {
    cambiocolor();
}


function cambiocolor() {
    let dateElements = document.getElementsByTagName('th');
    for (let i = 0; i < dateElements.length; i++) {
        dateElements[i].addEventListener("click", function() {
            let backgroundColor = getComputedStyle(this).backgroundColor;
            if (backgroundColor === "rgb(255, 0, 0)") {
                this.style.backgroundColor = ""; 
            } else {
                this.style.backgroundColor = "red"; 
            }
        });
    }
}