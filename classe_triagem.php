<?php



class enfermagem{ 
	private $pdo;
	public $msgErro = "";
	//conexão com o banco
	public function __construct($dbname,$host,$user,$senha)
	{
		try{
			$this->PDO = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
		}
	
	catch(PDOException $e){
	echo "Ero com banco de dados: ".$e->getMessage();
	exit();
}
	catch(Exception $e){
	echo "Ero com banco de dados: ".$e->getMessage();
	exit();
}	
}
	public function conecta($nome,$host,$usuario,$senha)
	{
		global $pdo;

		try{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		}
	
		catch(PDOException $e){
		 $msgErro = $e->getMessage();
}

	}

############LOGIN DO USUARIO###############################################################################################
	public function login($rg,$senha)
	{
		global $pdo;

		$cmd = $pdo->prepare("SELECT * FROM usuario WHERE rg = :rg AND senha = :senha");

			$cmd->bindValue(":rg",$rg);
			$cmd->bindValue(":senha",$senha);
			$cmd->execute();

			if($cmd->rowCount() > 0)
			{
				$dado = $cmd->fetch();
				$_SESSION['nome'] = $dado['nome']; #nome do usuario logado
				$_SESSION['rg'] = $dado['rg'];
				$_SESSION['cpf'] = $dado['cpf'];
				$_SESSION['nascimento'] = $dado['nascimento']; #idade do usuario logado
				$_SESSION['sexo'] = $dado['sexo']; #idade do usuario logado
				$this->puxa();
				$this->consultas1();
				return true;
			}
			
			else
			{
				return false; #nn foi possivel logar
			}
			

	}


	public function puxa(){

		global $pdo;
				$cmd1 = $pdo->prepare("SELECT * FROM exames2 WHERE rg = '$_SESSION[rg]'");
				
				$cmd1->execute();

				if($cmd1->rowCount() > 0)
				{
					$dado = $cmd1->fetch();
					$_SESSION['nomeM'] = $dado['nomeM'];
					$_SESSION['codM'] = $dado['codM'];
					$_SESSION['dataS'] = $dado['data'];
					$_SESSION['exame'] = $dado['exame'];
					$_SESSION['maquina'] = $dado['maquina']; 
					$_SESSION['obs'] = $dado['observacoes'];  
					header("Location: perfil.php");
					return true;
				}
			
			else
			{
				return false; #nn foi possivel logar
			} 
			

	}


##CADASTRAR DADOS DA TRIAGEM #######################################################################################
	
	public function triagem($rg,$dataTriagem,$peso,$altura,$imc,$TSanguineo,$medicacao,$doenca,$alergia,$fumante,$bebidas){

			$cmd = $this->PDO->prepare("INSERT INTO triagem (rg,dataTriagem,peso,altura,imc,TSanguineo,medicacao,doenca,alergia,fumante,bebida) VALUES (:rg,:dataTriagem,:peso,:altura,:imc,:TSanguineo,:med,:doe,:al,:fum,:be)");

			$cmd->bindValue(":rg",$rg);
			$cmd->bindValue(":dataTriagem",$dataTriagem);
			$cmd->bindValue(":peso",$peso);
			$cmd->bindValue(":altura",$altura);
			$cmd->bindParam(":imc", $imc);
			$cmd->bindValue(":TSanguineo",$TSanguineo);
			$cmd->bindValue(":med",$medicacao);
			$cmd->bindValue(":doe",$doenca);
			$cmd->bindValue(":al",$alergia);
			$cmd->bindValue(":fum",$fumante);
			$cmd->bindValue(":be",$bebidas);
			$cmd->execute();
			return true;


}
######CADASTRO DO PEDIDO DE EXAME##########################################################################################
	
