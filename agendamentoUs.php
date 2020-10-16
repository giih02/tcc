<?php
session_start();
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>
<h1> AGENDAMENTO </h1>

    <head> 
        <title>  Agendamento de horarios </title>
        <!--<?php header("Location: confirma.php");?>-->
        <meta charset= "utf-8" >
        <?php $p->buscarDados3(); ?>
        
     
    </head>
        <header><!--CODIGO DO CABECALHO--></header>
    <body>
        <script src="jquery.min.js"></script>
    	<form method="POST"enctype="multipart/form-data">


    	<?php
####################PUXAR AS VARIAVEIS DAS SESSIONS#######################################################################
    	
        $segunda0 = $_SESSION['segunda'];
    	$terca0 = $_SESSION['terca'];
        $quarta0 = $_SESSION['quarta'];
        $quinta0 = $_SESSION['quinta'];
        $sexta0 = $_SESSION['sexta'];

###################HORARIOS################################################################################################
    	#SEGUNDA
        $p = $_SESSION['hora1'];
    	$s = $_SESSION['hora2'];
		$t= $_SESSION['hora3'];
		$q = $_SESSION['hora4'];
    	$qu= $_SESSION['hora5'];
    	$se = $_SESSION['hora6'];
		$set = $_SESSION['hora7'];
		$o = $_SESSION['hora8'];
    	$n= $_SESSION['hora9'];
    	$d = $_SESSION['hora10'];
		$ul = $_SESSION['hora11'];
        $ds = $_SESSION['hora12'];

###########terca feira horarios############################################################################################
    	
        $pp = $_SESSION['hora11'];
    	$ss = $_SESSION['hora22'];
		$tt = $_SESSION['hora33'];
		$qq = $_SESSION['hora44'];
    	$quu= $_SESSION['hora55'];
    	$see = $_SESSION['hora66'];
		$sett = $_SESSION['hora77'];
		$oo = $_SESSION['hora88'];
    	$nn = $_SESSION['hora99'];
    	$dd = $_SESSION['hora100'];
		$ull = $_SESSION['hora111'];
        $ddz = $_SESSION['hora122'];

###########QUARTA feira horarios############################################################################################
        
        $pq = $_SESSION['hora111'];
        $sq = $_SESSION['hora222'];
        $tq= $_SESSION['hora333'];
        $qqq = $_SESSION['hora444'];
        $quq= $_SESSION['hora555'];
        $seq = $_SESSION['hora666'];
        $setq = $_SESSION['hora777'];
        $oq = $_SESSION['hora888'];
        $nq = $_SESSION['hora999'];
        $dq = $_SESSION['hora1000'];
        $ulq = $_SESSION['hora1111'];
        $ddq = $_SESSION['hora1222'];

###########QUINTA feira horarios############################################################################################
        
        $pw = $_SESSION['hora1111'];
        $sw = $_SESSION['hora2222'];
        $tw = $_SESSION['hora3333'];
        $qw = $_SESSION['hora4444'];
        $quw = $_SESSION['hora5555'];
        $sew = $_SESSION['hora6666'];
        $setw = $_SESSION['hora7777'];
        $ow = $_SESSION['hora8888'];
        $nw = $_SESSION['hora9999'];
        $dw = $_SESSION['hora10000'];
        $ulw = $_SESSION['hora11111'];
        $ddw = $_SESSION['hora12222'];

