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
        		<form method="POST"><center>
        			<script src="jquery.min.js"></script>

        	<h2> Quase lá ! </h2>
        		<h3> Confirme seus dados para finalizar o agendamento do exame desejado.</h3>
            
            <br><label for="Nome:">Nome: <?php echo $_SESSION['nome']?> </label>
            
      		<br><label for="rg"> RG: <?php echo $_SESSION['rg']?> </label><br>

      		<?php

      			echo "Deseja marcar um(a) ".$_SESSION['exame']. " dia ".$_SESSION['diaO']." (". $_SESSION['diaF']. ") às ".$_SESSION['horaU']." em ".$_SESSION['local']."?";

      		?>


      		<input type="submit" value="submit" name="bat">

      		<a href="agendamentoEx.php"> Voltar </a>
      		
      	<?php 
      	if(isset($_POST['bat']))
    {		$exameN = $_SESSION['exame'];
    		$maquina = $_SESSION['maquina'];
    		$local = $_SESSION['local'];
			$cod_pac = 	$_SESSION['rg'];
			$dia = 	$_SESSION['diaF'];
	    	$hora =	$_SESSION['horaU'];
	    	$diaO = $_SESSION['diaO'];

        if($p->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN))
        {
          echo "<script> alert('Exame agendado com sucesso');</script>";
          header("Location: perfil.php");
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
	  					$p->agendamentoSEG22($seg_hora1);
	    			}
	    		}
        
        $ter_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Terça-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoTER2($ter_hora1);
	    			}
	    		}

	    $qua_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Quarta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoQUA2($qua_hora1);
	    			}
	    		}

	    $qui_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Quinta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoQUI2($qui_hora1);
	    			}
	    		}

	    $sex_hora1 = $_SESSION['horaF'];
			   if($_SESSION['diaF'] == "Sexta-feira"){
			    if(isset($_POST['bat']))
	   				{
	  					$p->agendamentoSEX2($sex_hora1);
	    			}
	    		}
	    ?>
	</center></form></body>

<footer> <!-- ADD CODIGO DO RADAPE --> </footer>
	</html>