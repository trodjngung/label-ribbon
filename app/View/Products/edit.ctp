<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('view/products/jquery.multifile');?>
<?php echo $this->Html->script('view/products/product');?>
<?php echo $this->Html->css('view/product/product');?>
<!-- Create product -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <!-- Zero Configuration Table -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php echo $this->Html->link ( 'Sản phẩm', array (
            'controller' => 'products',
            'action' => 'index'
          ) ); ?> / 
          <?php echo $this->Html->link ( $product['Product']['product_name'], array (
            'controller' => 'products',
            'action' => 'view',
            $product['Product']['id']
          ) ); ?> / 
          <span>Cập nhật sản phẩm</span>
        </div>
        <div class="panel-body">
          <?php echo $this->Form->create('Product', array('type' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'sky-form')); ?>
            <div class="col-md-12">
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Tên sản phẩm</label>
                <div class="col-md-10">
                  <input name="data[Product][product_name]" placeholder="Tên sản phẩm" maxlength="50" type="text" id="ProductProductName" class="form-control input-sm" required="required" value="<?php echo $product['Product']['product_name']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Mã sản phẩm</label>
                <div class="col-md-10">
                  <input name="data[Product][product_code]" placeholder="Mã sản phẩm" maxlength="50" type="text" id="ProductProductCode" class="form-control input-sm" required="required" value="<?php echo $product['Product']['product_code']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Từ khóa</label>
                <div class="col-md-10">
                  <input name="data[Product][product_tag]" placeholder="Nhập các từ khóa cách nhau bằng dầu ','" type="text" id="ProductProductTag" class="form-control input-sm" required="required" value="<?php echo $product['Product']['product_tag']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Mô tả</label>
                <div class="col-md-10">
                  <?php
                    echo $this->Form->textarea (
                      'description',
                      array (
                        'value' => $product['Product']['description'],
                        'class' => 'ckeditor'
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Tổng quan</label>
                <div class="col-md-10">
                  <?php
                    echo $this->Form->textarea (
                      'overview',
                      array (
                        'value' => $product['Product']['overview'],
                        'class' => 'ckeditor'
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Chi tiết sản phẩm</label>
                <div class="col-md-10">
                  <?php
                    echo $this->Form->textarea (
                      'specification',
                      array (
                        'value' => $product['Product']['specification'],
                        'class' => 'ckeditor'
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Nhận xét</label>
                <div class="col-md-10">
                  <?php
                    echo $this->Form->textarea (
                      'reviews',
                      array (
                        'value' => $product['Product']['reviews'],
                        'class' => 'ckeditor'
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Link tải phần mềm</label>
                <div class="col-md-10">
                  <input name="data[Product][link_download]" placeholder="Link tải phần mềm" type="text" id="ProductLinkDownload" class="form-control input-sm" required="required" value="<?php echo $product['Product']['link_download']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Giấy chứng nhận</label>
                <div class="col-md-10">
                  <input name="data[Product][certificate]" placeholder="Giấy chứng nhận" type="text" id="ProductCertificate" class="form-control input-sm" required="required" value="<?php echo $product['Product']['certificate']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">SEO - Mô tả</label>
                <div class="col-md-10">
                  <?php
                    echo $this->Form->textarea (
                      'seo_description',
                      array (
                        'value' => $product['Product']['seo_description'],
                        'class' => 'ckeditor'
                      )
                    );
                  ?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">SEO - Từ khóa</label>
                <div class="col-md-10">
                  <input name="data[Product][seo_keyword]" placeholder="Nhập các từ khóa cách nhau bằng dầu ','" type="text" id="ProductProductTag" class="form-control input-sm" required="required" value="<?php echo $product['Product']['seo_keyword']; ?>" >
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Danh mục sản phẩm</label>
                <div class="col-md-10">
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                        foreach($categories as $category):
                          echo '<div class="col-md-3 mgt5 mgbt5">';
                          if (strpos($product['Product']['category_name'], $category['SelectOption']['display_name']) !== false) {
                            echo '<input type="checkbox" name="data[Product][category_name][]" value="' . $category['SelectOption']['display_name'] . '" checked="checked"> ' . $category['SelectOption']['display_name'];
                          } else  {
                            echo '<input type="checkbox" name="data[Product][category_name][]" value="' . $category['SelectOption']['display_name'] . '"> ' . $category['SelectOption']['display_name'];
                          }
                          echo '</div>';
                        endforeach;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt20">Ảnh liên quan</label>
                <div class="col-md-10">
                  <div class="MultiFile-list" id="MultiFile1_wrap_list">
                    <input type="file" name="data[ProductImage][image][]" class="multi with-preview mgt20" multiple accept="image/*" />
                    <?php
                      foreach($productImgs as $productImgs):
                        echo '<div class="MultiImg-label" id="oldImg' . $productImgs['ProductImage']['id'] . '" data-id="' . $productImgs['ProductImage']['id'] . '">';
                        echo '<a class="MultiFile-remove" href="javascript:void(0);" onclick="removeImg(this);">Xóa</a>';
                        echo '<span class="MultiFile-label">';
                        echo '<span class="MultiFile-title">' . $productImgs['ProductImage']['image_url'] . '</span>';
                        echo '<img class="MultiFile-preview" style="max-width: 250px;max-height:200px;" src="' . $base_url . 'img/products/' . $productImgs['ProductImage']['image_url'] . '" title="">';
                        echo '</span></span></div>';
                      endforeach;
                    ?>
                  </div>
                </div>
              </div>
              <div class="row mgbt20">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-10">
                  <button type="submit" class="btn btn-primary btn-sm"><?php echo __('Cập nhật sản phẩm')?></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
