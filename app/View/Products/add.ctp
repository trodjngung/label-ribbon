<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('products/jquery.multifile');?>
<?php echo $this->Html->script('products/product');?>
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
          <a href="">Thêm sản phẩm</a>
        </div>
        <div class="panel-body">
          <?php echo $this->Form->create('Product', array('enctype' => 'multipart/form-data', 'class' => 'sky-form')); ?>
          <!-- <form action="<?php echo $appRoot . '/products/add/'; ?>" class="sky-form" novalidate="novalidate" id="ProductEditForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div> -->
            <div class="col-md-12">
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Tên sản phẩm</label>
                <div class="col-md-10">
                  <input name="data[Product][product_name]" placeholder="Tên sản phẩm" maxlength="50" type="text" id="ProductProductName" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Mã sản phẩm</label>
                <div class="col-md-10">
                  <input name="data[Product][product_code]" placeholder="Mã sản phẩm" maxlength="50" type="text" id="ProductProductCode" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Từ khóa</label>
                <div class="col-md-10">
                  <input name="data[Product][product_tag]" placeholder="Nhập các từ khóa cách nhau bằng dầu ','" type="text" id="ProductProductTag" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Mô tả</label>
                <div class="col-md-10">
                  <?php echo $this->Form->textarea('description',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Tổng quan</label>
                <div class="col-md-10">
                  <?php echo $this->Form->textarea('overview',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Chi tiết sản phẩm</label>
                <div class="col-md-10">
                  <?php echo $this->Form->textarea('specification',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Nhận xét</label>
                <div class="col-md-10">
                  <?php echo $this->Form->textarea('reviews',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Link tải phần mềm</label>
                <div class="col-md-10">
                  <input name="data[Product][link_download]" placeholder="Link tải phần mềm" type="text" id="ProductLinkDownload" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">Giấy chứng nhận</label>
                <div class="col-md-10">
                  <input name="data[Product][certificate]" placeholder="Giấy chứng nhận" type="text" id="ProductCertificate" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">SEO - Mô tả</label>
                <div class="col-md-10">
                  <?php echo $this->Form->textarea('seo_description',array('class'=>'ckeditor'));?>
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt5">SEO - Từ khóa</label>
                <div class="col-md-10">
                  <input name="data[Product][seo_keyword]" placeholder="Nhập các từ khóa cách nhau bằng dầu ','" type="text" id="ProductProductTag" class="form-control input-sm" required="required">
                </div>
              </div>
              <div class="row mgbt20 mgt20">
                <label class="col-md-2 control-label alignRight mgt20">Ảnh liên quan</label>
                <div class="col-md-10">
                  <input type="file" name="data[ProductImage][image][]" class="multi with-preview mgt20" multiple accept="image/*" />
                </div>
              </div>

              <div class="row mgbt20">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-10">
                  <button type="submit" class="btn btn-primary btn-sm"><?php echo __('Tạo sản phẩm')?></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
