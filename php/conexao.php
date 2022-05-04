<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$dtbase = 'teste';

$conexao = mysqli_connect($host, $usuario, $senha, $dtbase);

if (!$conexao) {
   die(mysqli_connect_error());
}


/*<!--
   <p><?php echo $_SESSION['sobrenome']; ?></p>
   <p><?php echo $_SESSION['email']; ?></p>
   <p><?php echo $_SESSION['celular']; ?></p>
   <p><?php echo $_SESSION['cpf']; ?></p>
   <p><?php echo $_SESSION['genero']; ?></p>
   <p><?php echo $_SESSION['renda']; ?></p>
   <p><?php echo $_SESSION['lazer']; ?>%</p>
   <p><?php echo $_SESSION['investimento']; ?>%</p>
   <p><?php echo $_SESSION['nome']; ?></p>
   -->*/
