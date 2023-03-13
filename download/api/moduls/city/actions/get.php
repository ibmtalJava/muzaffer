<?

$city=new City();
$city->id->value=0+$_POST["id"];
if(!$city->id->value ) $city->id->value=0+$_GET["id"];
$result=new Result();
$tabledata=$pda->get($city);

if($tabledata){
  $result->success=true;
  $result->data[0]=$tabledata;
}
else{
  $result->success=false;
  $result->addError("101","Not Found","id");
}
echo json_encode($result);
?>
