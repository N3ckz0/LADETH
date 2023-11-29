function loadDoc(doc) {

    let url = "views/page/" + doc +".php";

    fetch (url)
    .then(x => x.text())
    .then(y => document.getElementById("container").innerHTML = y);
}

loadDoc('index');