<script type="text/javascript">
var DevTableRowColumn=function(){
  var caption;
  var name;
  
  this.set=function(c,n){
    this.caption=c;
    this.name=n;
  }
  this.getCaption=function(){
      return this.caption;
  }
  this.getName=function(){
      return this.name;
  }
}
var DevTableRow=function(){
  var tr;
  var items;
  var tablename;
  this.setTable=function(t){
    this.tr=$('<tr>');
    this.items=new Array();
    this.tablename=t;
  }
  this.add=function(a,b,c,n){
    var ttd=$('<td id="'+this.tablename+'_tr_'+a+'_td_'+b'">');
    $('#'+this.tablename+'_tr'+a).append(ttd);

  }
  this.create=function(a){
    var ttr=$('<tr id="'+this.tablename+'_tr'+a+'">');
    $('#'+this.tablename+'_tbody').append(ttr);
    for(i=0;i<this.items.length;i++){
      var td=$("<td>");
      td.text=this.items[i].getCaption();
      $('#'+this.tablename+'_tr'+a).append(td);
     // this.ttr.append(td);
    }


  }
}
var DevTableHeaderItem=function(){
  this.caption;
  this.name;
  this.create=function(c,n){
    this.caption=c;
    this.name=n;
  }

}
var DevTable=function(){
  this.name;
  this.width;
  this.caption;
  this.headerItems=new Array();
  this.headerColor;
  this.setHeaderColor=function(c){
    this.headerColor=c;

  }
  this.create=function(n,w,c){
    this.name=n;
    this.width=w;
    this.caption=c;
    this.headerColor='#000';
    htmldata='<div class="row">'
    htmldata+='      <div class="col-xs-12">'
    htmldata+='        <div class="box">'
    htmldata+='          <div class="box-header">'
    htmldata+='            <h3 class="box-title">'+this.caption+'</h3>'
    htmldata+='          </div><!-- /.box-header -->'

    htmldata+='<div class="box-body" id="resultDiv">';
    htmldata+='<table id="example3" class="table table-bordered table-hover">';
    htmldata+='<thead>';
    htmldata+='    <tr id="'+this.name+'_id">';
    htmldata+='    </tr>';
    htmldata+='  </thead>';
    htmldata+='  <tbody  id="'+this.name+'_tbody">';
    htmldata+='  </tbody>';
    htmldata+='</table>';
    htmldata+='</div>';
    htmldata+='</div>';
    htmldata+='</div>';
    htmldata+='</div>';
    document.write(htmldata);
  }
  this.addHeaderItem=function(c){
    var nhi= new DevTableHeaderItem();
    nhi.create(c);
    this.headerItems[this.headerItems.length]=nhi;
        td = $('<td>');
        td.css('font-weight', 'bold');
        td.css('font-size', '16px');
        td.css('font-family', 'Lucida Handwriting');
        td.css('text-align', 'center');
        td.css('color', this.headerColor);
        td.text(this.headerItems[this.headerItems.length-1].caption);
            //write cell
        $('#'+this.name+'_id').append(td);

  }

}
    </script>
