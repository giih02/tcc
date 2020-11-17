<!--Está é a pagina onde o usuario vai fazer a primeira pesquisa para a consulta-->
<?php
error_reporting(0);
session_start();
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title> Agendamento de consultas </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        <!-- LINK PARA PHP\JS <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
        </head>
        <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>

        <body>

    <table>
        <tr>
        <td><a href="home.php"> Pagina principal </a></td>
        <td><a href="perfil.php"> Meu perfil </a></td>
        <td><a href="ubs.php>"> Encontrar UBS </a> </td>
        <td><a href="logout.php"> sair </a> </td>

        </tr>

    </table>
    <form  method="POST">
      <h1> Selecione a especialidade desejada : 

            <select name="especialidade">
                <option value="">Selecione</option>
                <option value="Dentista"> Dentista </option>
                <option value="Ginecologista" > Ginecologista</option>
                <option value="Clinico geral" > Clínico geral </option>
                <option value="Pediatra"> Pediatra </option>
                <option value="Psicologos"> Psicólogos </option>
                <option value="oftalmologista"> Oftalmologista</option>
                <option value="otorrinolaringologia"> Otorrinolaringologia </option>
            </select>
      
      <input name="SendPesqUser" type="submit" value="Pesquisar"><br>
    
    
    <?php
    echo "<h1> Clique na imagem do especialista no qual você deseja se consultar </h1>";
    $_SESSION['especialidade'] =  $_POST['especialidade'];
    include_once "conexao2.php";
    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
    if($SendPesqUser){
      $rg = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
      $result_usuario = "SELECT * FROM funcionarios WHERE cargo = '$_SESSION[especialidade]'";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        
        echo "Doutor(a): " . $row_usuario['nome_fun'] ."<br>" . $_SESSION['especialidade'];?> <a href="agendamentoUS.php">

    <div class="circle">
      <img src="upload/<?php  echo $row_usuario['rg_fun']; ?>.jpg" width=200 height=200 style ="border-radius: 70%;" >
      <img><br>
    </div>
        <?php $_SESSION['codM'] =  $row_usuario['crm']; 
        $p-> buscarDados3();
}      
  }
    ?>            

      

</form>

   </body>
   <footer>
      <!-- ADD CODIGO DO RODAPE -->
   </footer>
</html>
