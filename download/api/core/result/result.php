<?
include("core/result/errorItem.php");
class Result{
  public $success;
  public $errors;
  public $data;
  public function __construct() {
    $this->success=true;
    $this->errors=array();
    $this->data=array();
  }
  public function addError($dCode,$dContext,$dItemname){
    $this->errors[count($this->errors)]=
     new ErrorItem($dCode,$dContext,$dItemname);
    $this->success=false;
  }
}
?>
