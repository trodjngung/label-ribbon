$(document).ready(function() {
  selectProductType();
});

function selectProductType() {
  var appRoot = $('#appRoot').val();
  var productType = $('#productType').val();
  var productAction = $('#productAction').val();
  var parentCategory = '';

  if (productAction == 'edit') {
    var parentCategory = $('#parentCategoryHidden').val();
  }
  $.ajax({
        type: "POST",
        url: appRoot+"admin/products/getCategoryByProductType/" + productType,
        success: function(data){
          if (data != null && data != "") {
            var myjson='';
                eval("myjson=" + data + ";");
                var str = '';
                if(myjson != null && myjson.length > 0){
                  for(var i=0;i<myjson.length;i++){
                      str += '<label class="checkbox-inline">';
                      str += '<input type="checkbox" name="data[Product][category_name][]" id="category_' + 
                              myjson[i]['Category']['id']+ '" value="' + 
                              myjson[i]['Category']['category_name'] + '"';
                      if (parentCategory != '' && parentCategory.indexOf(myjson[i]['Category']['category_name']) != -1) {
                        str += ' checked ';
                      }
                      str += '>' + myjson[i]['Category']['category_name'];
                      str += '</label>';
                  }
                } else {
                  str += '<input type="hidden" name="data[Product][category_name][]" value="" >';
                } 
              $("#categoryCheckbox").html(str);
            }
        }
    });
}

function removeImg(input) {
    img_id = input.parentElement.attributes['id'].value;
    $('#'+img_id).css('display', 'none');
    img_remove_id = $('#'+img_id).attr('data-id');
    $('#'+img_id).append('<input type="hidden" name="data[ProductImage][img_remove_id][]" value="' + img_remove_id + '" />');
}