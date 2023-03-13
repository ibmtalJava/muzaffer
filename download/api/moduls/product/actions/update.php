<?
$product=new Product();
$mapper=new Mapper();
$mapper->mapData($product);

$result=new Result();

if(!$product->name->value){
  $result->addError("100","Ürün adı boş geçilemez","name");
}
if(!$product->price->value){
  $result->addError("100","Empty Value","price");
}
if($result->success){
  $pda->update($product);
}
echo json_encode($result);
?>
