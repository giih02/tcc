<!-- PAGINA PARA O MÉDICO FAZER A SOLICITAÇÃO DE EXAMES -->
<?php
include_once "conexao2.php";
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title>  Pedidos de Exame </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        <!-- LINK PARA PHP\JS <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    </head>

        <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>
        <body>

          
     <h1> Solicitar exames </h1> 

<?php

    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
    if($SendPesqUser){
      $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
      $result_usuario = "SELECT * FROM consultas WHERE cod_pac LIKE '%$rg%'";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo "RG: " . $row_usuario['cod_pac'] . "<br>";

if(isset($_POST['data']))
    {
      $Esangue = (bool) rand(0, 1) ? "checked" : null;
      $urina  = (bool) rand(0, 1) ? "checked" : null;
      $fezes  = (bool) rand(0, 1) ? "checked" : null;


      $_POST['Esangue'] = ( isset($_POST['Esangue']) ) ? true : null;
      $_POST['urina']  = ( isset($_POST['urina']) )  ? true : null;
      $_POST['fezes']  = ( isset($_POST['fezes']) )  ? true : null;

        $nomeM = $_SESSION['nome_fun'];
        $codM = $_SESSION['crm'];
        $data = addslashes($_POST['data']);
        $Esangue = addslashes($_POST['Esangue']);
        $urina = addslashes($_POST['urina']);
        $fezes = addslashes($_POST['fezes']);
        $outros = addslashes($_POST['outros']);
  


          if(isset($_POST["insert"]))
        {
            if(!$p->exames2($rg,$data,$nomeM,$codM,$Esangue,$urina,$fezes,$outros))
            {
                echo "Erro!";
            }
}
             }}   }

    ?>

    
       <form method="POST"enctype="multipart/form-data">

</section>
        <section id="direita">
              <legend> Selecione os exames que deseja realizar: </legend>
          <div>
            <input type = "checkbox" name = "Esangue" value = "rotina">
            <label for = "Esangue">  exame de sangue </label>
          </div>
          <div>
            <input type = "checkbox" name = "urina" value = "rotina">
            <label for = "urina"> urina </ label>
          </div>
          <div>
            <input type = "checkbox" name = "fezes" value = "rotina">
            <label for = "fezes"> fezes </label>
          </div>

            <br><label for="outros"> Outros: </label>
            <input type="text" name="outros" placeholder="Circulação sanguínea" >

            <br><label for="data"> Data do pedido </label>
            <input type="text" name="data" placeholder="insira a data atual" >

            <input type="submit" name="insert" value="submit">

  </section>
</form>
</body>

      <footer> <!--ADD CODIGO DO RODAPE --> </footer>
</html>
<
