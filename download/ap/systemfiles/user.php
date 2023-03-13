<?
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$user=$pdo->query(
  "
    select
      *
    from
      user
    where
      username='$username'
      and password='$password'
  "
  )->fetchObject();
if($username&&$user->id){
  $code=md5($username."dfdsfsd".date("Y-m-d H:i:s"));
  $pdo->query("update user set sessioncode='$code' where id=$user->id");
  $_SESSION["code"]=$code;
}
else{
  $code=$_SESSION["code"];
  if($code) $user=$pdo->query(
    "
      select
        *
      from
        user
      where
        sessioncode='$code'
    "
    )->fetchObject();
}
?>
