 <?php
	Class conectar{
		public $server = "localhost";
		public $username = "root";
		public $password = "";
		public $banco = "adote_doguinho";
		
		public $conn;
		public $erro;
		
		public function __construct(){
			$this->conexao();
		}
		
		private function conexao(){
		
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->banco);

		if (!$this->conn) {
			$this->erro ="Erro na conexao!".$this->conn->connect_error;
			return false;
			}
		}		

		// consulta de dados
		public function consulta($sql){
			$result = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}else{
				return false;
			}
		}
		
		//cadastrar usuários
		public function cadastrarUsuario($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(inserir_linha){
			header("Location: ../Views/index.php?msg=Usuário cadastrado com sucesso!");
				$conn->close();
				exit(); 
			}else{
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);	
			}
		}
		
		//cadastrar produtos
		public function cadastrarCachorros($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(inserir_linha){
				header("Location: gerenciar_cachorros.php?msg=Dados cadastrados com sucesso!");
				$conn->close();
				exit();
			}else{
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);	
			}
		}

		//função de logon de usuário
	    public function logar($sql){
			$email = $_POST['email'];
			$login = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(mysqli_num_rows($login)!=1){
				echo "<p id='erro'>Login inválido!</p>";
			}else{
				session_start();
				$_SESSION['validacao']=1;
				$_SESSION['email'] = $email;
			header("Location: logado.php");
			}	
		}
		
		//funcao deslogar
		function deslogar(){
			session_start();
			session_name('logado');
			unset($_SESSION['validacao']);
			unset($_SESSION['usuario']);
			session_destroy();
			header("Location: ../Views/index.php?msg=Usuário Deslogado!");
		}	
		
		//funcao atualizar usuarios
		public function atualizarUsuario($sql){
			$update_row = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(update_row){
				header("Location: ../Views/gerenciar_usuarios.php?msg=Dados atualizados com sucesso!");
				exit();
			}else{
				die("Erro ao atualizar:(".$this->conn->errno.")".$this->conn->error);
			}
		}
		
		//funcao atualizar cachorros
		public function atualizarCachorros($sql){
			$update_row = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(update_row){
				header("Location: ../Views/gerenciar_cachorros.php?msg=Dados atualizados com sucesso!");
				exit();
			}else{
				die("Erro ao atualizar:(".$this->conn->errno.")".$this->conn->error);
			}
		}
		//funcao apagar usuários
		public function apagarUsuario($sql){
			$apagar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);	
			if(apagar_linha){
					header("Location: ../Views/gerenciar_usuarios.php?msg=Usuário apagado com sucesso"); 
			}else{
				die("Erro ao apagar:(".$this->conn->errno.")".$this->conn->error);
			}		
		}
		
		//funcao apagar cachorros
		public function apagarCachorros($sql){
			$apagar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);	
			if(apagar_linha){
					header("Location: ../Views/gerenciar_cachorros.php?msg=Dados apagados com sucesso"); 
			}else{
				die("Erro ao apagar:(".$this->conn->errno.")".$this->conn->error);
			}		
		}
	
} //fim da classe conexao
	
	
	
	
	