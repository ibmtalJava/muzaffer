<?
class Language{
    public $table;
    public $id;
    public $name;
    public $flag;
    public function __construct(){
        $this->table="languages";//mysqldeki tablosun adı
        $this->id= new EntityItem("id","id","int",0);
        $this->name=new EntityItem("name","name","string",30);
        $this->flag=new EntityItem("flag","flag","string",250);
        $this->id->identity=1;
    }


}

?>