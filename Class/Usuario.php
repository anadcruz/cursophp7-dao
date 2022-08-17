<?php

class Usuario{

private $idusuario;
private $deslogin;
private $dessenha;
private $dtcadastro;

public fuction getIdusuario(){
	return $this->idusuario;
}

public fuction setIdusuario($value){
	$this->idusuario = $vale;
}

public fuction getDeslogin(){
	return $this->deslogin;
}

public fuction setDeslogin($value){
	$this->deslogin = $vale;
}

public fuction getDessenha(){
	return $this->dessenha;
}

public fuction setDessenha($value){
	$this->dessenha = $vale;
}

public fuction getDtcadastro(){
	return $this->dtcadastro;
}

public fuction setDtcadastro($value){
	$this->dtcadastro = $vale;
}

public function loadById($id){

 	$sql = new Sql();

 	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
	":ID"=>$id

 ));

if (count($results) > 0){

	$row = $results[0];

	$this->setIdusuario($row['idusuario']);
	$this->setDessenha($row['dessenha']);
	$this->setDeslogin($row['deslogin']);
	$this->setDtcadastro(new DateTime($row['dtcadastro']));

	}
}

public static function getList(){

	$sql = new Sql();

	return $Sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
}

public static function search($login){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array( ':SEARCH' => "%".$login."%"));
}

public fuction login($login, $password){

	$sql = new Sql();

 	$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",array(
	":LOGIN"=>$login,
	":PASSWORD"=>$password

 ));

if (count($results) > 0){

	$row = $results[0];

	$this->setIdusuario($row['idusuario']);
	$this->setDessenha($row['dessenha']);
	$this->setDeslogin($row['deslogin']);
	$this->setDtcadastro(new DateTime($row['dtcadastro']));

	} else {

		throw new Exception("Login e/ou senha inválidos.");
	}

}


public function __toString(){

	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

));
}

}