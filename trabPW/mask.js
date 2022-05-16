function mascaraa(mascaraInput) {

    //CEP
    const tamanhoInputCEP = document.getElementById('CEP').maxLength
    let valorInputCEP = document.getElementById('CEP').value
    const mascaraCEP = {
        cep : valorInputCEP.replace(/[^\d]/g, "").replace(/^(\d{5})(\d{3}).*/, '$1-$2' )
    };

    if(valorInputCEP.length == tamanhoInputCEP){
        document.getElementById('CEP').value = mascaraCEP[mascaraInput]
    }
    
    //CPFaluno
    const tamanhoInputCPF = document.getElementById('CPF').maxLength
    let valorInputCPF = document.getElementById('CPF').value
    const mascaraCPF = {
        cpf : valorInputCPF.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
    };

    if(valorInputCPF.length == tamanhoInputCPF){
        document.getElementById('CPF').value = mascaraCPF[mascaraInput]
    }

     //CPFmae
    const tamanhoInputCPFmae = document.getElementById('CPFmae').maxLength
    let valorInputCPFmae = document.getElementById('CPFmae').value
    const mascaraCPFmae = {
        cpf : valorInputCPFmae.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
    };
    
    if(valorInputCPFmae.length == tamanhoInputCPFmae){
        document.getElementById('CPFmae').value = mascaraCPFmae[mascaraInput]
    }

    //CPFpai
    const tamanhoInputCPFpai = document.getElementById('CPFpai').maxLength
    let valorInputCPFpai = document.getElementById('CPFpai').value
    const mascaraCPFpai = {
        cpf : valorInputCPFpai.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
    };
    if(valorInputCPFpai.length == tamanhoInputCPFpai){
        document.getElementById('CPFpai').value = mascaraCPFpai[mascaraInput]
    }
    
    //CPF do Responsável
    const tamanhoInputCPFresp = document.getElementById('CPFresp').maxLength
    let valorInputCPFresp = document.getElementById('CPFresp').value
    const mascaraCPFresp = {
        cpf : valorInputCPFresp.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
    };
    
    if(valorInputCPFresp.length == tamanhoInputCPFresp){
        document.getElementById('CPFresp').value = mascaraCPFresp[mascaraInput]
    }

    //Celular da Mãe
    const tamanhoInputTelFixo = document.getElementById('CelularMae').maxLength
    let valorInputTelFixo = document.getElementById('CelularMae').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input', valorInput)
    const mascaraTelFixo= {
        TelFixo : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
    };

    if(valorInputTelFixo.length == tamanhoInputTelFixo){
        document.getElementById('CelularMae').value = mascaraTelFixo[mascaraInput]
    }
    
    //Celular do Pai
    const tamanhoInputTelFixopai = document.getElementById('CelularPai').maxLength
    let valorInputTelFixopai = document.getElementById('CelularPai').value
    const mascaraTelFixopai= {
        TelFixo : valorInputTelFixopai.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
    };
    if(valorInputTelFixopai.length == tamanhoInputTelFixopai){
        document.getElementById('CelularPai').value = mascaraTelFixopai[mascaraInput]
    }
    
    //Celular do Responsável
    const tamanhoInputTelFixolt = document.getElementById('CelularResp').maxLength
    let valorInputTelFixolt = document.getElementById('CelularResp').value
    const mascaraTelFixolt= {
        TelFixo : valorInputTelFixolt.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
    };
    if(valorInputTelFixolt.length == tamanhoInputTelFixolt){
        document.getElementById('CelularResp').value = mascaraTelFixolt[mascaraInput]
    }
    
    //Celular do Local de Trabalho
    const tamanhoInputTelFixoresp = document.getElementById('CelularLT').maxLength
    let valorInputTelFixoresp = document.getElementById('CelularLT').value
    const mascaraTelFixoresp= {
        TelFixo : valorInputTelFixoresp.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
    };
    if(valorInputTelFixoresp.length == tamanhoInputTelFixoresp){
        document.getElementById('CelularLT').value = mascaraTelFixoresp[mascaraInput]
    }

    //Nº Cartão do SUS
    const tamanhoInputSUS = document.getElementById('SUS').maxLength
    let valorInputSUS = document.getElementById('SUS').value
    const mascaraSUS = {
        sus : valorInputSUS.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{4})(\d{4})(\d{4}).*/, '$1 $2 $3 $4' )
    };

    if(valorInputSUS.length == tamanhoInputSUS){
        document.getElementById('SUS').value = mascaraSUS[mascaraInput]
    }

}
