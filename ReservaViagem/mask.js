function mascaraa(mascaraInput) {

const tamanhoInputTelFixo = document.getElementById('telefone').maxLength
    let valorInputTelFixo = document.getElementById('telefone').value
    const mascaraTelFixo= {
        TelFixo : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
    };

    if(valorInputTelFixo.length == tamanhoInputTelFixo){
        document.getElementById('telefone').value = mascaraTelFixo[mascaraInput]
    }
}
