<?php
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>
<h1> Login de funcionarios  </h1>

    <head> 
        <title>  Tela de login </title>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css">
        <!-- LINK PARA PHP\JS <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
        <!-- Adicionando Javascript --></head>

        <header>
            <!-- ADD CODIGO DO CABEÇALHO -->
        </header>
        <body>
            <?php
    if(isset($_POST['rg_fun']))
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
	               header("Location: agendamento.php");
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
             <h3> Logue-se </h3>

            <br><label for="rg_fun"> RG: </label>
            <input type="text" name="rg_fun"  id="rg_fun" placeholder="XX.XXX.XXX-X" >
            
            <br><div for="senha_fun"> Senha: <br/>
            <input type="password" name="senha_fun"></div><br/>  


                <button type="submit" > Logar </button>


</form>

    <footer>
        <!-- ADD CODIGO DO RODAPE -->
    </footer>
</body>
</html>        
