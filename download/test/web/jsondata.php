<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery.js" type="text/javascript">

    </script>
  </head>
  <body>
<button type="button" onclick="sendData()" name="button">Send</button>
<br> id : <input type="text" name="id" id="id" value="0">
<br>
<div id="resultDiv" style="width:100%; height:400px; background-color:#ccc">

</div>
<div id="productInfo" style="width:300px; background-color:#666; padding:10px;">
  <div style="width:100%; height:60px;">
    <div style="position:relative; margin-left:10%;margin-top:10px;float:left;width:30%">
      Ürün Adı :
    </div>
    <div id="productName" style="position:relative; text-align: left;margin-left:10%;margin-top:10px;float:left;width:50%">
      Lenovo
    </div>
  </div>
</div>
<script type="text/javascript">
  function sendData(){
       var data = new FormData();
       data.append("id",  document.getElementById("id").value);
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "http://onlineshop.ibmtal.com/test/api/?api=product_get",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                      document.getElementById("resultDiv").innerHTML=resultData
                      document.getElementById("productName").innerHTML=result.data[0].name
                       console.log(result);
                   },
                   error: function (e) {
                     document.getElementById("resultDiv").innerHTML=result
                    }
               });
  }
</script>
  </body>
</html>
