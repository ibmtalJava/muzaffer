<?
class Category{
  public $table;
  public $id;
  public $name;

  public function __construct() {
    $this->table="category";
    $this->id=new EntityItem("id","id","int",0);
    $this->name=new EntityItem("name","name","string",120);
    $this->id->identity=1;
  }
}
?>
