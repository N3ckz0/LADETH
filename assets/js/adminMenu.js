function loadDoc(doc) {

    let url = "views/app/admin/" + doc +".php";

    fetch (url)
    .then(x => x.text())
    .then(y => document.getElementById("container").innerHTML = y);
}

loadDoc('index');