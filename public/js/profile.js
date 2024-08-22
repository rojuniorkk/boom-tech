function meu_callback(conteudo) {
    let RUA = document.getElementById("rua");
    let BAIRRO = document.getElementById("bairro");
    let CIDADE = document.getElementById("cidade");
    let ESTADO = document.getElementById("estado");

    if (!("erro" in conteudo)) {
        RUA.value = conteudo.logradouro;
        BAIRRO.value = conteudo.bairro;
        CIDADE.value = conteudo.localidade;

        ESTADO.querySelectorAll("option").forEach((option) => {
            if (option.value == conteudo.uf) {
                option.setAttribute("selected", "selected");
            } else {
                option.removeAttribute("selected");
            }
        });
    } else {
        let ERROR = document.getElementById("cep_error");
        ERROR.innerHTML = "CEP não encontrado";
        setTimeout(() => {
            ERROR.innerHTML = "";
        }, 2000);
    }
}

function validacep(valor) {
    var cep = valor.replace(/\D/g, "");
    let ERROR = document.getElementById("cep_error");

    if (cep != "") {
        var validacep = /^[0-9]{8}$/;

        if (validacep.test(cep)) {
            var script = document.createElement("script");
            script.src =
                "https://viacep.com.br/ws/" +
                cep +
                "/json/?callback=meu_callback";
            document.body.appendChild(script);
        } else {
            ERROR.innerHTML = "Esse CEP não é válido!";
            setTimeout(() => {
                ERROR.innerHTML = "";
            }, 2000);
        }
    }
}

let CEP_INPUT = document.getElementById("cep_input");

CEP_INPUT.addEventListener("blur", () => {
    validacep(CEP_INPUT.value);
});
