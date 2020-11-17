<?php
error_reporting(0);
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
session_start();
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
        		<form method="POST"> <center>

        	<h2> Quase lá ! </h2>
        		<h1> Confirme seus dados para finalizar a consulta.</h1>
            
            <br><label for="Nome:">Nome: <?php echo $_SESSION['nome']?> </label>
            
      		<br><label for="rg"> RG: <?php echo $_SESSION['rg']?> </label><br>

      		<?php

      			echo "Deseja marcar uma consulta na ". $_SESSION['diaF']. " às ".$_SESSION['horaU']."?";

      		?>


      		<h1> Não esqueca de verificar seus dados antes de confirmar a consulta. </h1>

      		<input type="submit" value="submit" name="bat">

      		<a href="agendamentoUS.php"> Voltar </a>
      		
      	<?php 
      	if(isset($_POST['bat']))
    {
    		$cod_med = $_SESSION['codM'];
			$cod_pac = 	$_SESSION['rg'];
			$dia = 	$_SESSION['diaF'];
	    	$hora =	$_SESSION['horaU'];
	    	$diaO = $_SESSION['diaO'] 

        if(!$p->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora,$diaO))
        {
          echo "erro";
        }
        
      }
      else
      {
        echo "Preencha todos os campos";
       }

				
      	$seg_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Segunda-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoSEG($seg_hora1);
	    			}
	    		}
        
        $ter_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Terça-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoTER($ter_hora1);
	    			}
	    		}

	    $qua_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Quarta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoQUA($qua_hora1);
	    			}
	    		}

	    $qui_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Quinta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoQUI($qui_hora1);
	    			}
	    		}

	    $sex_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Sexta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoSEX($sex_hora1);
	    			}
	    		}
	    ?>

	    </form></center>
</body>

      <footer> <!--ADD CODIGO DO RODAPE --> </footer>
</html>
