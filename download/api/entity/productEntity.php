<?
class Product{
  public $table;
  public $id;
  public $name;
  public $price;
  public $status;
  public $photo;
  public function __construct() {
    $this->table="product";
    $this->id=new EntityItem("id","id","int",0);
    $this->name=new EntityItem("name","name","string",150);
    $this->price=new EntityItem("price","price","double",0);
    $this->status=new EntityItem("status","status","int",0);
    $this->photo=new EntityItem("photo","photo","string",100);
    $this->id->identity=1;
  }
}
?>
