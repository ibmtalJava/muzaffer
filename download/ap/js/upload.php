<script type="text/javascript">
  function uploadImage(imageId,errorId,resultId){
       var data = new FormData();
//       data.append("id", <? echo $data1;?>);
       data.append('file',$('#'+imageId)[0].files[0]);
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "https://onlineshop.ibmtal.com/api/?api=upload_image",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                     console.log(result);
                     if(result.success==true){
                       document.getElementById(resultId).value=result.filename;
                       document.getElementById(errorId).innerHTML="Dosya Yüklendi("+result.filename+")"
                       document.getElementById(errorId).style.color="green"
                     }
                     else{
                       document.getElementById(errorId).innerHTML=result.errors[0].context
                       document.getElementById(errorId).style.color="red"

                     }
                   },
                   error: function (e) {
                     alert("hata vaaaa");
                    }
               });
  }

</script>
