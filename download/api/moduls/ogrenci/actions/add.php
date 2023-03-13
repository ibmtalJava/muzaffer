<?
$ogrenci=new Ogrenci();
$mapper=new Mapper();
$mapper->mapData($ogrenci);

$result=new Result();

if(!$ogrenci->name->value){
  $result->addError("100",$ogrenci->name,"name");
}
if(!$ogrenci->surname->value){
  $result->addError("100","Boş geçilemez","surname");
}
if($result->success){
  $pda->add($ogrenci);
  $result->data[0]=$ogrenci;
}

echo json_encode($result);
?>
