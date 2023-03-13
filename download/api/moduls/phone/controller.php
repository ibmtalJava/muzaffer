<?

include("entity/phoneEntity.php");

if($action){
  include("moduls/$modul/actions/$action.php");
}
?>
