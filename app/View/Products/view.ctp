<!-- View User -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<?php
									echo $this->Html->link (' Sản phẩm', array (
										'controller' => 'products',
										'action' => 'index'
									));
									echo ' / ' . $product['Product']['product_name'];
								?>
							</div>
							<div class="col-md-6 alignRight">
								<i class="fa fa-edit"></i> 
								<?php echo $this->Html->link ( 
									$product['Product']['product_name'],
									array (
										'controller' => 'products',
										'action' => 'edit',
										$product['Product']['id']
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="flash alignCenter">
						<?php //echo $this->Session->flash(); ?>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<col width="25%"></col>
							<col width="75%"></col>
							<tbody>
								<tr>
									<th class="alignRight">Tên sản phẩm</th>
									<td><?php echo ($product['Product']['product_name']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Mã sản phẩm</th>
									<td><?php echo ($product['Product']['product_code']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Mô tả</th>
									<td class="pdl20"><?php echo ($product['Product']['description']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Link tải phần mềm</th>
									<td class="pdl20">
										<?php echo $this->Html->link ( 
											$product['Product']['link_download'],
											$product['Product']['link_download']
										); ?>
									</td>
								</tr>
								<tr>
									<th class="alignRight">Giấy chứng nhận</th>
									<td class="pdl20"><?php echo ($product['Product']['certificate']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Tổng quan</th>
									<td class="pdl20"><?php echo ($product['Product']['overview']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Thông số kỹ thuật</th>
									<td class="pdl20"><?php echo ($product['Product']['specification']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Nhận xét</th>
									<td class="pdl20"><?php echo ($product['Product']['reviews']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">SEO - Mô tả</th>
									<td class="pdl20"><?php echo ($product['Product']['seo_description']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">SEO - Keyword</th>
									<td class="pdl20"><?php echo ($product['Product']['seo_keyword']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Từ khóa sản phẩm</th>
									<td class="pdl20"><?php echo ($product['Product']['product_tag']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Ngày tạo</th>
									<td class="pdl20"><?php echo ($product['Product']['created']);  ?></td>
								</tr>
								<tr>
									<th class="alignRight">Từ khóa sản phẩm</th>
									<td class="pdl20">
										<?php if(!empty($product['Product']['product_tag'])) {
											echo '<span style="font-size: 16px;">';
											$product_tags = explode(',', $product['Product']['product_tag']);
											foreach($product_tags as $key => $product_tag):
												if ($key == (count($product_tags)-1)) {
													echo '<a class="collapsed" href="#">' . $product_tag . '</a>';
												} else {
													echo '<a class="collapsed" href="#">' . $product_tag . '</a>, ';
												}
											endforeach;
											echo '</span>';
										} ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
			
					<!-- <td align="right">Ảnh sản phẩm:</td> -->
					<!-- <td> -->
					<?php
						//foreach ($productImg as $value):
							//echo '<img class="product-img" src="' . $base_url . 'img/products/' . $value['ProductImage']['image_url'] . '" width="80%" alt="profile picture">';
						//endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</div>