<?
$city=new City();
$result=new Result();
$tabledata=$pda->getAll($city);
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
