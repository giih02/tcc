<!-- Esta pagina esta ligada a pagina 
	adm.php e faz a conexao com a pagina conexao.php, busca os dados,deleta e cadastra-->
<?php


class Funcionarios{ 
	private $pdo;
	
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

#busca os dados e coloca no lado direito da tela 
	public function buscarDados()
	{
		$res = array();
		$cmd = $this->PDO->query("SELECT id_fun,nome_fun,data_contratacao,nascimento_fun,cargo,crm,salario,cpf_fun,rg_fun,telefone,email_fun  FROM funcionarios ORDER BY nome_fun");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		Return $res; 

	}

	public function cadastrarPessoas($nome,$contratacao,$nasc,$cargo,$crm,$salario,$cpf,$rg,$tel,$email,$senha) #cadastrar funcionario
	{
		#verificar se o email já está cadastrado
		$cmd = $this->PDO->prepare("SELECT id_fun FROM funcionarios WHERE email = :e");
		$cmd->bindValue(":e",$email);
		$cmd->execute();
		if($cmd->rowCount() > 0)#email já existe no banco
		{
			return false;
		}
		else #email não existe	
		{
			$cmd = $this->PDO->prepare("INSERT INTO funcionarios (nome_fun,data_contratacao,nascimento_fun,cargo,crm,salario,cpf_fun,rg_fun,telefone,email_fun,senha_fun) VALUES (:nome,:contratacao,:nasc,:cargo,:c,:sal,:cpf,:rg,:tel,:email,:senha)");

			$cmd->bindValue(":nome",$nome);
			$cmd->bindValue(":contratacao",$contratacao);
			$cmd->bindValue(":nasc",$nasc);
			$cmd->bindValue(":cargo",$cargo);
			$cmd->bindValue(":c",$crm);
			$cmd->bindValue(":sal",$salario);
			$cmd->bindValue(":cpf",$cpf);
			$cmd->bindValue(":rg",$rg);
			$cmd->bindValue(":tel",$tel);
			$cmd->bindValue(":email",$email);
			$cmd->bindValue(":senha",$senha);
			$cmd->execute();
			return true;
		}
	}

	


	public function excluir($id_fun) 
	{
		$cmd = $this->PDO->prepare("DELETE FROM funcionarios WHERE id_fun = :id_fun");
		$cmd->bindValue(":id_fun",$id_fun);
		$cmd->execute();

	}

	public function alterar($id_up)
	{
		$res = array();
		$cmd = $this->PDO->prepare("SELECT * FROM funcionarios WHERE id_fun = :id_fun");
		$cmd->bindValue(":id_fun",$id_up);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}

}

?>