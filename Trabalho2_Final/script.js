function validarFormulario() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;

    if (nome === "" || email === "") {
        alert("Por favor, preencha todos os campos.");
        return false;
    }

    

    return true;
}
