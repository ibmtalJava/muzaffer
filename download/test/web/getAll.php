<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery.js" type="text/javascript">

    </script>
    <style media="screen">
    .product{
      width:100%; height:60px;
    }
    .productCaption{
      position:relative; background-color:#fff;border-radius:2px; margin-left:10%;margin-top:10px;float:left;width:30%;
    }
    .productValue{
      position:relative; background-color:#BCF447;border-radius:2px; text-align: left;margin-left:5%;margin-top:10px;float:left;width:50%;
    }
    </style>
  </head>
  <body>
<button type="button" onclick="sendData()" name="button">Send</button>
<br> id : <input type="text" name="id" id="id" value="0">
<br>
<div id="resultDiv" style="width:100%; height:400px; background-color:#ccc">

</div>
<div id="productInfo" style="width:300px; background-color:#666; padding:10px;">

</div>
<script type="text/javascript">
  function sendData(){
       var data = new FormData();
       data.append("id",  document.getElementById("id").value);
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "https://onlineshop.ibmtal.com/test/api/?api=product_getAll",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                      document.getElementById("resultDiv").innerHTML=resultData
                      for(i=0;i<result.data.length;i++){
                        document.getElementById("productInfo").innerHTML+='<div class="product"><div class="productCaption">Ürün Adı :</div><div class="productValue">'+result.data[i].name+'('+result.data[i].price+')</div></div>'
                      }
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
