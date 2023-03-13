<?
class EntityItem{
  public $name;
  public $column;
  public $value;
  public $type;
  public $identity;
  public $length;
  public $fraction;

  public function __construct($dName,$dColumn,$dType,$dLength) {
    $this->name=$dName;
    $this->column=$dColumn;
    $this->type=$dType;
    $this->length=$dLength;
    $this->identity=0;
    $this->fraction=0;
    $this->value="";
  }
  public function getValue(){
    return $this->value;
  }
  public function setValue($v){
    $this->value=$v;
  }

}
?>
