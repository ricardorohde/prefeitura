<?php

namespace Library;

class Login
{
  private $id;
  private $username;
  private $password;
  private $database;

  public $errors = array();

  /**
   * Construtor
   * Inicia configurações da class e
   * define qual metodo chamar
   *
   * @return void
   */
  public function __construct()
  {
    

    $this->database = new Database;
    
    if (isset($_GET["logout"])) {
            $this->userLogout();
        }
        elseif (isset($_POST["username"]) && isset($_POST['password'])) {
            $this->userPostLogin();
    }
  }

  /**
   * userPostLogin
   * Capturação dados do formulário de login e
   * grava informações de sessão
   *
   * @return false Caso ocorra algum erro
   */
  private function userPostLogin()
  {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ( $_POST['username'] == '' || $_POST['password'] == '') {
        $this->errors[] = "Usuário ou senha inválidos! Tente novamente.";
        return false;
      } else {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
      }

      $stmt = $this->database->prepare("SELECT * FROM users WHERE username=?");
      $stmt->bindParam(1, $this->username);
      $stmt->execute();

      if ( $stmt->rowCount() == 1 ){  
        /// ERRO AQUI!
        $user = $stmt->fetch(\PDO::FETCH_OBJ);

        if ( $user->password === $this->password ) {
          $this->user_id = $user->id;
          $_SESSION['uid'] = $user->id;
          $_SESSION['username'] = $user->username;
          header('Location: painel/');
        } else {
          $this->errors[] = "Senha está errada. Tente Novamente.";
          return false;
        }
      } else {
        $this->errors[] = "Usuário não existe!";
        return false;
      }
    }
  }

  /**
   * userCheckAuth()
   * Verifica se há usuários na sessão
   * Caso tenha define atributos da class
   *
   * @return void
   */
  public function userCheckAuth()
  {
    if ( !isset($_SESSION['uid']) && !isset($_SESSION['username']) ) {
      header('Location: /painel/login');
    } else {
      $stmt = $this->database->prepare('SELECT * FROM users WHERE id=?');
      $stmt->bindParam(1, $_SESSION['uid']);
      $stmt->execute();

      if ( $stmt->rowCount() == 1 ) {
        $user = $stmt->fetch(\PDO::FETCH_OBJ);
        $this->id = $user->id;
        $this->username = $user->username;
        $this->password = $user->password;
        $this->name = $user->name;
        $this->email = $user->email;
		$this->imagem = $user->imagem;
        $this->tipo = $user->tipo;
        return true;
      }
    }
  }

  /**
   * userLogout
   * Distroi limpa e destroi sessão de login
   *
   * @return void
   */
  public function userLogout()
  {
    $_SESSION = array();
    session_destroy();
    header('Location: /painel/login');
  }

  /**
   * getUsername
   * Retorna o username do Usuário que está logado
   *
   * @return $this->name string
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * getName
   * Retorna Nome do Usuário que está logado
   *
   * @return $this->name string
   */
  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
	  return $this->email;
  }

  public function getImagem()
  {
	  return $this->imagem;
  }
    
   public function getTipo()
  {
	  return $this->tipo;
  }

  public function getId()
  {
	  return $this->id;
  }

  public function getPassword()
  {
	  return $this->password;
  }
}
