<!-- PAGINA FAZ A TRIAGEM DO USUARIO -->
<?php
error_reporting(0);
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>
<h1> Tela Triagem </h1>

    <head> 
        <title>  Primeiros registros </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css">
        </head>

        <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>
        <body>
    
       <form  method="POST">
            <script src="jquery.min.js"></script>
             <h3> Dados para triagem </h3>
             <label>RG: </label>
              <input type="text" name="rg" id="rg" placeholder="Digite o RG do paciente" OnKeyUp="mescaraData(this);" maxlength="12"><br><br>

              <script>
              // colocar os / . etc nos campos automaticamente
            function mescaraData(campoData){
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
}
            $("#rg").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            
            </script>

              
              <input name="SendPesqUser" type="submit" value="Pesquisar">
            
            <?php
            include_once "conexao2.php";
            $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
            if($SendPesqUser){
              $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
              $result_usuario = "SELECT nome,rg,sexo FROM usuario WHERE rg LIKE '%$rg%'";
              $resultado_usuario = mysqli_query($conn, $result_usuario);
              while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                echo "Nome do paciente: " . $row_usuario['nome'] . "<br>";
                $_SESSION['rg'] =  $row_usuario['rg'];
                $_SESSION['nome'] =  $row_usuario['nome'];
                $_SESSION['sexo'] =  $row_usuario['sexo'];
            }

            }
                ?>

            <br><label for="diaTriagem">Dia da triagem: </label>
            <input type="text" name="diaTriagem"  id="diaTriagem" placeholder="00/00/0000" OnKeyUp="mascaraData(this);" maxlength="10" >

              <script>
              // colocar os / . etc nos campos automaticamente
                function mascaraData(campoData){
                          var data = campoData.value;
                          if (data.length == 2){
                              data = data + '/';
                              document.forms[0].diaTriagem.value = data;
                  return true;              
                          }
                          if (data.length == 5){
                              data = data + '/';
                              document.forms[0].diaTriagem.value = data;
                              return true;
                          }
                         
                     }

                $("#diaTriagem").on("input", function(){
              var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz*&%$#@!]/g;
              if(this.value.match(regexp)){
                $(this).val(this.value.replace(regexp,''));
              }
            });
            
            </script>
            
			<br><label for="peso"> Peso: </label>
            <input type="text" name="peso" id="peso" placeholder="Ex:45 Kg" OnKeyUp="moscaraData(this);" maxlength="7" >


            <script>
                function moscaraData(campoData){
                      var data = campoData.value;
                      if (data.length == 5){
                          data =  data + 'Kg ' ;
                          document.forms[0].peso.value = data;
              return true;              
                      }
}
            $("#peso").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGHhIiJjkLlMmNnOoPpQqrSsTtUuVvWwXxYyZz/*&%#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            
            </script>

            <br><label for="altura"> Altura: </label>
            <input type="text" name="altura"  id="altura" placeholder="Ex: 1.65 m" OnKeyUp="miscaraData(this);" maxlength="5">

            <script>
                function miscaraData(campoData){
                      var data = campoData.value;
                      if (data.length == 4){
                          data =  data + 'm' ;
                          document.forms[0].altura.value = data;
              return true;              
                      }
}
            $("#altura").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjkkLlMNnOoPpQqrSsTtUuVvWwXxYyZz/*&%#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            
            </script>


            <br><label for="sangue">Tipo sanguineo </label>
            <select name="sangue">
                <option value="">Selecione</option>
                <option name = "A+" value="A+" id="A+"> A+ </option>
                <option name = "A-" value="A-" id="A-" > A- </option>
                <option name = "B+" value="B+" id="B+"> B+ </option>
                <option name = "B-" value="B-" id="B-"> B- </option>
                <option name = "AB+" value="AB+" id="AB+"> AB+ </option>
                <option name = "AB-" value="AB-" id="AB-"> AB-</option>
                <option name = "O+" value="O+" id="O+" > O+ </option>
                <option name = "O-" value="O-" id="O-" > O- </option>
            </select>
     
             <br><label for="doe">Doença pré existente </label>
            <select name="doe" id="doe" value ="doe" onchange="show1()">
                <option value="">Selecione</option>
                <option value="sim" name="sim" id="sim"> Sim </option>
                <option value="nao" name="nao" id="nao"> Não </option>

            </select>

            <br><div id="doenca" value="doenca" name="doenca">Descreva suas doenças: <br/>
            <input type="text" name="doenca"></div><br/>   

	       <script>
             function show1(){
                if(document.getElementById('doe').value ==="nao"){
                   document.getElementById('doenca').style.display = 'none';
                }
                else{
                    document.getElementById('doenca').style.display = 'block';
                }
              };

            </script>

       

            <br><label for="med">Medicação constante? </label>
            <select name="med" id="med" value ="med" onchange="show2()">
                <option value="">Selecione</option>
                <option value="sim" name="sim" id="sim"> Sim </option>
                <option value="nao" name="nao" id="nao"> Não </option>
            </select> 

                <div id="medi" value="medi" name="medi">Descreva suas medicações: <br/>
                    <input type="text" id="medi"  name="medi"></div><br />   
            
            <script>
             function show2(){
                if(document.getElementById('med').value ==="nao"){
                   document.getElementById('medi').style.display = 'none';
                   
                }
                else{
                    document.getElementById('medi').style.display = 'block';
                }
              };

            </script>

            <br><label for="al"> O paciente tem alguma alergia? </label>
            <select name="al" id="al" value ="al" onchange="show()">
                <option value="">Selecione</option>
                <option value="sim" name="sim" id="sim"> Sim </option>
                <option value="nao" name="nao" id="nao"> Não </option>
            </select> 

                <div id="alergia" value="alergia" name="alergia"> Descreva as alergias do paciente: <br/>
                    <input type="text" id="alergia"  name="alergia"></div><br />   
            
            <script>
             function show(){
                if(document.getElementById('al').value ==="nao"){
                   document.getElementById('alergia').style.display = 'none';
                }
                else{
                    document.getElementById('alergia').style.display = 'block';
                }
              };

            </script>


            <br> <label> O pacinete é fumante?</label><br>
             <input type="radio" id="Sim" name="fum" value="Sim">
                <label for="fum">Sim</label><br>
                <input type="radio" id="nao" name="fum" value="nao">
                <label for="nao">Não</label><br>

             <br><label> O pacinete consume bebidas alcolicas?</label><br>
             <input type="radio" id="Sim" name="beb" value="Sim">
                <label for="fum">Sim</label><br>
                <input type="radio" id="nao" name="beb" value="nao">
                <label for="nao">Não</label><br>
            

            Foto para perfil: <input type="file" required name="arquivo">
            
            <?php

          include("conexao2.php");

          $msg = false;

          if(isset($_FILES['arquivo'])){

            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
            #$novo_nome = time() . $extensao; //define o nome do arquivo
            if($extensao == ".jpg" or $extensao == ".JPG"or $extensao == ".PNG" or $extensao == ".png"or $extensao == ".jpeg"or $extensao == ".JPEG"){
            $rg =  $_SESSION['rg'].".jpg";
            $novo_nome =  $_SESSION['rg'].".jpg";
            $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

            $sql_code = "INSERT INTO perfil (rg,codigo, img, data) VALUES('$rg','$rg', '$novo_nome', NOW())";

            if($conn->query($sql_code))
              $msg = "Arquivo enviado com sucesso!";
            else
              $msg = "Falha ao enviar arquivo.";

          }}
          else{echo "A foto enviada não é valida";}

        ?>

        
        <?php

                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                
                $imc = $peso / ($altura ** 2);
                
                if($_SESSION['sexo'] == 'F')
                {    
                    if($imc < 19)
                    {
                    	$imc = "Abaixo do peso";
                    	
                    }
                    if($imc >= 19 &&  $imc <= 23.9)
                    {
                    	$imc = "Normal";
                    	
                    }
                     if($imc >= 24 &&  $imc <= 28.9)
                    {
                    	$imc = "Obesidade leve";
                    	
                    }
                    if($imc >= 29 &&  $imc <= 38.9)
                    {
                    	$imc = "Obesidade moderada";
                    	
                    }
                    if($imc > 39)
                    {
                    	$imc = "Obesidade mórbida";
                    	
                    }
                }
                if($_SESSION['sexo'] == 'M')
                {    
                    if($imc < 20)
                    {
                        $imc = "Abaixo do peso";
                        
                    }
                    if($imc >= 20 &&  $imc <= 24.9)
                    {
                        $imc = "Normal";
                        
                    }
                     if($imc >= 25 &&  $imc <= 29.9)
                    {
                        $imc = "Obesidade leve";
                        
                    }
                    if($imc >= 30 &&  $imc <= 39.9)
                    {
                        $imc = "Obesidade moderada";
                        
                    }
                    if($imc > 40)
                    {
                        $imc = "Obesidade mórbida";
                        
                    }
                }
            ?>
<?php
    if($_POST['al'] == 'nao'){
        $alergia = "Não";
    }if($_POST['al'] == "sim" || $_POST['al'] == ""){ $alergia = $_POST['alergia'];}

    if($_POST['med'] == 'nao'){
        $medicacao = "Não";
    }if($_POST['med'] == "sim" || $_POST['med'] == ""){ $medicacao = $_POST['medi'];}

    if($_POST['doe'] == 'nao'){
        $doenca = "Não";
    }
    if($_POST['doe'] == "sim" || $_POST['doe'] == ""){ $doenca = $_POST['doenca'];}

    if($_POST['fum'] == "nao"){ $fumante = "0"; }
    else{ $fumante = "1";}

    if($_POST['beb'] = "nao"){ $bebidas = "0"; }
    else{ $bebidas =
     "1";}
   
    if(isset($_POST['cadastrar']))
    {
        $rg = $_SESSION['rg'];
        $dataTriagem = addslashes($_POST['diaTriagem']);
        $peso = addslashes($_POST['peso']);
        $altura = addslashes($_POST['altura']);
        $imc; 
        $TSanguineo = addslashes($_POST['sangue']);


        if(!empty($dataTriagem) && !empty($peso) && !empty($altura) && !empty($TSanguineo))
        {
            if(!$p->triagem($rg,$dataTriagem,$peso,$altura,$imc,$TSanguineo,$medicacao,$doenca,$alergia,$fumante,$bebidas))
            {
                echo "Erro!";
            }
            
        
        else
        {
            echo "Preencha todos os campos";
        }

    }
      }          

    ?>
                <input type="submit" value="cadastrar" name= "cadastrar">


</form>
</body>
    <footer> <!-- ADD CODIGO DO RODAPE --></footer>

</html>        