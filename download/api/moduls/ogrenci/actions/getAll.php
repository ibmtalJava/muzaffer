<?
$product=new Product();
$result=new Result();
$tabledata=$pda->getAll($product);
if($tabledata){
  $result->success=true;
  $result->data=$tabledata;
}
else{
  $result->success=false;
  $result->addError("102","No Record","name");
}
echo json_encode($result);
?>
