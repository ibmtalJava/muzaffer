<?
class City{
    public $table;
    public $id;
    public $city;
    public $plaka;
    public function __construct(){
        $this->table="city";//mysqldeki tablosun adı
        $this->id= new EntityItem("id","id","int",0);
        $this->city=new EntityItem("city","city","string",20);
        $this->plaka=new EntityItem("plaka","plaka","int",0);
        $this->id->identity=1;
    }


}

?>