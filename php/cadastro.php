<?php
include("conexao.php");

$nome = $_POST['nome'];
$sonome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['dtNasc'];
$genero = $_POST['genero'];
$renda = $_POST['renda'];
$lazer = $_POST['lazer'];
$invest = $_POST['invest'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

/*
print_r($nome);
print_r('<br>');
print_r($sonome);
print_r('<br>');
print_r($email);
print_r('<br>');
print_r($celular);
print_r('<br>');
print_r($cpf);
print_r('<br>');
print_r($nascimento);
print_r('<br>');
print_r($genero);
print_r('<br>');
print_r($renda);
print_r('<br>');
print_r($lazer . '%');
print_r('<br>');
print_r($invest . '%');
print_r('<br>');
print_r($senha);
*/



$sql = "INSERT INTO teste(nome,sobrenome,email,celular,cpf,nascimento,genero,renda,lazer,investimento,senha)
      VALUES('$nome','$sonome','$email','$celular','$cpf','$nascimento','$genero','$renda','$lazer','$invest','$senha')";

if (mysqli_query($conexao, $sql)) {
   header("Location: ../");
} else {
   echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
