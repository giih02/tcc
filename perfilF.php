<!--Está é a pagina do perfil do FUNCIONARIO-->
<?php
session_start();
require_once 'classe_triagem.php';
$p = new enfermagem("tcc","localhost","root","");
?>
<!DOCTYPE html>
<html lang=”pt-br”>
<html>

    <head> 
        <title> meu perfil </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta charset= "utf-8" >
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        <?PHP $p->consultas();?>
        </head>
        <header>   <!-- ADD CODIGO DO CABEÇALHO --> </header>

        <body>


      <h2>    <?php echo "Bem vindo (a) " . $_SESSION['nome_fun'] ?> </h2>

    <div class="circle">
      <img src="upload/<?php echo $_SESSION['rg_fun']; ?>.jpg" width=200 height=200 style ="border-radius: 70%;">
      <img>
    </div> 

         <fieldset>
          <legend> Consultas Marcadas: </legend>
            
       <span id="conteudo"></span>
        <script>
            $(document).ready(function () {
                $.post('listar_usuario.php', function(retorna){
                    //Subtitui o valor no seletor id="conteudo"
                    $("#conteudo").html(retorna);
                });
            });
        </script>
        </fieldset>

        <a href="anotacoes.php"> Iniciar uma consulta </a>



</form>

   </body>
   <footer>
      <!-- ADD CODIGO DO RODAPE -->
   </footer>
</html>
