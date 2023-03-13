<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Telefonlar</h3>
        </div><!-- /.box-header -->
        <div class="box-body" id="resultDiv">

        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
<script type="text/javascript">
  function listData(){
       var data = new FormData();
       $.ajax({
                   type: "POST",
                   enctype: 'multipart/form-data',
                   url: "https://onlineshop.ibmtal.com/test/api/?api=phone_getAll",
                   data: data,
                   processData: false,
                   contentType: false,
                   cache: false,
                   timeout: 800000,
                   success: function (resultData) {
                     result=jQuery.parseJSON(resultData);
                     console.log(result);
htmldata='<table id="example2" class="table table-bordered table-hover">';
htmldata+='<thead>';
htmldata+='    <tr>';
htmldata+='      <th>S.N.</th>';
htmldata+='      <th>Ürün</th>';
htmldata+='      <th>Fiyat</th>';
htmldata+='      <th>';
htmldata+='      </th>';
htmldata+='    </tr>';
htmldata+='  </thead>';
htmldata+='  <tbody>';
for(i=0;i<result.data.length;i++){
      htmldata+='    <tr>';
      htmldata+='      <td>'+(i+1)+'</td>';
      htmldata+='      <td>'+result.data[i].name+'</td>';
      htmldata+='      <td>'+result.data[i].price+'</td>';

      htmldata+='      <td>';
      htmldata+='           <button type="button" class="btn btn-primary">Düzenle</button>';
      htmldata+='           <button type="button" class="btn btn-primary">Sil</button>';
      htmldata+='      </td>';

      htmldata+='    </tr>';
}
htmldata+='  </tbody>';
htmldata+='</table>';
document.getElementById("resultDiv").innerHTML=htmldata;

                   },
                   error: function (e) {
                     document.getElementById("resultDiv").innerHTML=result
                    }
               });
  }
  listData();
</script>
