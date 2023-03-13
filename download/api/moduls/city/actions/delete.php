<?

$product=new Product();
$product->id->value=0+$_POST["id"];
if(!$product->id->value ) $product->id->value=0+$_GET["id"];
$result=new Result();
$tabledata=$pda->get($product);

if($tabledata){
  $result->success=true;
  $result->data[0]=$tabledata;
  $pda->delete($product);
}
else{
  $result->success=false;
  $result->addError("101","Not Found","id");
}
echo json_encode($result);
?>