	public function exames2($rg,$data,$nomeM,$codM,$consulta,$obs,$maquina){

			$cmd = $this->PDO->prepare("INSERT INTO exames2 (rg,data,nomeM,codM,exame,observacoes,maquina) VALUES (:rg,:d,:nm,:cm,:s,:u,:l)");

			$cmd->bindValue(":rg",$rg);
			$cmd->bindValue(":d",$data);
			$cmd->bindValue(":nm",$nomeM);
			$cmd->bindValue(":cm",$codM);
			$cmd->bindValue(":s",$consulta);
			$cmd->bindValue(":u",$obs);
			$cmd->bindValue(":l",$maquina);
			$cmd->execute();
			return true;


}
###########BUSCA DA AGENDA ################################################################################################
	public function buscarDados3()
	{
		$cmd = $this->PDO->prepare("SELECT * FROM agendaMedico WHERE id_med = '$_SESSION[codM]'");
		
		$cmd->execute();

			if($cmd->rowCount() > 0)
			{

				$dado = $cmd->fetch();
				$_SESSION['segunda'] = $dado['segunda'];
				$_SESSION['terca'] = $dado['terca'];
				$_SESSION['quarta'] = $dado['quarta'];
				$_SESSION['quinta'] = $dado['quinta'];
				$_SESSION['sexta'] = $dado['sexta'];

				$_SESSION['seg'] = $dado['seg'];
				$_SESSION['ter'] = $dado['ter'];
				$_SESSION['qua'] = $dado['qua'];
				$_SESSION['qui'] = $dado['qui'];
				$_SESSION['sex'] = $dado['sex'];

				list($_SESSION['hora1'], $_SESSION['hora2'], $_SESSION['hora3'],$_SESSION['hora4'], $_SESSION['hora5'], $_SESSION['hora6'],$_SESSION['hora7'], $_SESSION['hora8'], $_SESSION['hora9'],$_SESSION['hora10'], $_SESSION['hora11'], $_SESSION['hora12']) = explode(",", $dado['seg_hora']); 

				list($_SESSION['hora11'], $_SESSION['hora22'], $_SESSION['hora33'],$_SESSION['hora44'], $_SESSION['hora55'], $_SESSION['hora66'],$_SESSION['hora77'], $_SESSION['hora88'], $_SESSION['hora99'],$_SESSION['hora100'], $_SESSION['hora111'], $_SESSION['hora122']) = explode(",", $dado['ter_hora']);

				list($_SESSION['hora111'], $_SESSION['hora222'], $_SESSION['hora333'],$_SESSION['hora444'], $_SESSION['hora555'], $_SESSION['hora666'],$_SESSION['hora777'], $_SESSION['hora888'], $_SESSION['hora999'],$_SESSION['hora1000'], $_SESSION['hora1111'], $_SESSION['hora1222']) = explode(",", $dado['qua_hora']);

				list($_SESSION['hora1111'], $_SESSION['hora2222'], $_SESSION['hora3333'],$_SESSION['hora4444'], $_SESSION['hora5555'], $_SESSION['hora6666'],$_SESSION['hora7777'], $_SESSION['hora8888'], $_SESSION['hora9999'],$_SESSION['hora10000'], $_SESSION['hora11111'], $_SESSION['hora12222']) = explode(",", $dado['qui_hora']);

				list($_SESSION['hora11111'], $_SESSION['hora22222'], $_SESSION['hora33333'],$_SESSION['hora44444'], $_SESSION['hora55555'], $_SESSION['hora66666'],$_SESSION['hora77777'], $_SESSION['hora88888'], $_SESSION['hora99999'],$_SESSION['hora100000'], $_SESSION['hora111111'], $_SESSION['hora122222']) = explode(",", $dado['sex_hora']);
				return true;
			}
			
			else
			{
				return false; #nn foi possivel logar
			} 

	}

#####LOGIN DOS FUNCIONARIOS################################################################################################
	
	public function login2($rg_fun,$senha_fun)
	{
		global $pdo;

		$cmd = $pdo->prepare("SELECT * FROM funcionarios WHERE rg_fun = :rg_fun AND senha_fun = :senha_fun");

			$cmd->bindValue(":rg_fun",$rg_fun);
			$cmd->bindValue(":senha_fun",$senha_fun);
			$cmd->execute();

			if($cmd->rowCount() > 0)
			{
				$dado = $cmd->fetch();
				$_SESSION['nome_fun'] = $dado['nome_fun']; #nome do usuario logado
				$_SESSION['crm'] = $dado['crm'];
				$_SESSION['rg_fun'] = $dado['rg_fun'];
				$_SESSION['cargo'] = $dado['cargo']; #idade do usuario logado
				return true;
			}
			
			else
			{
				return false; #nn foi possivel logar
			}
	}

#######################CADASTRAMENTO DE AGENDAMENTO DE  HORARIOS############################################################
	
