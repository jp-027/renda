
// abrir a proxima parte ou retornar a anterior do cadastro
//abrir a parte das senha e fechar as outras
function openSenha() {
   var i, campo, camposenha, camporenda;
   camporenda = document.getElementsByClassName("camporenda");
   for (i = 0; i < camporenda.length; i++) {
      camporenda[i].style.display = "none";
   }

   camposenha = document.getElementsByClassName("campo");
   for (i = 0; i < camposenha.length; i++) {
      camposenha[i].style.display = "none";
   }

   campo = document.getElementsByClassName("camposenha");
   for (i = 0; i < campo.length; i++) {
      campo[i].style.display = "block";
   }
}
//abrir a parte de renda e fechar as outras
function openRenda() {
   var i, campo, camposenha, camporenda;
   camporenda = document.getElementsByClassName("camporenda");
   for (i = 0; i < camporenda.length; i++) {
      camporenda[i].style.display = "block";
   }

   camposenha = document.getElementsByClassName("campo");
   for (i = 0; i < camposenha.length; i++) {
      camposenha[i].style.display = "none";
   }

   campo = document.getElementsByClassName("camposenha");
   for (i = 0; i < campo.length; i++) {
      campo[i].style.display = "none";
   }
}
//abrir a parte de dados pessoais e fechar as outras
function openCadastro() {
   var i, campo;
   campo = document.getElementsByClassName("campo");
   for (i = 0; i < campo.length; i++) {
      campo[i].style.display = "block";
   }

   campo = document.getElementsByClassName("camposenha");
   for (i = 0; i < campo.length; i++) {
      campo[i].style.display = "none";
   }
   camporenda = document.getElementsByClassName("camporenda");
   for (i = 0; i < camporenda.length; i++) {
      camporenda[i].style.display = "none";
   }

}

// exibir a pocentagem ao lado do input range

function porcent(novoValor) {
   document.getElementById("exibePorcent").innerHTML = novoValor;
}

function porcent1(novoValor) {
   document.getElementById("exibePorcent1").innerHTML = novoValor;
}

//confirmar senha

function validatePassword() {
   var pwd = document.getElementById("pwd"),
      cfpwd = document.getElementById("cfpwd");

   if (pwd.value != cfpwd.value) {
      cfpwd.setCustomValidity("Senhas diferentes!");
   } else {
      cfpwd.setCustomValidity('');
   }
}
pwd.onchange = validatePassword;
cfpwd.onkeyup = validatePassword;

/*------------------------------------------------------------------------------------------------*/
//Mascaras

function maskcpf() {
   var cpf = document.getElementById('cpf');

   if (cpf.value.length == 3 || cpf.value.length == 7) {
      cpf.value += ".";
   } else if (cpf.value.length == 11) {
      cpf.value += "-";
   }

}


function masktel() {
   var tel = document.getElementById('celular');

   if (tel.value.length == 0) {
      tel.value = "(" + tel.value;
   } else if (tel.value.length == 3) {
      tel.value += ") ";
   } else if (tel.value.length == 10) {
      tel.value += "-";
   }
}

function maskMoeda() {
   var elemento = document.getElementById('dinheiro');

   elemento.value = parseInt(elemento.value.replace(/[\D]+/g, ''));
   elemento.value = elemento.value + '';
   elemento.value = elemento.value.replace(/([0-9]{2})$/g, ",$1");

   if (elemento.value.length > 6) {
      elemento.value = elemento.value.replace(/([0-9]{3}),([0-9]{2})/g, ".$1,$2");
   }

   if (elemento.value.length > 10) {
      elemento.value = elemento.value.replace(/([0-9]{3}).([0-9]{3})/g, ".$1.$2");

   }
}