###########SEXTA feira horarios############################################################################################
        
        $ps = $_SESSION['hora11111'];
        $ss = $_SESSION['hora22222'];
        $ts = $_SESSION['hora33333'];
        $qs = $_SESSION['hora44444'];
        $qus = $_SESSION['hora55555'];
        $ses = $_SESSION['hora66666'];
        $sets = $_SESSION['hora77777'];
        $os = $_SESSION['hora88888'];
        $ns = $_SESSION['hora99999'];
        $ds = $_SESSION['hora100000'];
        $uls = $_SESSION['hora111111'];
        $dds = $_SESSION['hora122222'];

		?>
    	<table>
	   <tr><button id="segunda"> Segunda - feira</button>
	    <td>    <input type='submit'id="prim" value="8:00" name="8:00">  
        <td>    <input  type='submit'id="segu" value="8:30" name="8:30">  
        <td>    <input  type='submit'id="terc" value="9:00" name="9:00"> 
        <td>    <input  type='submit'id="quar" value="10:00" name="10:00"> 
        <td>    <input  type='submit'id="quin" value="10:30" name="10:30"> 
        <td>    <input  type='submit'id="sext" value="11:00" name="11:00"> 
        <td>    <input  type='submit'id="seti" value="11:30" name="11:30"> 
        <td>    <input  type='submit'id="oita" value="13:00 " name="13:00"> 
        <td>    <input  type='submit'id="nono" value="13:30" name="13:30"> 
        <td>    <input  type='submit'id="deci" value="14:00" name="14:00"> 
        <td>    <input type='submit'id="ulti" value="14:30" name="15:30">   
        <td>    <input type='submit'id="doze" value="15:00" name="15:00">   <tr>
	    </table>

        	<table>
	<tr><button id="terca"> Terça - feira</button>
	    <td>    <input type='submit'id="prim2" value="8:00" name="8:00t">  
	    <td>	<input  type='submit'id="segu2" value="8:30" name="8:30t">  
	    <td>	<input  type='submit'id="terc2" value="9:00" name="9:00t"> 
	    <td>	<input  type='submit'id="quar2" value="10:00" name="10:00t"> 
	    <td>	<input  type='submit'id="quin2" value="10:30" name="10:30t"> 
	    <td>	<input  type='submit'id="sext2" value="11:00" name="11:00t"> 
	    <td>	<input  type='submit'id="seti2" value="11:30" name="11:30t"> 
	    <td>	<input  type='submit'id="oita2" value="13:00 " name="13:00t"> 
	    <td>	<input  type='submit'id="nono2" value="13:30" name="13:30t"> 
	    <td>	<input  type='submit'id="deci2" value="14:00" name="14:00t"> 
	    <td>	<input type='submit'id="ulti2" value="14:30" name="15:30t">   
        <td>    <input type='submit'id="doze2" value="15:00" name="15:00t">   <tr>
	    </table>

	<table>
	<tr><button id="quarta"> Quarta - feira</button>
	    <td>    <input type='submit'id="prim3" value="8:00" name="8:00q">  
        <td>    <input  type='submit'id="segu3" value="8:30" name="8:30q">  
        <td>    <input  type='submit'id="terc3" value="9:00" name="9:00q"> 
        <td>    <input  type='submit'id="quar3" value="10:00" name="10:00q"> 
        <td>    <input  type='submit'id="quin3" value="10:30" name="10:30q"> 
        <td>    <input  type='submit'id="sext3" value="11:00" name="11:00q"> 
        <td>    <input  type='submit'id="seti3" value="11:30" name="11:30q"> 
        <td>    <input  type='submit'id="oita3" value="13:00 " name="13:00q"> 
        <td>    <input  type='submit'id="nono3" value="13:30" name="13:30q"> 
        <td>    <input  type='submit'id="deci3" value="14:00" name="14:00q"> 
        <td>    <input type='submit'id="ulti3" value="14:30" name="15:30q">   
        <td>    <input type='submit'id="doze3" value="15:00" name="15:00q">   <tr>
	    </table>

	<table>
	<tr><button id="quinta"> Quinta - feira</button>
	    <td>    <input type='submit'id="prim4" value="8:00" name="8:00w">  
        <td>    <input  type='submit'id="segu4" value="8:30" name="8:30w">  
        <td>    <input  type='submit'id="terc4" value="9:00" name="9:00w"> 
        <td>    <input  type='submit'id="quar4" value="10:00" name="10:00w"> 
        <td>    <input  type='submit'id="quin4" value="10:30" name="10:30w"> 
        <td>    <input  type='submit'id="sext4" value="11:00" name="11:00w"> 
        <td>    <input  type='submit'id="seti4" value="11:30" name="11:30w"> 
        <td>    <input  type='submit'id="oita4" value="13:00 " name="13:00w"> 
        <td>    <input  type='submit'id="nono4" value="13:30" name="13:30w"> 
        <td>    <input  type='submit'id="deci4" value="14:00" name="14:00w"> 
        <td>    <input type='submit'id="ulti4" value="14:30" name="15:30w">   
        <td>    <input type='submit'id="doze4" value="15:00" name="15:00w">   <tr>
	    </table>

	<table>
	<tr><button id="sexta"> Sexta - feira</button>
	     <td>    <input type='submit'id="prim5" value="8:00" name="8:00s">  
        <td>    <input  type='submit'id="segu5" value="8:30" name="8:30s">  
        <td>    <input  type='submit'id="terc5" value="9:00" name="9:00s"> 
        <td>    <input  type='submit'id="quar5" value="10:00" name="10:00s"> 
        <td>    <input  type='submit'id="quin5" value="10:30" name="10:30s"> 
        <td>    <input  type='submit'id="sext5" value="11:00" name="11:00s"> 
        <td>    <input  type='submit'id="seti5" value="11:30" name="11:30s"> 
        <td>    <input  type='submit'id="oita5" value="13:00 " name="13:00s"> 
        <td>    <input  type='submit'id="nono5" value="13:30" name="13:30s"> 
        <td>    <input  type='submit'id="deci5" value="14:00" name="14:00s"> 
        <td>    <input type='submit'id="ulti5" value="14:30" name="15:30s">   
        <td>    <input type='submit'id="doze5" value="15:00" name="15:00s">   <tr>
	    </table>

    <script>
 		var seg = "<?php echo $segunda0;?>";
 		var ter = "<?php echo $terca0;?>";
        var qua = "<?php echo $quarta0;?>";
        var qui = "<?php echo $quinta0;?>";
        var sex = "<?php echo $sexta0;?>";

 		 $("#segunda").ready(function(){
        	if(seg == 0){
        		document.getElementById("segunda").disabled = true;
        		document.getElementById("segunda").style.backgroundColor = "#B22222"; //cor VERMELHA do botão caso ele SEJA valido

        	}
        	else {
        		document.getElementById("segunda").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        	}
        	});
 		 $("#terca").ready(function(){
        	if(ter == 0){
        		document.getElementById("terca").disabled = true;
        		document.getElementById("terca").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("terca").style.backgroundColor = "#008000";
        	}
        	});
         $("#quarta").ready(function(){
            if(qua == 0){
                document.getElementById("quarta").disabled = true;
                document.getElementById("quarta").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("quarta").style.backgroundColor = "#008000";
            }
            });
         $("#quinta").ready(function(){
            if(qui == 0){
                document.getElementById("quinta").disabled = true;
                document.getElementById("quinta").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("quinta").style.backgroundColor = "#008000";
            }
            });
         $("#sexta").ready(function(){
            if(sex == 0){
                document.getElementById("sexta").disabled = true;
                document.getElementById("sexta").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("sexta").style.backgroundColor = "#008000";
            }
            });
    </script> 

    <script>
