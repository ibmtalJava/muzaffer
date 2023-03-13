<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehir Listesi</title>
    <script src="../js/jquery.js"></script>
</head>
<body>
<input type="button" value="Listele" onclick="cityListele()">
<a href="cityAddForm.php">
    <input type="button" value="Ekle">
</a>
<div id="cityList" style="
            positon:relative; width:90%; height:400px;
            background-color:#71D4F4;
            margin-left:auto; margin-right:auto;
            overflow-x:hidden;overflow-y:auto;
">

</div> 
<script>
    function cityListele(){
      var data = new FormData();
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "https://onlineshop.ibmtal.com/api/?api=city_getAll",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,

                   success: function (resultData) {
                     document.getElementById("cityList").innerHTML=resultData; 
                   },
                   error: function (e) {}
               });
    }
</script>   
</body>
</html>