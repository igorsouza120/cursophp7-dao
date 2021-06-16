<?php 

class Sql extends PDO { //herança do sistema da classe PDO

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost","root",""); //conexão com o banco via construtor.

	}


	private function setParams($statments, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($key, $value);

		}

	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	}


	public function execQuery($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt,$params);

		$stmt->execute();

		return $stmt;


	}


	public function select($rawQuery, $params = array()):array
	{

	$stmt = $this->execQuery($rawQuery, $params); // precisamos do STMT pq o método FETCH está dentro dele, é um objeto do stmt.

	return $stmt->fetchAll(PDO::FETCH_ASSOC);





	}


}



?>