	public function agendamentoMedico($crm,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex){

			$cmd = $this->PDO->prepare("INSERT INTO agendaMedico (id_med,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$crm);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;


}

#########################################AGENDAMENTOS DOS USUARIOS#########################################################

	public function agendamentoSEG2($cod_med,$cod_pac,$dia,$hora,$diaO){
				
				$cmd = $this->PDO->prepare("INSERT INTO consultas(cod_med,cod_pac,dia,hora,diaO) VALUES (:c,:p,:d,:h,:o)");
		
					$cmd->bindValue(":c",$cod_med);
					$cmd->bindValue(":p",$cod_pac);
					$cmd->bindValue(":d",$dia);
					$cmd->bindValue(":h",$hora);
					$cmd->bindValue(":o",$diaO);
					$cmd->execute();
					return true;
		

}
	
	public function agendamentoSEG($seg_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMedico SET seg_hora = :j WHERE id_med ='$_SESSION[codM]'");

			$cmd->bindValue(":j",$seg_hora1);
			$cmd->execute();
			$this->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora);
			return true;				
}

	
#########################################TERÇA#######################################################################
	public function agendamentoTER($ter_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMedico SET ter_hora = :j WHERE id_med ='$_SESSION[codM]'");

			$cmd->bindValue(":j",$ter_hora1);
			$cmd->execute();
			$this->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora);
			return true;				
}


#########################################QUARTA#######################################################################
	public function agendamentoQUA($qua_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMedico SET qua_hora = :j WHERE id_med ='$_SESSION[codM]'");

			$cmd->bindValue(":j",$qua_hora1);
			$cmd->execute();
			$this->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora);
			return true;				
}

		
#########################################QUINTA#######################################################################
	public function agendamentoQUI($qui_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMedico SET qui_hora = :j WHERE id_med ='$_SESSION[codM]'");

			$cmd->bindValue(":j",$qui_hora1);
			$cmd->execute();
			$this->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora);
			return true;				
}

	

#########################################SEXTA#######################################################################
	public function agendamentoSEX($sex_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMedico SET sex_hora = :j WHERE id_med ='$_SESSION[codM]'");

			$cmd->bindValue(":j",$sex_hora1);
			$cmd->execute();
			$this->agendamentoSEG2($cod_med,$cod_pac,$dia,$hora);
			return true;				
}

	

##############TRAZER AS CONSULTAS AGENDADAS########################################################################
	public function consultas(){
		

		$cmd = $this->PDO->prepare("SELECT * FROM consultas WHERE cod_med = '$_SESSION[crm]'");
			$cmd->execute();

			if($cmd->rowCount() > 0)
			{
				$dado = $cmd->fetch();
				$_SESSION['conDia'] = $dado['dia'];
				$_SESSION['conHora'] = $dado['hora']; 
				return true;
			}
			
			else
			{
				return false; #erro
			}
	}

#########################################################################################################
	public function anotacoes($rg,$Dconsulta,$nomeM,$reclamacoes,$consideracoes,$medicamentos){

			$cmd = $this->PDO->prepare("INSERT INTO anotacoes (rg,Dconsulta,nomeM,reclamacoes,consideracoes,medicamentos) VALUES (:rg,:dia,:nome,:re,:con,:med)");

			$cmd->bindValue(":rg",$rg);
			$cmd->bindValue(":dia",$Dconsulta);
			$cmd->bindValue(":nome",$nomeM);
			$cmd->bindValue(":re",$reclamacoes);
			$cmd->bindValue(":con",$consideracoes);
			$cmd->bindValue(":med", $medicamentos);
			$cmd->execute();
			return true;


}

