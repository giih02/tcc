<?php
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>
<h1> Login de funcionarios  </h1>

    <head> 
        <title>  Tela de login </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css">
    </head>

        <header>
            <!-- ADD CODIGO DO CABEÇALHO -->
        </header>
        <body>
             <style type="text/css"> 
            h1{ 
              font-family:Didot, serif;
              text-align: center;
                }

            label { 
              font-family:Didot, serif;
              text-align: center;
              font-size: 20px;
          }
          input { 
              font-family:Didot, serif;
              text-align: center;
              font-size: 16px;
          }
          input.enviar{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
        }


            </style>
            <?php
    if(isset($_POST['botao']))
    {
        $rg_fun = addslashes($_POST['rg_fun']);
        $senha_fun = addslashes($_POST['senha_fun']);

        if(!empty($rg_fun) && !empty($senha_fun) )
        {
        	 $p -> conecta("tcc","localhost","root","");
        	if($p->msgErro == "")
        	{
	            if($p -> login2($rg_fun,$senha_fun))
	            {   
	               header("Location: perfilF.php");
	            }
	            
	            if($p->msgErro == !empty($msgErro)){
	            	echo "Senha ou RG incorretos. Tente novamente";
	            }
            
        }
        else{
        	echo "erro: ".$u->msgErro;
        }
    }
        else
        {
            echo "Preencha todos os campos";
        }



    }?>
              
    
       <form method="POST">
         <script src="jquery.min.js"></script> <center>
             <h3> Logue-se </h3>

            <br><label for="rg_fun"> RG: </label>
            <br><input type="text" name="rg_fun"  id="rg_fun" placeholder="XX.XXX.XXX-X"  OnKeyUp="mascaraData(this);" maxlength="12" >
            
            <br><label for="senha"> Senha: 
            <br><input type="password" name="senha"></div><br/>  


             <br>   <input type="submit" name="botao" value="Logar-me" class="enviar"> </input>
             </center>
                 <script>
              // colocar os / . etc nos campos automaticamente
    function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '.';
                  document.forms[0].rg_fun.value = data;
      return true;              
              }
              if (data.length == 6){
                  data = data + '.';
                  document.forms[0].rg_fun.value = data;
                  return true;
              }
              if (data.length == 10){
                  data = data + '-';
                  document.forms[0].rg_fun.value = data;
                  return true;
              }
         }

    $("#rg_fun").on("input", function(){
  var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!<>,^~}{)(|)}]/g;
  if(this.value.match(regexp)){
    $(this).val(this.value.replace(regexp,''));
  }
});
            
            </script>


</form>

    <footer>
        <!-- ADD CODIGO DO RODAPE -->
    </footer>
</body>
</html>        
