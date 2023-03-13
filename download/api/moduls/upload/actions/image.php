<?
$result=new Result();
if(!$_FILES["file"]["name"]){
  $result->addError("601","Dosya belirtilmedi","file");
}
if($_FILES["file"]["size"]>5242880){
  $result->addError("602","Dosya boyutu fazla","file");
}


if($result->success){
  $file=imageload("file");
  $result->filename=$file;
}
echo json_encode($result);
?>