/**********PEGANDO VARIAVEL DO PHO E LEVANDO PRO JAVASCRIPT************************************************************/
        /*HORARIOS DA SEGUNDA*/
 		 var prim = "<?php echo $p;?>";
 		 var segu = "<?php echo $s;?>";
 		 var terc = "<?php echo $t;?>";
 		 var quar = "<?php echo $q;?>";
 		 var quin = "<?php echo $qu;?>";
 		 var sext = "<?php echo $se;?>";
 		 var seti = "<?php echo $set;?>";
 		 var oita = "<?php echo $o;?>";
 		 var nono = "<?php echo $n;?>";
 		 var deci = "<?php echo $d;?>";
 		 var ulti = "<?php echo $ul;?>";
         var doz = "<?php echo $d;?>";

/*****************************************TERÇA HORARIOS************************************************************/
 		 var prim2 = "<?php echo $pp;?>";
 		 var segu2 = "<?php echo $ss;?>";
 		 var terc2 = "<?php echo $tt;?>";
 		 var quar2 = "<?php echo $qq;?>";
 		 var quin2 = "<?php echo $quu;?>";
 		 var sext2 = "<?php echo $see;?>";
 		 var seti2 = "<?php echo $sett;?>";
 		 var oita2 = "<?php echo $oo;?>";
 		 var nono2 = "<?php echo $nn;?>";
 		 var deci2 = "<?php echo $dd;?>";
 		 var ulti2 = "<?php echo $ull;?>";
         var doz2 = "<?php echo $dd;?>";

/*****************************************QUARTA HORARIOS************************************************************/
         var prim3 = "<?php echo $pq;?>";
         var segu3 = "<?php echo $sq;?>";
         var terc3 = "<?php echo $tq;?>";
         var quar3 = "<?php echo $qqq;?>";
         var quin3 = "<?php echo $quq;?>";
         var sext3 = "<?php echo $seq;?>";
         var seti3 = "<?php echo $setq;?>";
         var oita3 = "<?php echo $oq;?>";
         var nono3 = "<?php echo $nq;?>";
         var deci3 = "<?php echo $dq;?>";
         var ulti3 = "<?php echo $ulq;?>";
         var doz3 = "<?php echo $ddq;?>";

/*****************************************QUINTA HORARIOS************************************************************/
        
        var prim4 = "<?php echo $pw;?>";
         var segu4 = "<?php echo $sw;?>";
         var terc4 = "<?php echo $tw;?>";
         var quar4 = "<?php echo $qw;?>";
         var quin4 = "<?php echo $quw;?>";
         var sext4 = "<?php echo $sew;?>";
         var seti4 = "<?php echo $setw;?>";
         var oita4 = "<?php echo $ow;?>";
         var nono4 = "<?php echo $nw;?>";
         var deci4 = "<?php echo $dw;?>";
         var ulti4 = "<?php echo $ulw;?>";
         var doz4 = "<?php echo $ddw;?>";

