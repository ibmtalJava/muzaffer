<?
class MysqlAdd{
  public $table;
  public $columns;
  public function __construct(){
    $this->table="";
    $this->columns=array();
  }
}
class MysqlPDA {
  public $dbname;
  public $host;
  public $connectionUsername;
  public $connectionPassword;
  public $pdo;
  public function __construct($pdaHost,$pdaDbname,$pdaUsername,$pdaPassword){
    $this->host=$pdaHost;
    $this->dbname=$pdaDbname;
    $this->connectionUsername=$pdaUsername;
    $this->connectionPassword=$pdaPassword;

  }
  public function connect(){
      try {

        $pdo= new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->connectionUsername","$this->connectionPassword");


      } catch (PDOException $e) {

      }
      $this->pdo=$pdo;
      return $pdo;
  }
  public function delete($deleteEntity){
      $tablename="";
      $idColumn="";
      $id=0;
      foreach ($deleteEntity as $key => $value) {
        if($key=="table"){
          $tablename=$deleteEntity->{"".$key};
        }
        $item=$deleteEntity->{"".$key};
        if($item->identity){
          $idColumn="".$item->column;
          $id="".$item->value;
        }

      }
      if($id){
        $this->pdo->query("delete from $tablename where $idColumn=$id");
      }

  }
  public function add($addEntity){
    $query=new MysqlAdd();
    foreach ($addEntity as $key => $value) {
      if($key=="table"){
        $query->table=$addEntity->{"".$key};
      }
      else{
        $item=$addEntity->{"".$key};
        if(!$item->identity){
          $i=count($query->columns);
          $query->columns[$i]->name="".$item->column;
          $query->columns[$i]->value="".$item->value;
          $query->columns[$i]->type="".$item->type;

        }
      }
    }
    $q="insert into ".$query->table."(";
    for($i=0;$i<count($query->columns);$i++){
      if($i>0) $q.=",";
      $q.=$query->columns[$i]->name;
    }
    $q.=") values (";
    for($i=0;$i<count($query->columns);$i++){
      if($i>0) $q.=",";
      $q.="'".$query->columns[$i]->value."'";
    }
    $q.=")";

    $this->pdo->query($q);
  }
  public function update($addEntity){
    $idColumn="";
    $id=0;
    $query=new MysqlAdd();
    foreach ($addEntity as $key => $value) {
      if($key=="table"){
        $query->table=$addEntity->{"".$key};
      }
      else{
        $item=$addEntity->{"".$key};
        if(!$item->identity){
          $i=count($query->columns);
          $query->columns[$i]->name="".$item->column;
          $query->columns[$i]->value="".$item->value;
          $query->columns[$i]->type="".$item->type;
        }
        else{
          $idColumn=$item->column;
          $id=$item->value;
        }
      }
    }
    $q="update ".$query->table." set ";
    for($i=0;$i<count($query->columns);$i++){
      if($i>0) $q.=",";
      $q.=$query->columns[$i]->name."='".$query->columns[$i]->value."'";
    }
    $q.=" where $idColumn=$id";


    $this->pdo->query($q);
  }

  public function get($addEntity){

    $tableData=$this->pdo->query(
      "select * from ".$addEntity->table." where id=".$addEntity->id->value
    );



    return $tableData->fetchObject();

  }
  public function getAll($addEntity){
        $tableData=$this->pdo->query(
          "select * from ".$addEntity->table
        );
        $listData=array();
        while($d=$tableData->fetchObject()){
          $listData[count($listData)]=$d;
        }
        return $listData;
  }
}
?>
