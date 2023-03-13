<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<?
include("moduls/$modul/banner.php");
if($action=="form"||$action=="duzenle")  include("moduls/$modul/form.php");
if(!$action||$action=="listele") include("moduls/$modul/listele.php");


 ?>
  <!-- Main content -->

</div><!-- /.content-wrapper -->
