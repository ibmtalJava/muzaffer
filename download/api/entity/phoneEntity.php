<?
class Phone{
  public $table;
  public $id;
  public $name;
  public $price;
  public $brand;
  public $model;
  public function __construct() {
    $this->table="phone";
    $this->id=new EntityItem("id","id","int",0);
    $this->name=new EntityItem("name","name","string",200);
    $this->price=new EntityItem("price","price","double",0);
    $this->brand=new EntityItem("brand","brand","string",50);
    $this->model=new EntityItem("model","model","string",100);
    $this->id->identity=1;
  }
}
?>
