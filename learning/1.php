<?php







class DBconnection {
  // Properties

  private $servername;
  private $username;
  private $password;
  private $dbname;
  private $connection;


  // Methods
  function __construct($servername,$username,$password,$dbname) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;



    try {
      $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->connection = $conn;
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}




function get_connection(){

  return $this->connection;
}


function create_models(){
  
  if ($result = mysqli_query($con, "SELECT * FROM Persons")){




    
  }



}

 
}

$servername = "localhost";
$username = "TESTPHP";
$password = "123";
$dbname = "TESTPHP";


$connection = new DBconnection($servername,$username,$password,$dbname);




  ?>
