<?
include("core/pda/mysql/MysqlPDA.php");
class PDA {
  private $connection;
  private $dbname;
  private $host;
  private $connectionUsername;
  private $connectionPassword;
  private $connectionClass;
  private $pdoDatabase;
  private $pdo;
  private $status;
  public function __construct($pdaCon,$pdaHost,$pdaDbname,$pdaUsername,$pdaPassword){
    $this->connection=$pdaCon;
    $this->host=$pdaHost;
    $this->dbname=$pdaDbname;
    $this->connectionUsername=$pdaUsername;
    $this->connectionPassword=$pdaPassword;

      $this->pdoDatabase=new MysqlPDA("","","","");
    switch ($pdaCon) {
        case "mysql":

            $this->pdoDatabase=new MysqlPDA($this->host,$this->dbname,$this->connectionUsername,$this->connectionPassword);
            break;
    }
  }
  public function connect(){
    $this->pdo=$this->pdoDatabase->connect();
    if($this->pdo) $this->status=1; else $this->status=0;
  }
  public function getStatus(){
    return $this->status;
  }
  public function setPDA(){


  }
  public function delete($deleteEntity){
    return $this->pdoDatabase->delete($deleteEntity);
  }
  public function add($addEntity){
    return $this->pdoDatabase->add($addEntity);
  }
  public function update($addEntity){
    return $this->pdoDatabase->update($addEntity);
  }
  public function get($addEntity){
    return $this->pdoDatabase->get($addEntity);
  }
  public function getAll($addEntity){
    return $this->pdoDatabase->getAll($addEntity);
  }
}
?>
