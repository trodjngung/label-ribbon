<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">Bảng quản lý sản phẩm</div>
							<div class="col-md-6 alignRight">
								<?php echo $this->Html->link (
									'<i class="fa fa-plus-square"></i> Tạo sản phẩm',
									array (
										'controller' => 'products',
										'action' => 'add'
									),
									array (
										'escape' => FALSE
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
						<col width="10%"></col>
						<col width="10%"></col>
						<col width="22%"></col>
						<col width="22%"></col>
						<col width="18%"></col>
						<col width="10%"></col>
						<col width="8%"></col>
						<thead>
							<tr>
								<th>Tên sản phẩm</th>
								<th>Mã sản phẩm</th>
								<th>Mô tả</th>
								<th>Tổng quan</th>
								<th>Đánh giá</th>
								<th>Ngày tạo</th>
								<th></th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Tên sản phẩm</th>
								<th>Mã sản phẩm</th>
								<th>Mô tả</th>
								<th>Tổng quan</th>
								<th>Ngày tạo</th>
								<th></th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($products as $product): ?>
								<tr>
									<td>
										<?php echo $this->Html->link ( $product ['Product'] ['product_name'], array (
											'controller' => 'products',
											'action' => 'view',
											$product ['Product'] ['id'] 
										) ); ?>
									</td>
									<td>
									 	<?php echo $product ['Product'] ['product_code']; ?>
									</td>
									<td>
									 	<?php echo $product ['Product'] ['description']; ?>
									</td>
									<td>
									 	<?php echo $product ['Product'] ['overview']; ?>
									</td>
									<td>
									 	<?php echo $product ['Product'] ['specification']; ?>
									</td>
									<td>
									 	<?php echo $product ['Product'] ['created']; ?>
									</td>
									<td align="center">
										<div class="col-md-12">
											<div class="row">
												<a class="">
													<?php echo $this->Html->link (
														'<i class="fa fa-edit"></i> Edit',
														array (
															'action' => 'edit',
															$product ['Product'] ['id'] 
														),
														array(
															'escape' => FALSE
														)
													); ?>
												</a>
											</div>
											<div class="row">
												<a class="">
											 		<?php echo $this->Form->postLink (
											 			'<i class="fa fa-remove"></i> Delete',
											 			array (
															'action' => 'delete',
															$product ['Product'] ['id'] 
														), array (
															'escape' => FALSE,
															'confirm' => 'Are you sure delete?'
														)
													); ?>
												</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>