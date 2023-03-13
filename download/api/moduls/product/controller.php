<?

include("entity/productEntity.php");

if($action){
  include("moduls/$modul/actions/$action.php");
}
?>
