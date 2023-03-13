<?
$city=new City();
$mapper=new Mapper();
$mapper->mapData($city);

$result=new Result();

if(!$city->city->value){
  $result->addError("100","Ürün adı boş geçilemez","city");
}
if(!$city->plaka->value){
  $result->addError("100","Empty Value","plaka");
}
if($result->success){
  $pda->update($city);
}
echo json_encode($result);
?>
