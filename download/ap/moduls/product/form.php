<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Ürün Bilgileri</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Ürün Adı</label>
              <input type="text" name="name" id="name" class="form-control"  placeholder="Ürün Adını giriniz">
              <small style="color:red" id="nameHata"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fiyat</label>
              <input type="text" name="price" id="price" class="form-control"  placeholder="14.25">
              <small style="color:red" id="priceHata"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Durum</label>
              <select name="status" id="status" class="form-control">
                <option value="0">Pasif</option>
                <option value="1">Aktif</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ürün Resmi</label>
              <input type="file" name="productImage" id="productImage" class="form-control" >
              <input type="hidden" value="" name="photo" id="photo">
              <small style="color:red" id="productImageHata"></small>
              <button type="button" onclick="uploadImage('productImage','productImageHata','photo')" class="btn btn-primary">Yükle</button>
            </div>

          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="button" onclick="<? if($action=="duzenle") echo "saveData()"; else echo "addData()"; ?>" class="btn btn-primary">Kaydet</button>
          </div>
          <script type="text/javascript">
            function addData(){
              document.getElementById("nameHata").innerHTML="";
              document.getElementById("priceHata").innerHTML="";
                 var data = new FormData();
                 data.append("name",  document.getElementById("name").value);
                 data.append("price",  document.getElementById("price").value);
                 data.append("status",  document.getElementById("status").value);
                 data.append("photo",  document.getElementById("photo").value);

                 $.ajax({
                             type: "POST",
                             enctype: 'multipart/form-data',
                             url: "http://onlineshop.ibmtal.com/api/?api=product_add",
                             data: data,
                             processData: false,
                             contentType: false,
                             cache: false,
                             timeout: 800000,
                             success: function (resultData) {
                               result=jQuery.parseJSON(resultData);
                               if(result.success==true){
                                 loadpage('product','listele','','','','');
                               }
                               else{
                                 console.log(result);
                                 for(i=0;i<result.errors.length;i++){
                                   document.getElementById(result.errors[i].itemName+"Hata").innerHTML=result.errors[i].context;
                                 }
                               }
                             },
                             error: function (e) {
                               alert("hata vaaaa");
                              }
                         });
            }
          </script>

      </div><!-- /.box -->


    </div><!--/.col (left) -->
    <!-- right column -->
  </div>   <!-- /.row -->
</section><!-- /.content -->

<?
if($action=="duzenle"){
?>
<script type="text/javascript">
  function saveData(){
    document.getElementById("nameHata").innerHTML="";
    document.getElementById("priceHata").innerHTML="";
       var data = new FormData();
       data.append("id", <? echo $data1;?>);
       data.append("name",  document.getElementById("name").value);
       data.append("price",  document.getElementById("price").value);
       data.append("status",  document.getElementById("status").value);
       data.append("photo",  document.getElementById("photo").value);

       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "http://onlineshop.ibmtal.com/api/?api=product_update",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                     if(result.success==true){
                       loadpage('product','listele','','','','');
                     }
                     else{
                       console.log(result);
                       for(i=0;i<result.errors.length;i++){
                         document.getElementById(result.errors[i].itemName+"Hata").innerHTML=result.errors[i].context;
                       }
                     }
                   },
                   error: function (e) {
                     alert("hata vaaaa");
                    }
               });
  }
</script>

<script type="text/javascript">
  function getData(){
       var data = new FormData();
       data.append("id", <? echo $data1;?>);
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "http://onlineshop.ibmtal.com/api/?api=product_get",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                     console.log(result);
                     document.getElementById("name").value=result.data[0].name
                     document.getElementById("price").value=result.data[0].price
                     document.getElementById("photo").value=result.data[0].photo
                     if(result.data[0].status=="1"){
                        document.getElementById("status").selectedIndex=1
                     }
                     else{
                       document.getElementById("status").selectedIndex=0
                     }

                   },
                   error: function (e) {
                     alert("hata vaaaa");
                    }
               });
  }
  getData();
</script>

<?
}
?>
