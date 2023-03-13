<?
class Ogrenci{
    public $table;
    public $id;
    public $name;
    public $surname;
    public $schoolNumber;
    public $gender;

    public function __construct(){
        $this->table="ogrenci";
        $this->id=new EntityItem("id","id","int",0);
        $this->name=new EntityItem("name","name","string",30);
        $this->surname=new EntityItem("surname","surname","string",20);
        $this->schoolNumber=new EntityItem("schoolNumber","school_number","string",20);
        $this->gender=new EntityItem("gender","gender","string",10);
        $this->id->identity=1;
    }
}
?>