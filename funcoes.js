function voltarHome() {
    var x;
    var r = confirm("Tem certeza de voltar?");
    if (r == true) {
        x = window.setTimeout(location.href = 'index.html', 0)
    }
    else {
        x = "Você pressionou Cancelar!";
    } /* htjmtyjtyujty natalia fez essa cagada c: */
    document.getElementById("demo").innerHTML = x;
}