function loadDoc(doc, funcion) {
    const xhttp = new XMLHttpRequest();
    let url = "views/page/" + doc +".php";
    xhttp.onload = function () {
        funcion(this);
    }
    xhttp.open("GET", url, true);
    xhttp.send();
}
function funcion1(xhttp) {
    document.getElementById("container").innerHTML = xhttp.responseText;
}

loadDoc('index',funcion1);