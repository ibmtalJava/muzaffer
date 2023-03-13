<?

class Mapper {
  private $mapIndex;

  public function __construct(){
    $this->mapIndex=10;

  }

  public function mapEntity($mapData){
    $myJSON = json_encode($mapData);

  }

  public function mapData($referenceEntity){

    foreach ($_POST as $key => $value) {
  
        if($referenceEntity->{"".$key}->name==$key) $referenceEntity->{"".$key}->value=$_POST[$key];
    }
    foreach ($_GET as $key => $value) {
        if(!$referenceEntity->{"".$key}->value){
          if($referenceEntity->{"".$key}->name==$key) $referenceEntity->{"".$key}->value=$_GET[$key];
        }
    }
    $result->data=$referenceEntity;
    return true;
  }
}
?>
