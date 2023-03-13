<?
class ErrorItem{
  public $code;
  public $context;
  public $itemName;

  public function __construct($dCode,$dContext,$dItemname) {
    $this->code=$dCode;
    $this->context=$dContext;
    $this->itemName=$dItemname;
  }
}
?>
