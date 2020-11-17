<!--AQUI O A ADM FAZ A AGENDA PARA OS AGENDAMENTOS DE EXAMES-->
<?php
error_reporting(0);
session_start();
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
?>

<!DOCTYPE html>
<html lang=”pt-br”>
<html>
<h1> AGENDAMENTO </h1>

    <head> 
        <title>  Criar agenda médica </title>
        <meta charset= "utf-8" >

       
    </head>

      <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>

        <body>
       <form method="POST"><center>
        <?php
if(isset($_POST['batata']))
    {
      $segunda = (bool) rand(0, 1) ? "checked" : 0;
      $terca  = (bool) rand(0, 1) ? "checked" : 0;
      $quarta  = (bool) rand(0, 1) ? "checked" : 0;
      $quinta = (bool) rand(0, 1) ? "checked" : 0;
      $sexta  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['segunda'] = ( isset($_POST['segunda']) ) ? true : 0;
      $_POST['terca']  = ( isset($_POST['terca']) )  ? true : 0;
      $_POST['quarta']  = ( isset($_POST['quarta']) )  ? true : 0;
      $_POST['quinta'] = ( isset($_POST['quinta']) ) ? true : 0;
      $_POST['sexta']  = ( isset($_POST['sexta']) )  ? true : 0;

      $crm = addslashes($_POST['crm']);

      $segunda = addslashes($_POST['segunda']);
      $terca = addslashes($_POST['terca']);
      $quarta = addslashes($_POST['quarta']);
      $quinta = addslashes($_POST['quinta']);
      $sexta = addslashes($_POST['sexta']);

      $seg = addslashes($_POST['seg']);
      $ter = addslashes($_POST['ter']);
      $qua = addslashes($_POST['qua']);
      $qui = addslashes($_POST['qui']);
      $sex = addslashes($_POST['sex']);


#######segunda feira HORA###############################################################################################
      $h1  = (bool) rand(0, 1) ? "checked" : 0;
      $h2 = (bool) rand(0, 1) ? "checked" : 0;
      $h3  = (bool) rand(0, 1) ? "checked" : 0;
      $h4  = (bool) rand(0, 1) ? "checked" : 0;
      $h5 = (bool) rand(0, 1) ? "checked" : 0;
      $h6 = (bool) rand(0, 1) ? "checked" : 0;
      $h7  = (bool) rand(0, 1) ? "checked" : 0;
      $h8  = (bool) rand(0, 1) ? "checked" : 0;
      $h9 = (bool) rand(0, 1) ? "checked" : 0;
      $h10 = (bool) rand(0, 1) ? "checked" : 0;
      $h11  = (bool) rand(0, 1) ? "checked" : 0;
      $h12  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['h1']  = ( isset($_POST['h1']) )  ? true : 0;
      $_POST['h2'] = ( isset($_POST['h2']) ) ? true : 0;
      $_POST['h3']  = ( isset($_POST['h3']) )  ? true : 0;
      $_POST['h4']  = ( isset($_POST['h4']) )  ? true : 0;
      $_POST['h5'] = ( isset($_POST['h5']) ) ? true : 0;
      $_POST['h6'] = ( isset($_POST['h6']) ) ? true : 0;
      $_POST['h7']  = ( isset($_POST['h7']) )  ? true : 0;
      $_POST['h8'] = ( isset($_POST['h8']) ) ? true : 0;
      $_POST['h9']  = ( isset($_POST['h9']) )  ? true : 0;
      $_POST['h10']  = ( isset($_POST['h10']) )  ? true : 0;
      $_POST['h11'] = ( isset($_POST['h11']) ) ? true : 0;
      $_POST['h12'] = ( isset($_POST['h12']) ) ? true : 0;

        $h1 = addslashes($_POST['h1']);
        $h2 = addslashes($_POST['h2']);
        $h3 = addslashes($_POST['h3']);
        $h4 = addslashes($_POST['h4']);
        $h5 = addslashes($_POST['h5']);
        $h6 = addslashes($_POST['h6']);
        $h7 = addslashes($_POST['h7']);
        $h8 = addslashes($_POST['h8']);
        $h9 = addslashes($_POST['h9']);
        $h10 = addslashes($_POST['h10']);
        $h11 = addslashes($_POST['h11']);
        $h12 = addslashes($_POST['h12']);

    $seg_hora = $h1.",".$h2.",".$h3.",".$h4.",".$h5.",".$h6.",".$h7.",".$h8.",".$h9.",".$h10.",".$h11.",".$h12;
    
####################terca HORA######################################################################################333

      $h11  = (bool) rand(0, 1) ? "checked" : 0;
      $h22 = (bool) rand(0, 1) ? "checked" : 0;
      $h33  = (bool) rand(0, 1) ? "checked" : 0;
      $h44  = (bool) rand(0, 1) ? "checked" : 0;
      $h55 = (bool) rand(0, 1) ? "checked" : 0;
      $h66 = (bool) rand(0, 1) ? "checked" : 0;
      $h77  = (bool) rand(0, 1) ? "checked" : 0;
      $h88  = (bool) rand(0, 1) ? "checked" : 0;
      $h99 = (bool) rand(0, 1) ? "checked" : 0;
      $h100 = (bool) rand(0, 1) ? "checked" : 0;
      $h111  = (bool) rand(0, 1) ? "checked" : 0;
      $h122  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['h11']  = ( isset($_POST['h11']) )  ? true : 0;
      $_POST['h22'] = ( isset($_POST['h22']) ) ? true : 0;
      $_POST['h33']  = ( isset($_POST['h33']) )  ? true : 0;
      $_POST['h44']  = ( isset($_POST['h44']) )  ? true : 0;
      $_POST['h55'] = ( isset($_POST['h55']) ) ? true : 0;
      $_POST['h66'] = ( isset($_POST['h66']) ) ? true : 0;
      $_POST['h77']  = ( isset($_POST['h77']) )  ? true : 0;
      $_POST['h88'] = ( isset($_POST['h88']) ) ? true : 0;
      $_POST['h99']  = ( isset($_POST['h99']) )  ? true : 0;
      $_POST['h100']  = ( isset($_POST['h100']) )  ? true : 0;
      $_POST['h111'] = ( isset($_POST['h111']) ) ? true : 0;
      $_POST['h122'] = ( isset($_POST['h122']) ) ? true : 0;

        $h11 = addslashes($_POST['h11']);
        $h22 = addslashes($_POST['h22']);
        $h33 = addslashes($_POST['h33']);
        $h44 = addslashes($_POST['h44']);
        $h55 = addslashes($_POST['h55']);
        $h66 = addslashes($_POST['h66']);
        $h77 = addslashes($_POST['h77']);
        $h88 = addslashes($_POST['h88']);
        $h99 = addslashes($_POST['h99']);
        $h100 = addslashes($_POST['h100']);
        $h111 = addslashes($_POST['h111']);
        $h122 = addslashes($_POST['h122']);
      
      $ter_hora = $h11.",".$h22.",".$h33.",".$h44.",".$h55.",".$h66.",".$h77.",".$h88.",".$h99.",".$h100.",".$h111.",".$h122;

#################QUARTA HORA############################################################################################
      $h1q  = (bool) rand(0, 1) ? "checked" : 0;
      $h2q = (bool) rand(0, 1) ? "checked" : 0;
      $h3q  = (bool) rand(0, 1) ? "checked" : 0;
      $h4q = (bool) rand(0, 1) ? "checked" : 0;
      $h5q = (bool) rand(0, 1) ? "checked" : 0;
      $h6q = (bool) rand(0, 1) ? "checked" : 0;
      $h7q  = (bool) rand(0, 1) ? "checked" : 0;
      $h8q  = (bool) rand(0, 1) ? "checked" : 0;
      $h9q = (bool) rand(0, 1) ? "checked" : 0;
      $h10q = (bool) rand(0, 1) ? "checked" : 0;
      $h11q  = (bool) rand(0, 1) ? "checked" : 0;
      $h12q  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['h1q']  = ( isset($_POST['h1q']) )  ? true : 0;
      $_POST['h2q'] = ( isset($_POST['h2q']) ) ? true : 0;
      $_POST['h3q']  = ( isset($_POST['h3q']) )  ? true : 0;
      $_POST['h4q']  = ( isset($_POST['h4q']) )  ? true : 0;
      $_POST['h5q'] = ( isset($_POST['h5q']) ) ? true : 0;
      $_POST['h6q'] = ( isset($_POST['h6q']) ) ? true : 0;
      $_POST['h7q']  = ( isset($_POST['h7q']) )  ? true : 0;
      $_POST['h8q'] = ( isset($_POST['h8q']) ) ? true : 0;
      $_POST['h9q']  = ( isset($_POST['h9q']) )  ? true : 0;
      $_POST['h10q']  = ( isset($_POST['h10q']) )  ? true : 0;
      $_POST['h11q'] = ( isset($_POST['h11q']) ) ? true : 0;
      $_POST['h12q'] = ( isset($_POST['h12q']) ) ? true : 0;

        $h1q = addslashes($_POST['h1q']);
        $h2q = addslashes($_POST['h2q']);
        $h3q = addslashes($_POST['h3q']);
        $h4q = addslashes($_POST['h4q']);
        $h5q = addslashes($_POST['h5q']);
        $h6q = addslashes($_POST['h6q']);
        $h7q = addslashes($_POST['h7q']);
        $h8q = addslashes($_POST['h8q']);
        $h9q = addslashes($_POST['h9q']);
        $h10q = addslashes($_POST['h10q']);
        $h11q = addslashes($_POST['h11q']);
        $h12q = addslashes($_POST['h12q']);
      
      $qua_hora = $h1q.",".$h2q.",".$h3q.",".$h4q.",".$h5q.",".$h6q.",".$h7q.",".$h8q.",".$h9q.",".$h10q.",".$h11q.",".$h12q;

#############QUINTA HORA################################################################################################

      $h1w  = (bool) rand(0, 1) ? "checked" : 0;
      $h2w = (bool) rand(0, 1) ? "checked" : 0;
      $h3w  = (bool) rand(0, 1) ? "checked" : 0;
      $h4w = (bool) rand(0, 1) ? "checked" : 0;
      $h5w = (bool) rand(0, 1) ? "checked" : 0;
      $h6w = (bool) rand(0, 1) ? "checked" : 0;
      $h7w  = (bool) rand(0, 1) ? "checked" : 0;
      $h8w  = (bool) rand(0, 1) ? "checked" : 0;
      $h9w = (bool) rand(0, 1) ? "checked" : 0;
      $h10w = (bool) rand(0, 1) ? "checked" : 0;
      $h11w = (bool) rand(0, 1) ? "checked" : 0;
      $h12w  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['h1w']  = ( isset($_POST['h1w']) )  ? true : 0;
      $_POST['h2w'] = ( isset($_POST['h2w']) ) ? true : 0;
      $_POST['h3w']  = ( isset($_POST['h3w']) )  ? true : 0;
      $_POST['h4w']  = ( isset($_POST['h4w']) )  ? true : 0;
      $_POST['h5w'] = ( isset($_POST['h5w']) ) ? true : 0;
      $_POST['h6w'] = ( isset($_POST['h6w']) ) ? true : 0;
      $_POST['h7w']  = ( isset($_POST['h7w']) )  ? true : 0;
      $_POST['h8w'] = ( isset($_POST['h8w']) ) ? true : 0;
      $_POST['h9w']  = ( isset($_POST['h9w']) )  ? true : 0;
      $_POST['h10w']  = ( isset($_POST['h10w']) )  ? true : 0;
      $_POST['h11w'] = ( isset($_POST['h11w']) ) ? true : 0;
      $_POST['h12w'] = ( isset($_POST['h12w']) ) ? true : 0;

        $h1w = addslashes($_POST['h1w']);
        $h2w = addslashes($_POST['h2w']);
        $h3w = addslashes($_POST['h3w']);
        $h4w = addslashes($_POST['h4w']);
        $h5w = addslashes($_POST['h5w']);
        $h6w = addslashes($_POST['h6w']);
        $h7w = addslashes($_POST['h7w']);
        $h8w = addslashes($_POST['h8w']);
        $h9w = addslashes($_POST['h9w']);
        $h10w = addslashes($_POST['h10w']);
        $h11w = addslashes($_POST['h11w']);
        $h12w = addslashes($_POST['h12w']);
      
      $qui_hora = $h1w.",".$h2w.",".$h3w.",".$h4w.",".$h5w.",".$h6w.",".$h7w.",".$h8w.",".$h9w.",".$h10w.",".$h11w.",".$h12w;

#################SEXTA HORA########################################################################################

      $h1s  = (bool) rand(0, 1) ? "checked" : 0;
      $h2s = (bool) rand(0, 1) ? "checked" : 0;
      $h3s  = (bool) rand(0, 1) ? "checked" : 0;
      $h4s = (bool) rand(0, 1) ? "checked" : 0;
      $h5s = (bool) rand(0, 1) ? "checked" : 0;
      $h6s = (bool) rand(0, 1) ? "checked" : 0;
      $h7s  = (bool) rand(0, 1) ? "checked" : 0;
      $h8s  = (bool) rand(0, 1) ? "checked" : 0;
      $h9s = (bool) rand(0, 1) ? "checked" : 0;
      $h10s = (bool) rand(0, 1) ? "checked" : 0;
      $h11s  = (bool) rand(0, 1) ? "checked" : 0;
      $h12s  = (bool) rand(0, 1) ? "checked" : 0;

      $_POST['h1s']  = ( isset($_POST['h1s']) )  ? true : 0;
      $_POST['h2s'] = ( isset($_POST['h2s']) ) ? true : 0;
      $_POST['h3s']  = ( isset($_POST['h3s']) )  ? true : 0;
      $_POST['h4s']  = ( isset($_POST['h4s']) )  ? true : 0;
      $_POST['h5s'] = ( isset($_POST['h5s']) ) ? true : 0;
      $_POST['h6s'] = ( isset($_POST['h6s']) ) ? true : 0;
      $_POST['h7s']  = ( isset($_POST['h7s']) )  ? true : 0;
      $_POST['h8s'] = ( isset($_POST['h8s']) ) ? true : 0;
      $_POST['h9s']  = ( isset($_POST['h9s']) )  ? true : 0;
      $_POST['h10s']  = ( isset($_POST['h10s']) )  ? true : 0;
      $_POST['h11s'] = ( isset($_POST['h11s']) ) ? true : 0;
      $_POST['h12s'] = ( isset($_POST['h12s']) ) ? true : 0;

        $h1s = addslashes($_POST['h1s']);
        $h2s = addslashes($_POST['h2s']);
        $h3s = addslashes($_POST['h3s']);
        $h4s = addslashes($_POST['h4s']);
        $h5s = addslashes($_POST['h5s']);
        $h6s = addslashes($_POST['h6s']);
        $h7s = addslashes($_POST['h7s']);
        $h8s = addslashes($_POST['h8s']);
        $h9s = addslashes($_POST['h9s']);
        $h10s = addslashes($_POST['h10s']);
        $h11s = addslashes($_POST['h11s']);
        $h12s = addslashes($_POST['h12s']);
      
      $sex_hora = $h1s.",".$h2s.",".$h3s.",".$h4s.",".$h5s.",".$h6s.",".$h7s.",".$h8s.",".$h9s.",".$h10s.",".$h11s.",".$h12s;

#############PASSA PRO BANCO################################################################################################

          if(isset($_POST["batata"]))
        {
            if(!$p->agendamentoMedico($crm,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex))
            {
                echo "Erro!";
            }
}
             }   

    ?>


