<?
include("systemfiles/connect.php");
include("systemfiles/user.php");
?>

<?
if($user->id){
  include("panel.php");
}
else{
  include("appages/login.php");
}



?>
