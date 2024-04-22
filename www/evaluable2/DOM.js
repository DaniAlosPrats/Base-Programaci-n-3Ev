document.addEventListener("DOMContentLoaded", main);

function main() {
    let toggleButton = document.getElementById("unpaid-status");
    toggleButton.addEventListener("click", function () {
        Unpaid();
    });
    cambiocolor();
}

function Unpaid() {
    let rows = document.querySelectorAll(".unpaid-status"); 
    for (let i = 0; i < rows.length; i++) {
        let row = rows[i];
        if (row.style.display === "none" || row.style.display === "") {
            row.style.display = "table-row"; 
        } else {
            row.style.display = "none";
        }
    }
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