public function consultas1(){
		$cmd = $this->PDO->prepare("SELECT * FROM consultas WHERE cod_pac = '$_SESSION[rg]'");
		
		$cmd->execute();

			if($cmd->rowCount() > 0)
			{

				$dado = $cmd->fetch();
				$_SESSION['dia1'] = $dado['dia'];
				$_SESSION['hora1'] = $dado['hora'];
				$_SESSION['med'] = $dado['cod_med'];
				$_SESSION['diaOf'] = $dado['diaO'];

				$_SESSION['dia2'] = $dado['dia'];
				$_SESSION['hora2'] = $dado['hora'];
				$_SESSION['med2'] = $dado['cod_med'];
				$_SESSION['diaOf2'] = $dado['diaO'];

				$_SESSION['dia3'] = $dado['dia'];
				$_SESSION['hora3'] = $dado['hora'];
				$_SESSION['med3'] = $dado['cod_med'];
				$_SESSION['diaOf3'] = $dado['diaO'];

				$_SESSION['dia4'] = $dado['dia'];
				$_SESSION['hora4'] = $dado['hora'];
				$_SESSION['med4'] = $dado['cod_med'];
				$_SESSION['diaOf4'] = $dado['diaO'];
				
			}
			
			else
			{
				return false; #nn foi possivel logar
			} 
		

	}

	public function pesquisar1(){
		$cmd = $this->PDO->prepare("SELECT * FROM funcionarios WHERE cargo = '$_SESSION[espe]'");
		
		$cmd->execute();

			if($cmd->rowCount() > 0)
			{

				$dado = $cmd->fetch();
				$_SESSION['medico'] = $dado['nome_fun'];
				$_SESSION['crm'] = $dado['crm'];
				
		
				
			}
			
			else
			{
				return false; #nn foi possivel logar
			} 


	}
	public function buscarDados4()
	{
		$cmd = $this->PDO->prepare("SELECT * FROM agendaMaquina WHERE maquina = '$_SESSION[maquina]' and local = '$_SESSION[local]'");
		
		$cmd->execute();

			if($cmd->rowCount() > 0)
			{

				$dado = $cmd->fetch();
				$_SESSION['funcio'] = $dado['funcionando'];

				$_SESSION['segunda'] = $dado['segunda'];
				$_SESSION['terca'] = $dado['terca'];
				$_SESSION['quarta'] = $dado['quarta'];
				$_SESSION['quinta'] = $dado['quinta'];
				$_SESSION['sexta'] = $dado['sexta'];

				$_SESSION['seg'] = $dado['seg'];
				$_SESSION['ter'] = $dado['ter'];
				$_SESSION['qua'] = $dado['qua'];
				$_SESSION['qui'] = $dado['qui'];
				$_SESSION['sex'] = $dado['sex'];

				list($_SESSION['hora1'], $_SESSION['hora2'], $_SESSION['hora3'],$_SESSION['hora4'], $_SESSION['hora5'], $_SESSION['hora6'],$_SESSION['hora7'], $_SESSION['hora8'], $_SESSION['hora9'],$_SESSION['hora10'], $_SESSION['hora11'], $_SESSION['hora12']) = explode(",", $dado['seg_hora']); 

				list($_SESSION['hora11'], $_SESSION['hora22'], $_SESSION['hora33'],$_SESSION['hora44'], $_SESSION['hora55'], $_SESSION['hora66'],$_SESSION['hora77'], $_SESSION['hora88'], $_SESSION['hora99'],$_SESSION['hora100'], $_SESSION['hora111'], $_SESSION['hora122']) = explode(",", $dado['ter_hora']);

				list($_SESSION['hora111'], $_SESSION['hora222'], $_SESSION['hora333'],$_SESSION['hora444'], $_SESSION['hora555'], $_SESSION['hora666'],$_SESSION['hora777'], $_SESSION['hora888'], $_SESSION['hora999'],$_SESSION['hora1000'], $_SESSION['hora1111'], $_SESSION['hora1222']) = explode(",", $dado['qua_hora']);

				list($_SESSION['hora1111'], $_SESSION['hora2222'], $_SESSION['hora3333'],$_SESSION['hora4444'], $_SESSION['hora5555'], $_SESSION['hora6666'],$_SESSION['hora7777'], $_SESSION['hora8888'], $_SESSION['hora9999'],$_SESSION['hora10000'], $_SESSION['hora11111'], $_SESSION['hora12222']) = explode(",", $dado['qui_hora']);

				list($_SESSION['hora11111'], $_SESSION['hora22222'], $_SESSION['hora33333'],$_SESSION['hora44444'], $_SESSION['hora55555'], $_SESSION['hora66666'],$_SESSION['hora77777'], $_SESSION['hora88888'], $_SESSION['hora99999'],$_SESSION['hora100000'], $_SESSION['hora111111'], $_SESSION['hora122222']) = explode(",", $dado['sex_hora']);
				return true;
			}
			
			else
			{
				return false; #nn foi possivel logar
			} 

	}

	public function maquina1($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}

	public function maquina2($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina3($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina4($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina5($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina6($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina7($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina8($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
	public function maquina9($local,$maquina,$funcionando,$segunda,$seg_hora,$terca,$ter_hora,$quarta,$qua_hora,$quinta,$qui_hora,$sexta,$sex_hora,$seg,$ter,$qua,$qui,$sex)
	{
		$cmd = $this->PDO->prepare("INSERT INTO agendaMaquina (local,maquina,funcionando,segunda,seg_hora,terca,ter_hora,quarta,qua_hora,quinta,qui_hora,sexta,sex_hora,seg,ter,qua,qui,sex) VALUES (:id,:ol,:oli,:s,:sh,:t,:th,:q,:qh,:w,:wh,:se,:seh,:se,:te,:qu,:q1,:s1)");

			$cmd->bindValue(":id",$local);
			$cmd->bindValue(":ol",$maquina);
			$cmd->bindValue(":oli",$funcionando);
			$cmd->bindValue(":s",$segunda);
			$cmd->bindValue(":sh",$seg_hora);
			$cmd->bindValue(":t",$terca);
			$cmd->bindValue(":th",$ter_hora);
			$cmd->bindValue(":q",$quarta);
			$cmd->bindValue(":qh",$qua_hora);
			$cmd->bindValue(":w",$quinta);
			$cmd->bindValue(":wh",$qui_hora);
			$cmd->bindValue(":se",$sexta);
			$cmd->bindValue(":seh",$sex_hora);

			$cmd->bindValue(":se",$seg);
			$cmd->bindValue(":te",$ter);
			$cmd->bindValue(":qu",$qua);
			$cmd->bindValue(":q1",$qui);
			$cmd->bindValue(":s1",$sex);
			$cmd->execute();
			return true;
	}
############## AGENDAMENTO DE EXAMES ################################################################################
	public function agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN){
				
			$maquina = $_SESSION['maquina'];
    		$local = $_SESSION['local'];
			$cod_pac = 	$_SESSION['rg'];
			$dia = 	$_SESSION['diaF'];
	    	$hora =	$_SESSION['horaU'];
	    	$diaO = $_SESSION['diaO'];

				$cmd = $this->PDO->prepare("INSERT INTO exames(maquina,local,cod_pac,dia,hora,diaO,exameN) VALUES (:c,:l,:p,:d,:h,:o,:i)");
		
					$cmd->bindValue(":c",$maquina);
					$cmd->bindValue(":l",$local);
					$cmd->bindValue(":p",$cod_pac);
					$cmd->bindValue(":d",$dia);
					$cmd->bindValue(":h",$hora);
					$cmd->bindValue(":o",$diaO);
					$cmd->bindValue(":i",$exameN);
					$cmd->execute();
					return true;
		

}
	
	public function agendamentoSEG22($seg_hora1){


			$cmd = $this->PDO->prepare("UPDATE agendaMaquina SET seg_hora = :j WHERE maquina ='$_SESSION[maquina]' and local = '$_SESSION[local]'");

			$cmd->bindValue(":j",$seg_hora1);
			$cmd->execute();
			$this->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN);
			return true;				
}

	
#########################################TERÇA#######################################################################
	public function agendamentoTER2($ter_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMaquina SET ter_hora = :j WHERE maquina ='$_SESSION[maquina]' and local = '$_SESSION[local]'");

			$cmd->bindValue(":j",$ter_hora1);
			$cmd->execute();
			$this->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN);
			return true;				
}


#########################################QUARTA#######################################################################
	public function agendamentoQUA2($qua_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMaquina SET qua_hora = :j WHERE maquina ='$_SESSION[maquina]' and local = '$_SESSION[local]'");

			$cmd->bindValue(":j",$qua_hora1);
			$cmd->execute();
			$this->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN);
			return true;				
}

		
#########################################QUINTA#######################################################################
	public function agendamentoQUI2($qui_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMaquina SET qui_hora = :j WHERE maquina ='$_SESSION[maquina]' and local = '$_SESSION[local]'");

			$cmd->bindValue(":j",$qui_hora1);
			$cmd->execute();
			$this->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN);
			return true;				
}

	

#########################################SEXTA#######################################################################
	public function agendamentoSEX2($sex_hora1){

			$cmd = $this->PDO->prepare("UPDATE agendaMaquina SET sex_hora = :j WHERE maquina ='$_SESSION[maquina]' and local = '$_SESSION[local]'");

			$cmd->bindValue(":j",$sex_hora1);
			$cmd->execute();
			$this->agendamentoSEG3($maquina,$local,$cod_pac,$dia,$hora,$diaO,$exameN);
			return true;				
}

public function exames1(){
		$cmd = $this->PDO->prepare("SELECT * FROM exames WHERE cod_pac = '$_SESSION[rg]' and exameN = '$_SESSION[exame]' and local != ''");
		
		$cmd->execute();

			if($cmd->rowCount() > 0)
			{

				$dado = $cmd->fetch();
				$_SESSION['exameT'] = $dado['exameN'];
				$_SESSION['dia1'] = $dado['dia'];
				$_SESSION['hora1'] = $dado['hora'];
				$_SESSION['local'] = $dado['local'];
				$_SESSION['diaOf'] = $dado['diaO'];

				
			}
			
			else
			{
				return false; #nn foi possivel logar
			} 
		

	}


}?>
