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

/* Mensagens de Alerta */

var mensagemDeAlerta = document.getElementById('mensagem')
var gatilhoDeMensagem = document.getElementById('btnSalvar')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  mensagemDeAlerta.append(wrapper)
}

if (gatilhoDeMensagem) {
  gatilhoDeMensagem.addEventListener('click', function () {
    alert('Informações enviadas com sucesso!', 'success')
  })
}