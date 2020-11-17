<?php
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title>  primeiros registros </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        </head>
        
        <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>
        
        <body>
            <form method="POST" >
              <script src="jquery.min.js"></script> <center>
              
          
     <h1> Anotações medicas  </h1> 


        <br><label for="rg"> RG: </label>
        <br><input type="text" name="rg"  id="rg" placeholder="XX.XXX.XXX-X"  OnKeyUp="mascaraData(this);" maxlength="12" >

       <script>
              // colocar os / . etc nos campos automaticamente
    function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '.';
                  document.forms[0].rg.value = data;
      return true;              
              }
              if (data.length == 6){
                  data = data + '.';
                  document.forms[0].rg.value = data;
                  return true;
              }
              if (data.length == 10){
                  data = data + '-';
                  document.forms[0].rg.value = data;
                  return true;
              }
         

        $("#rg").on("input", function(){
      var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz]/g;
      if(this.value.match(regexp)){
        $(this).val(this.value.replace(regexp,''));
      }
}); }
            
            </script>
      
    <br>  <input name="SendPesqUser" type="submit" value="Pesquisar">
    
    <?php
    include_once "conexao2.php";
    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
    if($SendPesqUser){
      $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
      $result_usuario = "SELECT * FROM consultas WHERE cod_pac LIKE '%$rg%' AND cod_med = '$_SESSION[crm]'";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
        echo "RG: " . $row_usuario['cod_pac'] . "<br>";
        $_SESSION['rg_p'] =  $row_usuario['cod_pac'];}}

      if($SendPesqUser){
      $result_usuario3 = "SELECT * FROM usuario WHERE rg LIKE '%$rg%'";
      $resultado_usuario3 = mysqli_query($conn, $result_usuario3);
      while($row_usuario3 = mysqli_fetch_assoc($resultado_usuario3)){
        echo "Nome: " . $row_usuario3['nome'] . "<br>";
        $data = $_POST['data'];

        // separando yyyy, mm, ddd
        list($dia, $mes, $ano) = explode('/', $row_usuario3['nascimento']);

        // data atual
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

        // cálculo
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
         echo "Idade: $idade Anos". "<br>";
        
          }}
        if($SendPesqUser){
          $result_usuario2 = "SELECT * FROM triagem WHERE rg LIKE '%$rg%'";
          $resultado_usuario2 = mysqli_query($conn, $result_usuario2);
          while($row_usuario2 = mysqli_fetch_assoc($resultado_usuario2)){
          echo "IMC: " . $row_usuario2['imc'] . "<br>";
          echo "Faz uso de medicação constante: " . $row_usuario2['medicacao'] . "<br>";
          echo "Doeça pré existente: " . $row_usuario2['doenca'] . "<br>";
          echo "Tem alergias: " . $row_usuario2['alergia'] . "<br>";
          if($row_usuario2['fumante'] = "0"){ echo "Não é fumante". "<br>"; } else {  
          echo " É fumante"  . "<br>";}
          if($row_usuario2['bebida'] = "0"){ echo "Não faz o consumo de bebidas alcolicas ". "<br>"; } else { 
          echo "Faz uso de bebidas alcolicas " . "<br>";}
      }
    }
    
    ?>      

            <br><label for="consulta">Dia da consulta: </label>
            <input type="text" name="consulta"  id="consulta" OnKeyUp="mescaraData(this);" placeholder="00/00/0000" maxlength="10">

               <script>
              // colocar os / . etc nos campos automaticamente
    function mescaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '/';
                  document.forms[0].consulta.value = data;
      return true;              
              }
              if (data.length == 5){
                  data = data + '/';
                  document.forms[0].consulta.value = data;
                  return true;
              }
             
    $("#consulta").on("input", function(){
  var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz*&%$#@!]/g;
  if(this.value.match(regexp)){
    $(this).val(this.value.replace(regexp,''));
  }
});}
            
            </script>
            
            <br><label for="reclamacoes"> Sintomas ou reclamações: </label>
            <textarea name="reclamacoes" id="reclamacoes" placeholder="" placeholder="" rows="10" cols="40"></textarea>

            <br><label for="consideracoes"> Considerações médicas: </label>
            <textarea name="consideracoes"  id="consideracoes" placeholder="" rows="10" cols="40"></textarea>  

            <br><label for="medicamentos"> Indicação de medicamento: </label>
            <textarea name="medicamentos"  id="medicamentos" placeholder="" rows="10" cols="40"></textarea>            

           <br> <input type="submit" name="insert" value="submit">

            <?php
         
  if(isset($_POST['insert']))
    {
      $rg = $_SESSION['rg_p'];
      $Dconsulta = addslashes($_POST['consulta']);
      $nomeM = $_SESSION['nome_fun'];
      $reclamacoes = addslashes($_POST['reclamacoes']);
      $consideracoes = addslashes($_POST['consideracoes']);
      $medicamentos = addslashes($_POST['medicamentos']);    

      if(!empty($Dconsulta) && !empty($reclamacoes) && !empty($consideracoes)&& !empty($medicamentos))
      {
        if(!$p->anotacoes($rg,$Dconsulta,$nomeM,$reclamacoes,$consideracoes,$medicamentos))
        {
          echo "erro";
        }
        
      }
      else
      {
        echo "Preencha todos os campos";
    
 }
}
?>

<br>  <a href="exames.php"> Solicitar exame </a>
  <a href="remedio.php"> Receitar remédio </a>
     

               </form></center>
   </body>
   <footer> <!-- CODIGO DO FOOTER--></footer>
</html>