</section>
        <section id="direita">
              <legend> Selecione os horarios nos quais você pretende atender: </legend>

         <br><label for="crm"> CRM: </label>
            <input type="text" name="crm" placeholder="XXXXXXXX" >

          <table>
          <tr><input type="checkbox" name="segunda" id="segunda"> Segunda - feira</button>
            <br><label for="seg"> Segunda- feira dia: </label>
            <input type="text" name="seg" placeholder="00/00/0000" >

              <td>  <input type = "checkbox" name = "h1" value = "dia">  8:00 </td>
              <td>  <input type = "checkbox" name = "h2" value = "dia"> 8:30 
              <td>  <input type = "checkbox" name = "h3" value = "dia"> 9:00 
              <td>  <input type = "checkbox" name = "h4" value = "dia"> 10:00
              <td>  <input type = "checkbox" name = "h5" value = "dia"> 10:30
              <td>  <input type = "checkbox" name = "h6" value = "dia"> 11:00 
              <td>  <input type = "checkbox" name = "h7" value = "dia"> 11:30 
              <td>  <input type = "checkbox" name = "h8" value = "dia"> 13:00 
              <td>  <input type = "checkbox" name = "h9" value = "dia"> 13:30
              <td>  <input type = "checkbox" name = "h10" value = "dia"> 14:00
              <td>  <input type = "checkbox" name = "h11" value = "dia"> 14:30
              <td>  <input type = "checkbox" name = "h12" value = "dia"> 15:00 <tr>
            </table>

          <table>
          <tr><input type="checkbox" id="terca" name = "terca" value = "terca"> Terça - feira</button>
             <br><label for="ter"> Terça - feira dia: </label>
            <input type="text" name="ter" placeholder="00/00/0000" >

              <td>  <input type = "checkbox" name = "h11" value = "dia">  8:00 </td>
              <td>  <input type = "checkbox" name = "h22" value = "dia"> 8:30 
              <td>  <input type = "checkbox" name = "h33" value = "dia"> 9:00  
              <td>  <input type = "checkbox" name = "h44" value = "dia"> 10:00
              <td>  <input type = "checkbox" name = "h55" value = "dia"> 10:30
              <td>  <input type = "checkbox" name = "h66" value = "dia"> 11:00
              <td>  <input type = "checkbox" name = "h77" value = "dia"> 11:30 
              <td>  <input type = "checkbox" name = "h88" value = "dia"> 13:00 
              <td>  <input type = "checkbox" name = "h99" value = "dia"> 13:30
              <td>  <input type = "checkbox" name = "h100" value = "dia"> 14:00
              <td>  <input type = "checkbox" name = "h111" value = "dia"> 14:30
              <td>  <input type = "checkbox" name = "h122" value = "dia"> 15:00 <tr>
            </table>

          <table>
          <tr><input type="checkbox" id="quarta" name = "quarta" value = "quarta"> Quarta - feira</button>
             <br><label for="qua"> Quarta - feira dia: </label>
            <input type="text" name="qua" placeholder="00/00/0000" >
              <td>  <input type = "checkbox" name = "h1q" value = "dia">  8:00 </td>
              <td>  <input type = "checkbox" name = "h2q" value = "dia"> 8:30 
              <td>  <input type = "checkbox" name = "h3q" value = "dia"> 9:00  
              <td>  <input type = "checkbox" name = "h4q" value = "dia"> 10:00
              <td>  <input type = "checkbox" name = "h5q" value = "dia"> 10:30
              <td>  <input type = "checkbox" name = "h6q" value = "dia"> 11:00
              <td>  <input type = "checkbox" name = "h7q" value = "dia"> 11:30 
              <td>  <input type = "checkbox" name = "h8q" value = "dia"> 13:00 
              <td>  <input type = "checkbox" name = "h9q" value = "dia"> 13:30
              <td>  <input type = "checkbox" name = "h10q" value = "dia"> 14:00
              <td>  <input type = "checkbox" name = "h11q" value = "dia"> 14:30
              <td>  <input type = "checkbox" name = "h12q" value = "dia"> 15:00 <tr>
            </table>

          <table>
          <tr><input type="checkbox" id="quinta" name = "quinta" value = "quinta"> Quinta - feira</button>
             <br><label for="qui"> Quinta - feira dia: </label>
            <input type="text" name="qui" placeholder="00/00/0000" >
              <td>  <input type = "checkbox" name = "h1w" value = "dia">  8:00 </td>
              <td>  <input type = "checkbox" name = "h2w" value = "dia"> 8:30 
              <td>  <input type = "checkbox" name = "h3w" value = "dia"> 9:00  
              <td>  <input type = "checkbox" name = "h4w" value = "dia"> 10:00
              <td>  <input type = "checkbox" name = "h5w" value = "dia"> 10:30
              <td>  <input type = "checkbox" name = "h6w" value = "dia"> 11:00
              <td>  <input type = "checkbox" name = "h7w" value = "dia"> 11:30 
              <td>  <input type = "checkbox" name = "h8w" value = "dia"> 13:00 
              <td>  <input type = "checkbox" name = "h9w" value = "dia"> 13:30
              <td>  <input type = "checkbox" name = "h10w" value = "dia"> 14:00
              <td>  <input type = "checkbox" name = "h11w" value = "dia"> 14:30 
              <td>  <input type = "checkbox" name = "h12w" value = "dia"> 15:00 <tr>
            </table>

          <table>
          <tr><input type="checkbox" id="sexta" name = "sexta" value = "sexta"> Sexta - feira</button>
             <br><label for="sex"> Sexta - feira dia: </label>
            <input type="text" name="sex" placeholder="00/00/0000" >
              <td>  <input type = "checkbox" name = "h1s" value = "dia">  8:00 </td>
              <td>  <input type = "checkbox" name = "h2s" value = "dia"> 8:30 
              <td>  <input type = "checkbox" name = "h3s" value = "dia"> 9:00  
              <td>  <input type = "checkbox" name = "h4s" value = "dia"> 10:00
              <td>  <input type = "checkbox" name = "h5s" value = "dia"> 10:30
              <td>  <input type = "checkbox" name = "h6s" value = "dia"> 11:00
              <td>  <input type = "checkbox" name = "h7s" value = "dia"> 11:30 
              <td>  <input type = "checkbox" name = "h8s" value = "dia"> 13:00 
              <td>  <input type = "checkbox" name = "h9s" value = "dia"> 13:30
              <td>  <input type = "checkbox" name = "h10s" value = "dia"> 14:00
              <td>  <input type = "checkbox" name = "h11s" value = "dia"> 14:30 
              <td>  <input type = "checkbox" name = "h12s" value = "dia"> 15:00 <tr>
            </table>


            <input type="submit" name="batata" value="submit">

  </section>
 </form></center>
</body>

      <footer> <!--ADD CODIGO DO RODAPE --> </footer>
</html>
