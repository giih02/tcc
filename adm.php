<!--Está é a pagina que o adiministrador vai fazer o cadastro de funcionarios-->
<?php
error_reporting(0);
require_once 'classe_funcionario.php';
$p = new funcionarios("tcc","localhost","root","");
?>
<!DOCTYPE HTML>
<html lang=”pt-br”>

<html>
<h1> Cadastro de funcionarios  </h1>

    <head> 
        <title>  Administração </title>
        <meta charset=”UTF-8”>
        <link rel= "stylesheet" href="css.css" type="text/css"> 
        <!-- LINK PARA PHP\JS <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    </head>
    <header><!-- CODIGO DO CABEÇALHO--></header>


  <body>
    <form method="POST">
    <script src="jquery.min.js"></script>
    <?php
    if(isset($_POST['cadastrar']))
    {
    	$nome = addslashes($_POST['nome']);
    	$contratacao = addslashes($_POST['contratacao']);
    	$nasc = addslashes($_POST['nasc']);
    	$cargo = addslashes($_POST['cargo']);
        $crm = addslashes($_POST['crm']);
    	$salario = addslashes($_POST['salario']);
    	$cpf = addslashes($_POST['cpf']);
    	$rg = addslashes($_POST['rg']);
    	$tel = addslashes($_POST['tel']);
    	$email = addslashes($_POST['email']);
    	$senha = addslashes($_POST['senha']);

    	if(!empty($nome) && !empty($contratacao) && !empty($nasc) && !empty($cargo) && !empty($salario) && !empty($cpf) && !empty($rg) && !empty($tel) && !empty($email) && !empty($senha))
    	{
    		if(!$p->cadastrarPessoas($nome,$contratacao,$nasc,$cargo,$crm,$salario,$cpf,$rg,$tel,$email,$senha))
    		{
    			echo "Usuario já cadastrado";
    		}
    		
    	}
    	else
    	{
    		echo "Preencha todos os campos";
    	}


    }


    ?>      

        <h1> Cadastro de funcionarios </h1> 
        <?php
            if(isset($_GET['id_up'])){
                $id_up = addslashes($_GET['id_up']);
                $res = $p->alterar($id_up);
            }

        ?>
           

       	<section id="esquerda">

            <br><label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"placeholder="Ex: Gustavo dos Santos" value="<?php if(isset($res)){echo $res['nome_fun'];}?>">


            <script>
                $("#nome").on("input", function(){
              var regexp = /[1234567890*&%$#@!]/g;
              if(this.value.match(regexp)){
                $(this).val(this.value.replace(regexp,''));
              }
            });
            
            </script>

            <br><label for="contratacao">Data de contratacao: </label>
            <input type="text" name="contratacao" id="contratacao"placeholder="00/00/0000" OnKeyUp="mascaraData(this);" maxlength="10" value="<?php if(isset($res)){echo $res['data_contratacao'];}?>" >

            <script>
              // colocar os / . etc nos campos automaticamente
                function mascaraData(campoData){
                          var data = campoData.value;
                          if (data.length == 2){
                              data = data + '/';
                              document.forms[0].contratacao.value = data;
                  return true;              
                          }
                          if (data.length == 5){
                              data = data + '/';
                              document.forms[0].contratacao.value = data;
                              return true;
                          }
                         
                     }

                $("#contratacao").on("input", function(){
              var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz*&%$#@!]/g;
              if(this.value.match(regexp)){
                $(this).val(this.value.replace(regexp,''));
              }
            });
            
            </script>

            <br><label for="nasc"> Data de nascimento: </label>
            <input type="text" name="nasc" id="nasc"placeholder="00/00/0000" OnKeyUp="mPscaraData(this);" maxlength="10"  value="<?php if(isset($res)){echo $res['nascimento_fun'];}?>">

              <script>
              // colocar os / . etc nos campos automaticamente
                function mPscaraData(campoData){
                          var data = campoData.value;
                          if (data.length == 2){
                              data = data + '/';
                              document.forms[0].nasc.value = data;
                  return true;              
                          }
                          if (data.length == 5){
                              data = data + '/';
                              document.forms[0].nasc.value = data;
                              return true;
                          }
                         
                     }

                $("#nasc").on("input", function(){
              var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz*&%$#@!]/g;
              if(this.value.match(regexp)){
                $(this).val(this.value.replace(regexp,''));
              }
            });
            
            </script>

            <br><label for="cargo"> Cargo: </label>
            <select name="cargo"id="cargo" onchange="exibir_ocultar()">
              <option value="<?php if(isset($res)){echo $res['cargo'];}?>"> <?php if(isset($res)){echo $res['cargo'];} else{echo "Selecione";}?> </option> 
              <option value="secretario"> Secretario(a) </option>
			  <option value="medico"> Médico(a) </option> 
			  <option value="tecEnfermagem">Técnico(a) em enfermagem</option>
			  <option value="farmaceutico"> Farmacêutico(a) </option>
			  <option value="administração">Administração </option>
			</select>

            <br><div id="crm" name="crm"> CRM: <br/>
            <input type="text" name="crm" value="<?php if(isset($res)){echo $res['crm'];}?>"></div><br/>   

           <script>
            function exibir_ocultar(){
            var valor = $("#cargo").val();

            if(valor == 'medico' ){
                 $("#crm").show();
             } else {
                 $("#crm").hide();
             }
        };
            </script>

  			<br><label for="salario"> Salário: </label>
            <input type="text" name="salario" id="salario" OnKeyUp="moscaraData(this);" value="<?php if(isset($res)){echo $res['salario'];}?>">

            <script>
                function moscaraData(campoData){
                      var data = campoData.value;
                      if (data.length == 1){
                          data =  'R$ ' + data ;
                          document.forms[0].salario.value = data;
              return true;              
                      }
}
            $("#salario").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqrSsTtUuVvWwXxYyZz/*&%#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            
            </script>

            <br><label for="cpf"> CPF: </label>
            <input type="text" name="cpf" id="cpf"placeholder="Ex: XXX.XXX.XXX-XX" onchange="validarCPF()" maxlength="11" pattern="([0-9]{3})" value="<?php if(isset($res)){echo $res['cpf_fun'];}?>">

            <script>
        // validação de cpf
               function validarCPF(cpf) { 
                var cpf = document.getElementById('cpf').value;
                cpf = cpf.replace(/\D+/g, '');  
                
                if(cpf == '') return false; 
                // Elimina CPFs invalidos conhecidos  
                if (cpf.length != 11 || 
                  cpf == "00000000000" || 
                  cpf == "11111111111" || 
                  cpf == "22222222222" || 
                  cpf == "33333333333" || 
                  cpf == "44444444444" || 
                  cpf == "55555555555" || 
                  cpf == "66666666666" || 
                  cpf == "77777777777" || 
                  cpf == "88888888888" || 
                  cpf == "99999999999")
                      
                // Valida 1o digito 
                add = 0;  
                for (i=0; i < 9; i ++)    
                  add += parseInt(cpf.charAt(i)) * (10 - i);  
                  rev = 11 - (add % 11);  
                  if (rev == 10 || rev == 11)   
                    rev = 0;  
                  if (rev != parseInt(cpf.charAt(9)))   
                        
                // Valida 2o digito 
                add = 0;  
                for (i = 0; i < 10; i ++)   
                  add += parseInt(cpf.charAt(i)) * (11 - i);  
                rev = 11 - (add % 11);  
                if (rev == 10 || rev == 11) 
                  rev = 0;  
                
                if (rev != parseInt(cpf.charAt(10)))
                   alert("CPF inválido");  

                return true;
              }

               $("#cpf").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            </script>

           <br> <label for="rg"> RG: </label>
            <input type="text" name="rg" id="rg"placeholder="Ex: YY.YYY.YYY-Y"   OnKeyUp="mescaraData(this);" maxlength="12"value="<?php if(isset($res)){echo $res['rg_fun'];}?>">

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

            $("#rg").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            }
            </script>

           <br> <label for="tel"> Telefone: </label>
            <input type="text" name="tel" id="tel" placeholder="Ex: (11)90000-0000" maxlength="14"  OnKeyUp="miscaraData(this);" value="<?php if(isset($res)){echo $res['telefone'];}?>">

            <script >

            function miscaraData(campoData){
                      var data = campoData.value;
                      if (data.length == 1){
                          data = '(11)9' + data  ;
                          document.forms[0].tel.value = data;
              return true;              
                      }
                      if (data.length == 9){
                          data = data + '-';
                          document.forms[0].tel.value = data;
                          return true;
                      }
                      
                  }
                 $("#tel").on("input", function(){
          var regexp = /[AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz/*&%$#@!<>,^~}{}]/g;
          if(this.value.match(regexp)){
            $(this).val(this.value.replace(regexp,''));
          }
        });
            </script>

           <br> <label for="email"> Email </label>
            <input type="email" name="email" id="email" placeholder="Ex: kiyote1342@gmail.com" value="<?php if(isset($res)){echo $res['email_fun'];}?>" >

            <br><label for="senha"> senha: </label>
            <input type="password" name="senha" id="senha">

            <br> Arquivo: <input type="file" required name="arquivo">
            
            <?php

          include("conexao2.php");

          $msg = false;

          if(isset($_FILES['arquivo'])){

            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
            #$novo_nome = time() . $extensao; //define o nome do arquivo
            $rg = addslashes($_POST['rg']).".jpg";
            $novo_nome = addslashes($_POST['rg']).".jpg";
            $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

            $sql_code = "INSERT INTO perfil (rg,codigo, img, data) VALUES('$rg','$rg', '$novo_nome', NOW())";

            if($conn->query($sql_code))
              $msg = "Arquivo enviado com sucesso!";
            else
              $msg = "Falha ao enviar arquivo.";

          }

        ?>
                
                <button type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";}?>" name="cadastrar"> Cadastrar </button>

            </section>

            <section id="direita">
            	<table>
            		<tr> 
            			<td>Nome </td>
            			<td>Data de contratação </td>
            			<td>Salário </td>
            			<td>Cargo </td>
            			<td>CPF </td>
            			<td>RG </td>
            			<td>Telefone </td>
            			<td>CRM </td>
            			<td colspan="2">
            		</tr>
            	<?php
            		$dados = $p->buscarDados();
            		if(count($dados) > 0) #se tem cadastro no banco
            		{
            			for ($i=0; $i < count($dados); $i++) 
            			{
            				echo "<tr>";
            				foreach ($dados[$i] as $k => $v) 
            				{
            					if($k != "id_fun")
            					{
            						echo "<td>".$v."</td>";
            					}
            				}?>
            				
            			
            			<td>
                            <a href="adm.php?id_up=<?php echo $dados[$i]['id_fun'];?>"> Editar </a> 
                            <a href="adm.php?id_fun=<?php echo $dados[$i]['id_fun'];?>"> Excluir </a>
                        </td>
            			<?php  
            			echo "</tr>";
            			}
            		}
            		else # se o banco esta vazio
            		{
            			echo "O banco esta vazio";
            		}

            	?>
            	
            		<tr>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
            			<td></td>
                        <td></td>
            		</tr>
            	</table>
            </section>
    
</p>

</form>
</body>
<footer><!-- codigo do rodapé--></footer>
</html>
<?php
		if(isset($_GET['id_fun']))
		{
				$id_fun = addslashes($_GET['id_fun']);
				$p->excluir($id_fun);
				header("location:adm.php");
		}

?>