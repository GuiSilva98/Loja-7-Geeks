function voltarHome() {
    var x;
    var r = confirm("Tem certeza de voltar?");
    if (r == true) {
        x = window.setTimeout(location.href = 'index.php', 0)
    }
    else {
        x = "Você pressionou Cancelar!";
    } /* htjmtyjtyujty natalia fez essa cagada c: */
    document.getElementById("demo").innerHTML = x;
}

function checar(){
	if(document.getElementById("txtnome").value==""|| document.getElementsById("txtcpf").value=="" || document.getElementsById("txtdatanasc").value=="" || document.getElementsById("txtfonecasa").value=="" || document.getElementsById("txtcelular").value=="" || document.getElementById("txtemail").value=="" || document.getElementById("txtsenha").value=="" || document.getElementById("txtconfsenha").value=="") {
		alert("Preencha todos os campos!");
	}

}
function validarSenha() {
    senha1 = document.cad.txtsenha.value
    senha2 = document.cad.txtconfsenha.value

    if (senha1 !== senha2){
        alert("SENHAS DIFERENTES");
        document.cad.txtsenha.value = "";
        document.cad.txtconfsenha.value = "";
    }
}
