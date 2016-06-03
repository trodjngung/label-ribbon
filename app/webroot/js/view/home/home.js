$(document).ready(function() {
  productDetail();
});

function productDetail() {
  var productIdArray = $('#productIdArray').val();
  productIdArray = productIdArray.split(',');
  for (var i = 0; i < productIdArray.length; i++) {
    product_id = productIdArray[i];
    getProductImg(product_id);
  }
}

function getProductImg(product_id) {
  var appRoot = $('#appRoot').val();
  var product_name = $('#product_detail_'+product_id).val();
  $.ajax({
    type: "POST",
    async: false,
    url: appRoot+"home/getProductDetail/" + product_id,
    success: function(data){
      if (data != null && data != "") {
        var myjson='';
        eval("myjson=" + data + ";");
        var str = '';
        if(myjson != null && myjson.length > 0){
          for(var i=0; i<myjson.length; i++){
            if (i == 0) {
              str += '<a class="rsImg bugaga"';
            } else {
              str += '<a class="rsImg" ';
            }
            str += 'data-rsw="540" data-rsh="374" data-rsbigimg="';
            str += appRoot + 'img/products/' + myjson[i]["ProductImage"]["image_url"] + '" ';
            str += 'href="' + appRoot + 'img/products/' + myjson[i]["ProductImage"]["image_url"] + '">';
            str += product_name;
            str += '<img class="rsTmb" ';
            str += 'src="' + appRoot + 'img/products/' + myjson[i]["ProductImage"]["image_url"] + '" ';
            str += 'alt="' + product_name + '"></a>';
          }
          $("#rs_gallery"+product_id).html(str);
        } 
      }
    }
  });
}