<?
$language=new Language();
$mapper=new Mapper();
$mapper->mapData($language);

$result=new Result();

if(!$language->name->value){
  $result->addError("100","Bos gecilemez","name");
}

if($result->success){
  $pda->add($language);
}
echo json_encode($result);
?>
