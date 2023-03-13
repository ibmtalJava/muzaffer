<?
$apiurl=$_GET["api"];
$apiurlparts=explode("_",$apiurl);
$modul=$apiurlparts[0];
$action=$apiurlparts[1];
include("core/ftp/upload.php");
include("core/ftp/fileload.php");
include("core/result/result.php");
include("core/entity/entityItem.php");
include("core/mapper/mapper.php");
include("database/connections.php");
include("moduls/$modul/controller.php");

?>