/*****************************************SEXTA HORARIOS************************************************************/
        var prim5 = "<?php echo $ps;?>";
         var segu5 = "<?php echo $ss;?>";
         var terc5 = "<?php echo $ts;?>";
         var quar5 = "<?php echo $qs;?>";
         var quin5 = "<?php echo $qus;?>";
         var sext5 = "<?php echo $ses;?>";
         var seti5 = "<?php echo $sets;?>";
         var oita5 = "<?php echo $os;?>";
         var nono5 = "<?php echo $ns;?>";
         var deci5 = "<?php echo $ds;?>";
         var ulti5 = "<?php echo $uls;?>";
         var doz5 = "<?php echo $dds;?>";

/*****************************************MUDANDO AS CORES************************************************************/
////////////////////////PRIMEIROS horarios 
 		 $("#prim").ready(function(){
        	if(prim == 0 || seg == 0){
        		document.getElementById("prim").disabled = true;
        		document.getElementById("prim").style.backgroundColor = "#B22222"; //cor VERMELHA do botão caso ele SEJA valido
        	}
        	else {
        		document.getElementById("prim").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        	}
        	});


 		  $("#prim2").ready(function(){
        	if(prim2 == 0 || ter ==0){
        		document.getElementById("prim2").disabled = true;
        		document.getElementById("prim2").style.backgroundColor = "#B22222"; 
        	}
        	else {
        		document.getElementById("prim2").style.backgroundColor = "#008000"; 
        	}
        	});

          $("#prim3").ready(function(){
            if(prim3 == 0 || qua == 0){
                document.getElementById("prim3").disabled = true;
                document.getElementById("prim3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("prim3").style.backgroundColor = "#008000";
            }
            });


          $("#prim4").ready(function(){
            if(prim4 == 0 || qui ==0){
                document.getElementById("prim4").disabled = true;
                document.getElementById("prim4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("prim4").style.backgroundColor = "#008000"; 
            }
            });

          $("#prim5").ready(function(){
            if(prim5 == 0 || sex == 0){
                document.getElementById("prim5").disabled = true;
                document.getElementById("prim5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("prim5").style.backgroundColor = "#008000"; 
            }
            });


/////////////////////////////SEGUNDOS horarios 

 		 $("#segu").ready(function(){
        	if(segu == 0 || seg == 0){
        		document.getElementById("segu").disabled = true;
        		document.getElementById("segu").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("segu").style.backgroundColor = "#008000";        		
        	}
        	});

 		 $("#segu2").ready(function(){
        	if(segu2 == 0 || ter ==0){
        		document.getElementById("segu2").disabled = true;
        		document.getElementById("segu2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("segu2").style.backgroundColor = "#008000";
      		       	}
        	});
            
            $("#segu3").ready(function(){
            if(segu3 == 0 || qua == 0){
                document.getElementById("segu3").disabled = true;
                document.getElementById("segu3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("segu3").style.backgroundColor = "#008000";
            }
            });


          $("#segu4").ready(function(){
            if(segu4 == 0 || qui ==0){
                document.getElementById("segu4").disabled = true;
                document.getElementById("segu4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("segu4").style.backgroundColor = "#008000"; 
            }
            });

          $("#segu5").ready(function(){
            if(segu5 == 0 || sex == 0){
                document.getElementById("segu5").disabled = true;
                document.getElementById("segu5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("segu5").style.backgroundColor = "#008000"; 
            }
            });
/////////////////////////////TERCEIRO horarios 

 		  $("#terc").ready(function(){
        	if(terc == 0 || seg == 0){
        		document.getElementById("terc").disabled = true;
        		document.getElementById("terc").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("terc").style.backgroundColor = "#008000";
        	}
        	});

 		  	  $("#terc2").ready(function(){
        	if(terc2 == 0 || ter ==0){
        		document.getElementById("terc2").disabled = true;
        		document.getElementById("terc2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("terc2").style.backgroundColor = "#008000";
        	}
        	});
            
            $("#terc3").ready(function(){
            if(terc3 == 0 || qua == 0){
                document.getElementById("terc3").disabled = true;
                document.getElementById("terc3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("terc3").style.backgroundColor = "#008000";
            }
            });


          $("#terc4").ready(function(){
            if(terc4 == 0 || qui ==0){
                document.getElementById("terc4").disabled = true;
                document.getElementById("terc4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("terc4").style.backgroundColor = "#008000"; 
            }
            });

          $("#terc5").ready(function(){
            if(terc5 == 0 || sex == 0){
                document.getElementById("terc5").disabled = true;
                document.getElementById("terc5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("terc5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////SEGUNDOS horarios 

 		   $("#quar").ready(function(){
        	if(quar == 0 || seg == 0 ){
        		document.getElementById("quar").disabled = true;
        		document.getElementById("quar").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("quar").style.backgroundColor = "#008000";
        	}
        	});

 		   $("#quar2").ready(function(){
        	if(quar2 == 0 || ter ==0){
        		document.getElementById("quar2").disabled = true;
        		document.getElementById("quar2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("quar2").style.backgroundColor = "#008000";
        	}
        	});
            
            $("#quar3").ready(function(){
            if(quar3 == 0 || qua == 0){
                document.getElementById("quar3").disabled = true;
                document.getElementById("quar3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("quar3").style.backgroundColor = "#008000";
            }
            });


          $("#prim4").ready(function(){
            if(quar4 == 0 || qui ==0){
                document.getElementById("quar4").disabled = true;
                document.getElementById("quar4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("quar4").style.backgroundColor = "#008000"; 
            }
            });

          $("#quar5").ready(function(){
            if(quar5 == 0 || sex == 0){
                document.getElementById("quar5").disabled = true;
                document.getElementById("quar5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("quar5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////SEGUNDOS horarios 

 		    $("#quin").ready(function(){
        	if(quin == 0 || seg == 0){
        		document.getElementById("quin").disabled = true;
        		document.getElementById("quin").style.backgroundColor = "#B22222";
        	}
        	else{
        		document.getElementById("quin").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        		
        	}
        	});

        	 $("#quin2").ready(function(){
        	if(quin2 == 0 || ter ==0){
        		document.getElementById("quin2").disabled = true;
        		document.getElementById("quin2").style.backgroundColor = "#B22222";
        	}
        	else{
          		document.getElementById("quin2").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        	}
        	});

            $("#quin3").ready(function(){
            if(quin3 == 0 || qua == 0){
                document.getElementById("quin3").disabled = true;
                document.getElementById("quin3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("quin3").style.backgroundColor = "#008000";
            }
            });


          $("#quin4").ready(function(){
            if(quin4 == 0 || qui ==0){
                document.getElementById("quin4").disabled = true;
                document.getElementById("quin4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("quin4").style.backgroundColor = "#008000"; 
            }
            });

          $("#quin5").ready(function(){
            if(quin5 == 0 || sex == 0){
                document.getElementById("quin5").disabled = true;
                document.getElementById("quin5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("quin5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////SEXTO horarios 

 		    $("#sext").ready(function(){
        	if(sext == 0 || seg == 0){
        		document.getElementById("sext").disabled = true;
        		document.getElementById("sext").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("sext").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        	}
        	});

 		    $("#sext2").ready(function(){
        	if(sext2 == 0 || ter ==0){
        		document.getElementById("sext2").disabled = true;
        		document.getElementById("sext2").style.backgroundColor = "#B22222";

        	}
        	else {
        		document.getElementById("sext2").style.backgroundColor = "#008000"; //cor VERDE do botão caso ele NÃO seja valido
        	}});
            
            $("#prim3").ready(function(){
            if(sext3 == 0 || qua == 0){
                document.getElementById("sext3").disabled = true;
                document.getElementById("sext3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("sext3").style.backgroundColor = "#008000";
            }
            });


          $("#sext4").ready(function(){
            if(sext4 == 0 || qui ==0){
                document.getElementById("sext4").disabled = true;
                document.getElementById("sext4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("sext4").style.backgroundColor = "#008000"; 
            }
            });

          $("#sext5").ready(function(){
            if(sext5 == 0 || sex == 0){
                document.getElementById("sext5").disabled = true;
                document.getElementById("sext5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("sext5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////SETIMOS horarios 

 		 $("#seti").ready(function(){
        	if(seti == 0 || seg == 0){
        		document.getElementById("seti").disabled = true;
        		document.getElementById("seti").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("seti").style.backgroundColor = "#008000";

        	}
        	});


 		 $("#seti2").ready(function(){
        	if(seti2 == 0 || ter ==0){
        		document.getElementById("seti2").disabled = true;
        		document.getElementById("seti2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("seti2").style.backgroundColor = "#008000";
        	}
        	});
          $("#seti3").ready(function(){
            if(seti3 == 0 || qua == 0){
                document.getElementById("prim3").disabled = true;
                document.getElementById("seti3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("seti3").style.backgroundColor = "#008000";
            }
            });


          $("#seti4").ready(function(){
            if(seti4 == 0 || qui ==0){
                document.getElementById("seti4").disabled = true;
                document.getElementById("seti4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("seti4").style.backgroundColor = "#008000"; 
            }
            });

          $("#seti5").ready(function(){
            if(seti5 == 0 || sex == 0){
                document.getElementById("seti5").disabled = true;
                document.getElementById("seti5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("seti5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////OITAVOS horarios 
 		  $("#oita").ready(function(){
        	if(oita == 0 || seg == 0){
        		document.getElementById("oita").disabled = true;
        		document.getElementById("oita").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("oita").style.backgroundColor = "#008000";
        	}
        	});

 		  $("#oita2").ready(function(){
        	if(oita2 == 0 || ter ==0){
        		document.getElementById("oita2").disabled = true;
        		document.getElementById("oita2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("oita2").style.backgroundColor = "#008000";
        	}
        	});
            
            $("#oita3").ready(function(){
            if(oita3 == 0 || qua == 0){
                document.getElementById("oita3").disabled = true;
                document.getElementById("oita3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("oita3").style.backgroundColor = "#008000";
            }
            });


          $("#oita4").ready(function(){
            if(oita4 == 0 || qui ==0){
                document.getElementById("oita4").disabled = true;
                document.getElementById("oita4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("oita4").style.backgroundColor = "#008000"; 
            }
            });

          $("#oita5").ready(function(){
            if(oita5 == 0 || sex == 0){
                document.getElementById("oita5").disabled = true;
                document.getElementById("oita5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("oita5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////NONOS horarios 
 		 $("#nono").ready(function(){
        	if(nono == 0 || seg == 0){
        		document.getElementById("nono").disabled = true;
        		document.getElementById("nono").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("nono").style.backgroundColor = "#008000";

        	}
        	});

 		  $("#nono2").ready(function(){
        	if(nono2 == 0 || ter ==0){
        		document.getElementById("nono2").disabled = true;
        		document.getElementById("nono2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("nono2").style.backgroundColor = "#008000";
        	}
        	});

          $("#nono3").ready(function(){
            if(nono3 == 0 || qua == 0){
                document.getElementById("nono3").disabled = true;
                document.getElementById("nono3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("nono3").style.backgroundColor = "#008000";
            }
            });


          $("#nono4").ready(function(){
            if(deci4 == 0 || qui ==0){
                document.getElementById("nono4").disabled = true;
                document.getElementById("nono4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("nono4").style.backgroundColor = "#008000"; 
            }
            });

          $("#nono5").ready(function(){
            if(deci5 == 0 || sex == 0){
                document.getElementById("nono5").disabled = true;
                document.getElementById("nono5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("nono5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////DECIMOS horarios 

 		  $("#deci").ready(function(){
        	if(deci == 0 || seg == 0){
        		document.getElementById("deci").disabled = true;
        		document.getElementById("deci").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("deci").style.backgroundColor = "#008000";
        	}
        	});

 		  $("#deci2").ready(function(){
        	if(deci2 == 0 || ter ==0){
        		document.getElementById("deci2").disabled = true;
        		document.getElementById("deci2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("deci2").style.backgroundColor = "#008000";
        	}
        	});
            
            $("#deci3").ready(function(){
            if(deci3 == 0 || qua == 0){
                document.getElementById("deci3").disabled = true;
                document.getElementById("deci3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("deci3").style.backgroundColor = "#008000";
            }
            });


          $("#deci4").ready(function(){
            if(deci4 == 0 || qui ==0){
                document.getElementById("deci4").disabled = true;
                document.getElementById("deci4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("deci4").style.backgroundColor = "#008000"; 
            }
            });

          $("#deci5").ready(function(){
            if(deci5 == 0 || sex == 0){
                document.getElementById("deci5").disabled = true;
                document.getElementById("deci5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("deci5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////DECIMOS PRIMEIROS horarios 

 		 	$("#ulti").ready(function(){
        	if(ulti == 0 || seg == 0){
        		document.getElementById("ulti").disabled = true;
        		document.getElementById("ulti").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("ulti").style.backgroundColor = "#008000";
        	}
        	});

        	$("#ulti2").ready(function(){
        	if(ulti2 == 0 || ter ==0){
        		document.getElementById("ulti2").disabled = true;
        		document.getElementById("ulti2").style.backgroundColor = "#B22222";
        	}
        	else {
        		document.getElementById("ulti2").style.backgroundColor = "#008000";
        	}
        	});
            
            $("#ulti3").ready(function(){
            if(ulti3 == 0 || qua == 0){
                document.getElementById("ulti3").disabled = true;
                document.getElementById("ulti3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("ulti3").style.backgroundColor = "#008000";
            }
            });


          $("#ulti4").ready(function(){
            if(ulti4 == 0 || qui ==0){
                document.getElementById("ulti4").disabled = true;
                document.getElementById("ulti4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("ulti4").style.backgroundColor = "#008000"; 
            }
            });

          $("#ulti5").ready(function(){
            if(ulti5 == 0 || sex == 0){
                document.getElementById("ulti5").disabled = true;
                document.getElementById("ulti5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("ulti5").style.backgroundColor = "#008000"; 
            }
            });

/////////////////////////////DECIMOS SEGUNDOS horarios 

            $("#doze").ready(function(){
            if(doz == 0 || seg == 0){
                document.getElementById("doze").disabled = true;
                document.getElementById("doze").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("doze").style.backgroundColor = "#008000";
            }
            });

            $("#doze2").ready(function(){
            if(doz2 == 0 || ter ==0){
                document.getElementById("doze2").disabled = true;
                document.getElementById("doze2").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("doze2").style.backgroundColor = "#008000";
            }
            });
            
            $("#doze3").ready(function(){
            if(doz3 == 0 || qua == 0){
                document.getElementById("doze3").disabled = true;
                document.getElementById("doze3").style.backgroundColor = "#B22222";
            }
            else {
                document.getElementById("doze3").style.backgroundColor = "#008000";
            }
            });


          $("#doze4").ready(function(){
            if(doz4 == 0 || qui ==0){
                document.getElementById("doze4").disabled = true;
                document.getElementById("doze4").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("doze4").style.backgroundColor = "#008000"; 
            }
            });

          $("#doze5").ready(function(){
            if(doz5 == 0 || sex == 0){
                document.getElementById("doze5").disabled = true;
                document.getElementById("doze5").style.backgroundColor = "#B22222"; 
            }
            else {
                document.getElementById("doze5").style.backgroundColor = "#008000"; 
            }
            });


 		   
    </script> 


	<?php 
####################PASSANDO O VALOR DA VARIAVEL###########################################################################
		////////////////SEGUNDA 
    if(isset($_POST["8:00"])){
             $seg_hora1 = "0".",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "08:00";
            header("confirma.php");        
                    } 
        if(isset($_POST["8:30t"])){
             $seg_hora1 = $p.","."0".",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "8:30";
                    } 
        if(isset($_POST["9:00"])){
             $seg_hora1 = $p.",".$s.","."0".",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "9:00";
                    } 

        if(isset($_POST["10:00"])){
             $seg_hora1 = $p.",".$s.",".$t.","."0".",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "10:00";
                    } 

        if(isset($_POST["10:30"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.","."0".",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "10:30";
                    } 

        if(isset($_POST["11:00"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.","."0".",".$set.",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "11:00";
                    } 

        if(isset($_POST["11:30"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.","."0".",".$o.",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "11:30";
                    } 

        if(isset($_POST["13:00"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.","."0".",".$n.",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "13:00";
                    } 

        if(isset($_POST["13:30"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.","."0".",".$d.",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "13:30";
                    } 

        if(isset($_POST["14:00"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.","."0".",".$ul.",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "14:00";
                    }

        if(isset($_POST["14:30"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.","."0".",".$ds;
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "14:30";
                    } 

        if(isset($_POST["15:00"])){
             $seg_hora1 = $p.",".$s.",".$t.",".$q.",".$qu.",".$se.",".$set.",".$o.",".$n.",".$d.",".$ul.","."0";
             $_SESSION['horaF'] = $seg_hora1;
             $_SESSION['diaF'] = "Segunda-feira";
             $_SESSION['horaU'] = "15:00";
                    } 

        ///////////////////////TERÇA///////////////////////////////////////////////////////////////////////////////////
        

        if(isset($_POST["8:00t"])){
		     $ter_hora1 = "0".",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
		     $_SESSION['horaF'] = $ter_hora1;
		     $_SESSION['diaF'] = "Terça-feira";
		     $_SESSION['horaU'] = "08:00";
                    } 
        if(isset($_POST["8:30t"])){
             $ter_hora1 = $pp.","."0".",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "8:30";
                    } 
        if(isset($_POST["9:00t"])){
             $ter_hora1 = $pp.",".$ss.","."0".",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "9:00";
                    } 

        if(isset($_POST["10:00t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.","."0".",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "10:00";
                    } 

        if(isset($_POST["10:30t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.","."0".",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "10:30";
                    } 

        if(isset($_POST["11:00t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.","."0".",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "11:00";
                    } 

        if(isset($_POST["11:30t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.","."0".",".$oo.",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "11:30";
                    } 

        if(isset($_POST["13:00t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.","."0".",".$nn.",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "13:00";
                    } 

        if(isset($_POST["13:30t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.","."0".",".$dd.",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "13:30";
                    } 

        if(isset($_POST["14:00t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.","."0".",".$ull.",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "14:00";
                    }

        if(isset($_POST["14:30t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.","."0".",".$ddz;
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "14:30";
                    } 

        if(isset($_POST["15:00t"])){
             $ter_hora1 = $pp.",".$ss.",".$tt.",".$qq.",".$quu.",".$see.",".$sett.",".$oo.",".$nn.",".$dd.",".$ull.","."0";
             $_SESSION['horaF'] = $ter_hora1;
             $_SESSION['diaF'] = "Terça-feira";
             $_SESSION['horaU'] = "15:00";
                    }  

//////////////////////////QUARTA /////////////////////////////////////////////////////////////////////////////////////// 

        if(isset($_POST["8:00q"])){
             $qua_hora1 = "0".",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "08:00";
                    } 
        if(isset($_POST["8:30q"])){
            $qua_hora1 = $pq.","."0".",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "8:30";
                    } 
        if(isset($_POST["9:00q"])){
              $qua_hora1 = $pq.",".$sq.","."0".",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "9:00";
                    } 

        if(isset($_POST["10:00q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.","."0".",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "10:00";
                    } 

        if(isset($_POST["10:30q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.","."0".",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "10:30";
                    } 

        if(isset($_POST["11:00q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.","."0".",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "11:00";
                    } 

        if(isset($_POST["11:30q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.","."0".",".$oq.",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "11:30";
                    } 

        if(isset($_POST["13:00q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.","."0".",".$nq.",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "13:00";
                    } 

        if(isset($_POST["13:30q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.","."0".",".$dq.",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "13:30";
                    } 

        if(isset($_POST["14:00q"])){
             $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.","."0".",".$ulq.",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "14:00";
                    }

        if(isset($_POST["14:30q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.","."0".",".$ddq;
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "14:30";
                    } 

        if(isset($_POST["15:00q"])){
              $qua_hora1 = $pq.",".$sq.",".$tq.",".$qqq.",".$quq.",".$seq.",".$setq.",".$oq.",".$nq.",".$dq.",".$ulq.","."0";
             $_SESSION['horaF'] = $qua_hora1;
             $_SESSION['diaF'] = "Quarta-feira";
             $_SESSION['horaU'] = "15:00";
                    } 

/////////////////QUINTA ///////////////////////////////////////////////////////////////////////////////////////////////

        if(isset($_POST["8:00w"])){
             $qui_hora1 = "0".",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "08:00";
                    } 
        if(isset($_POST["8:30w"])){
             $qui_hora1 = $pw.","."0".",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "8:30";
                    } 
        if(isset($_POST["9:00w"])){
             $qui_hora1 = $pw.",".$sw.","."0".",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "9:00";
                    } 

        if(isset($_POST["10:00w"])){
             $qui_hora1 = $pw.",".$sw.",".$tw.","."0".",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "10:00";
                    } 

        if(isset($_POST["10:30w"])){
             $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.","."0".",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "10:30";
                    } 

        if(isset($_POST["11:00w"])){
             $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.","."0".",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "11:00";
                    } 

        if(isset($_POST["11:30w"])){
            $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.","."0".",".$ow.",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "11:30";
                    } 

        if(isset($_POST["13:00w"])){
             $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.","."0".",".$nw.",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "13:00";
                    } 

        if(isset($_POST["13:30w"])){
            $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.","."0".",".$dw.",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "13:30";
                    } 

        if(isset($_POST["14:00w"])){
            $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.","."0".",".$ulw.",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "14:00";
                    }

        if(isset($_POST["14:30w"])){
            $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.","."0".",".$ddw;
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "14:30";
                    } 

        if(isset($_POST["15:00w"])){
            $qui_hora1 = $pw.",".$sw.",".$tw.",".$qw.",".$quw.",".$sew.",".$setw.",".$ow.",".$nw.",".$dw.",".$ulw.","."0";
             $_SESSION['horaF'] = $qui_hora1;
             $_SESSION['diaF'] = "Quinta-feira";
             $_SESSION['horaU'] = "15:00";
                    } 

//////////////////SEXTA /////////////////////////////////////////////////////////////////////////////////////////////////

        if(isset($_POST["8:00s"])){
            $sex_hora1 = "0".",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "08:00";
                    } 
        if(isset($_POST["8:30s"])){
            $sex_hora1 = $ps.","."0".",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "8:30";
                    } 
        if(isset($_POST["9:00s"])){
            $sex_hora1 = $ps.",".$ss.","."0".",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "9:00";
                    } 

        if(isset($_POST["10:00s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.","."0".",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "10:00";
                    } 

        if(isset($_POST["10:30s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.","."0".",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "10:30";
                    } 

        if(isset($_POST["11:00s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.","."0".",".$sets.",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "11:00";
                    } 

        if(isset($_POST["11:30s"])){
           $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.","."0".",".$os.",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "11:30";
                    } 

        if(isset($_POST["13:00s"])){
           $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.","."0".",".$ns.",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "13:00";
                    } 

        if(isset($_POST["13:30s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.","."0".",".$ds.",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "13:30";
                    } 

        if(isset($_POST["14:00s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.","."0".",".$uls.",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "14:00";
                    }

        if(isset($_POST["14:30s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.","."0".",".$dds;
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "14:30";
                    } 

        if(isset($_POST["15:00s"])){
            $sex_hora1 = $ps.",".$ss.",".$ts.",".$qs.",".$qus.",".$ses.",".$sets.",".$os.",".$ns.",".$ds.",".$uls.","."0";
             $_SESSION['horaF'] = $sex_hora1;
             $_SESSION['diaF'] = "Sexta-feira";
             $_SESSION['horaU'] = "15:00";
                    } 
    
	?>

</body>
 <footer> <!--CODIGO DO RODAPE--></footer>
</html>
