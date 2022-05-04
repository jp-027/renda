<?php

include('conexao.php');

if (isset($_POST['senha']) || isset($_POST['senha'])) {

   $email = $_POST['email'];
   $senha = $_POST['senha'];


   if (strlen($email) == 0) {
      echo "Preencha seu e-mail";
   } else if (strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
   } else {

      $sql_code = "SELECT * FROM teste WHERE email = '$email' LIMIT 1";
      $sql_query = $conexao->query($sql_code) or die($conexao->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1) {

         $usuario = $sql_query->fetch_assoc();

         if (password_verify($senha, $usuario['senha'])) {

            if (!isset($_SESSION)) {
               session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['sobrenome'] = $usuario['sobrenome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['celular'] = $usuario['celular'];
            $_SESSION['cpf'] = $usuario['cpf'];
            $_SESSION['nascimento'] = $usuario['nascimento'];
            $_SESSION['genero'] = $usuario['genero'];
            $_SESSION['renda'] = $usuario['renda'];
            $_SESSION['lazer'] = $usuario['lazer'];
            $_SESSION['investimento'] = $usuario['investimento'];
            $_SESSION['senha'] = $usuario['senha'];

            header("Location: ../");
         } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
         }
      } else {
         echo "Falha ao logar! E-mail ou senha incorretos";
      }
   }
}
