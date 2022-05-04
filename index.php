<?php
include("php/protect.php");
include("php/conexao.php");
?>

<!DOCTYPE html>
<html>

<head>

   <title>
      Meu planajamento
   </title>
   <!-- link para css e js externo -->
   <link rel="stylesheet" type="text/css" href="css/css.css" media="screen">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
   <!-- cabeçalho -->
   <header>
      <!-- logo -->
      <figure><a href=""><img src="logo_Plano.png" alt="logo" id="logo"></a></figure>
      <!-- menu com links para as outras páginas-->
      <nav class="menu">
         <li> <a href="editar/editar.php"> Editar </a> </li>
         <li> <a href="" id="selecionado"> Meu plano </a> </li>
         <li> <a href=""> Sobre </a> </li>
         <li> <a href="php/logout.php"> Sair </a> </li>
         <li> <a href=""> <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="perfil" id="perfli"> </a> </li>
      </nav>
   </header>

   <h2 id="h2">Olá, <?php echo $_SESSION['nome']; ?></h2>
   <p hidden id="lazer"><?php echo $_SESSION['lazer']; ?></p>
   <p hidden id="investimento"><?php echo $_SESSION['investimento']; ?></p>
   <!-- titulo -->
   <h1>Meu plano</h1>

   <!-- div onde estará os dois gráficos -->
   <div class="div_graficos">
      <!-- espaço gráfico 1 -->
      <canvas id="planEdicao"></canvas>
      <!-- espaço gráfico 2 -->
      <canvas id="realEdicao"></canvas>
   </div>
   <!-- chama funçao que desenha os gráficos acima -->
   <script src="js/graficos.js"></script>


   <!-- listas cujo o titulo é o tipo de despesa e os itens são os gastos referentes a esta despesa -->
   <div class="listas">
      <!-- Gastos fixos, em azul -->
      <div class="L1">
         <h2>Gastos fixo</h2>
         <ul>
            <li>Gasto 1</li>
            <li>Gasto 2</li>
            <li>Gasto 3</li>
            <li>Gasto 4</li>
         </ul>
      </div>
      <!-- Gastos com lazer, em laranja -->
      <div class="L2">
         <h2>Gastos lazer</h2>
         <ul>
            <li>Gasto 1</li>
            <li>Gasto 2</li>
            <li>Gasto 3</li>
            <li>Gasto 4</li>
         </ul>
      </div>
      <!-- Investimento, em verde agua -->
      <div class="L3">
         <h2>Investimento</h2>
         <ul>
            <li>Investimento 1</li>
            <li>investimento 2</li>
            <li>investimento 3</li>
            <li>investimento 4</li>
         </ul>
      </div>
   </div>

   <!-- Rodapé -->
   <footer>
      <div class="div_footer">
         <h1>Contato</h1>
         <p> Telefone: 27996874594</p>
         <p> Email: plano@gmail.com</p>
         <p> Instagram: @plano </p>
      </div>
   </footer>

</body>