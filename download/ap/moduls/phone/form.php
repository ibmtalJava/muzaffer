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
            <div class="checkbox">
              <label>
                <input type="checkbox" name="status" id="status"> Durum
              </label>
            </div>
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="button" onclick="addData()" class="btn btn-primary">Kaydet</button>
          </div>
          <script type="text/javascript">
            function addData(){
              document.getElementById("nameHata").innerHTML="";
              document.getElementById("priceHata").innerHTML="";
                 var data = new FormData();
                 data.append("name",  document.getElementById("name").value);
                 data.append("price",  document.getElementById("price").value);
                 data.append("status",  document.getElementById("status").value);
                 $.ajax({
                             type: "POST",
                             enctype: 'multipart/form-data',
                             url: "https://onlineshop.ibmtal.com/test/api/?api=product_add",
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
