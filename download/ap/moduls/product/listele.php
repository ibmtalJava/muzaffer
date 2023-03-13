<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Ürünler</h3>
        </div><!-- /.box-header -->
        <div class="box-body" id="resultDiv">

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->
  <div class="">
    <script type="text/javascript">
      var mytable=new DevTable();
      mytable.create("listtable",800,"Ürün listesi");
      mytable.setHeaderColor("#CA3B1E");

      mytable.addHeaderItem("S.N");
      mytable.setHeaderColor("#1E5ACA");
      mytable.addHeaderItem("Ürün","name");
      mytable.setHeaderColor("#23FF00");
      mytable.addHeaderItem("Resim","photo");
      mytable.setHeaderColor("#CE7A00");
      mytable.addHeaderItem("Fiyat","price");
    </script>
  </div>
</section><!-- /.content -->
<script type="text/javascript">
  function listData(){
       var data = new FormData();
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "https://onlineshop.ibmtal.com/api/?api=product_getAll",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                    console.log(resultData);
                     result=jQuery.parseJSON(resultData);
                     console.log(result);

                    for(i=0;i<result.data.length;i++){
                          row=new DevTableRow();
                          row.setTable("listtable");
                          row.create(i);
                          row.add(i,0,result.data[i].name,"name");
                    }


                   },
                   error: function (e) {
                    
                    }
               });
  }
  listData();
</script>


<script type="text/javascript">
  function deleteItem(id){
       var data = new FormData();
       data.append("id",id);
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "http://onlineshop.ibmtal.com/api/?api=product_delete",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     listData();
                   },
                   error: function (e) {
                    }
               });
  }

</script>
