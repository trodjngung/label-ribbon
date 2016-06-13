<?php echo $this->Html->script('view/home/home');?>
<div id="wrapper">
	<div class="fullwidthbanner-container" id="main_slider">
		<div class="fullwidthbanner tp-simpleresponsive"
			style="height: 731px;">
			<ul>

				<!-- slide 2 -->
				<li class="slide2" data-transition="slotzoom-horizontal"
					data-slotamount="5" data-masterspeed="300"
					style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
					<!-- slide 2 image -->
					<div class="slotholder">
						<img
							alt="Máy in mã vạch | Máy in Zebra | Máy in Sato | Máy in Datamax"
							src="/img/label-ribbon/slide/banner2.png" class="defaultimg"
							style="width: 1511px; height: 520px; position: absolute; left: -81px; opacity: 0;">
					</div> <!-- slide 2 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380"
						data-speed="2500" data-start="1000" data-easing="easeInBack"
						style="font-size: 0px; padding: 0px; margin: 0px; border: 0px; line-height: 0px; white-space: nowrap; opacity: 0; left: 0px; top: 8805px; visibility: hidden;">
						<!-- slide 2 caption 1 -->
						<!--
						<p class="cap-1">Máy in mã vạch-Máy đọc mã vạch<br>
							<span class="price">Trần Nguyễn Hà</span>
						</p>
						-->
					</div>
				</li>
				<!-- slide 1 -->
				<li class="slide1" data-transition="slotzoom-horizontal"
					data-slotamount="5" data-masterspeed="300"
					style="visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
					<!-- slide 1 image -->
					<div class="slotholder">
						<img
							alt=" Ruy băng in mã vạch | Ruy băng in Wax | Ruy băng in Wax Resin | Ruy băng in Resin"
							src="/img/label-ribbon/slide/banner9.png" class="defaultimg"
							style="width: 1429px; height: 520px; position: absolute; left: -40px; opacity: 1;">
					</div> <!-- slide 1 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380"
						data-speed="2500" data-start="1000" data-easing="easeInBack"
						style="font-size: 28px; padding: 0px 0px 4px; margin: 0px 0px 20px; border: 0px; line-height: 30px; white-space: nowrap; opacity: 1; left: 204.5px; top: 380px; visibility: visible;">
						<!-- slide 1 caption 1 -->
						<!--
						<p class="cap-1">Tem nhãn, Ruy băng mã vạch<br>
							<span class="price">Trần Nguyễn Hà</span>
						</p>
						-->
					</div>
				</li>
				<!-- slide 3 -->
				<li class="slide2" data-transition="slotzoom-horizontal"
					data-slotamount="5" data-masterspeed="300"
					style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
					<!-- slide 3 image -->
					<div class="slotholder">
						<img
							alt=" Ruy băng in mã vạch | Ruy băng in Wax | Ruy băng in Wax Resin | Ruy băng in Resin"
							src="/img/label-ribbon/slide/banner6.png" class="defaultimg"
							style="width: 1429px; height: 520px; position: absolute; left: -40px; opacity: 0;">
					</div> <!-- slide 3 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380"
						data-speed="2500" data-start="1000" data-easing="easeInBack"
						style="visibility: hidden; font-size: 28px; padding: 0px 0px 4px; margin: 0px 0px 20px; border: 0px; line-height: 30px; white-space: nowrap; opacity: 0; left: 204.5px; top: 330px;">
						<!-- slide 3 caption 1 -->
						<!--
						<p class="cap-1">Đầu in mã vạch-Thẻ treo  <br>
							<span class="price">Trần Nguyễn Hà</span>
						</p>
						-->
					</div>
				</li>
			</ul>
			<div class="tp-loader" style="display: none;"></div>
		</div>
		<div class="tp-bannershadow tp-shadowundefined" style="width: 1349px;">
		</div>
		<div
			style="visibility: visible; position: absolute; left: 0px; top: 260px;"
			class="tp-leftarrow tparrows round large"></div>
		<div
			style="visibility: visible; position: absolute; left: 1303px; top: 260px;"
			class="tp-rightarrow tparrows round large"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-ms-12">
				<!-- begin featured listings summary block -->
				<div class="wide-block">
					<div class="featured-listings">
						<div id="featured-listings_marker"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<!-- edit featured listings headline here -->
								<h2 class="block-title styler_color">TEM NHÃN</h2>
							</div>
						</div>
						<div class="row">
							<?php if (isset($products)) { ?>
                          	<?php for ($i=0; $i < count($products); $i++) { ?>
								<div class="col-md-4 col-sm-4">
								<div class="featured-item">
									<img
										src="<?php echo $base_url . 'img/products/' . $products[$i]["ProductImage"]["image_url"];?>"
										alt="<?php echo $products[$i]['Product']['product_name']; ?>"
										style="height: 100%" />
									<div class="heading styler_bg_color">
										<?php echo $products[$i]['Product']['product_name']; ?>
										<input type="hidden"
											id="product_detail_<?php echo $products[$i]['Product']['id']; ?>"
											value="<?php echo $products[$i]['Product']['product_name']; ?>" />
									</div>
									<div class="content">
										<div class="item-info">
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="more">
														<a id="item<?php echo $products[$i]['Product']['id']; ?>"
															href="javascript:void(0)"
															class="styler_color property-link">Chi tiết sản phẩm</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } } ?>
						</div>
					</div>
					<?php if (isset($products)) { ?>
                      	<?php for ($i=0; $i < count($products); $i++) { ?>
						<div
						id="property-item<?php echo $products[$i]['Product']['id']; ?>"
						class="property-item">
						<div class="wide-divider">
							<a class="close-details" href="javascript:void(0)"></a>
						</div>
						<div class="inner-block">
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<div class="">
										<div class="slider-block">
											<div
												id="rs_gallery<?php echo $products[$i]['Product']['id']; ?>"
												class="royalSlider rsDefault productDetailSlider"></div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="details-info alignJustify">
										<div class="row">
											<div class="col-md-12 col-sm-12 mgt20">
												<div class="item-id">
														Tên sản phẩm: <?php echo $products[$i]['Product']['product_name']; ?>
													</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="item-id">
														Mã sản phẩm: <?php echo $products[$i]['Product']['product_code']; ?>
													</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="details-name">
													<i>Mô tả sản phẩm</i>: <?php echo $products[$i]['Product']['description']; ?>
													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="details-tabs">
									<div class="col-md-12 col-sm-12">
										<ul class="tabs">
											<li class="active"><a class="styler_bg_color"
												href="#details1" data-toggle="tab">TỔNG QUAN SẢN PHẨM</a></li>
											<li><a class="styler_bg_color" href="#tab-map"
												data-toggle="tab">BẢN ĐỒ</a></li>
										</ul>
										<div class="tab-content tabs_blocks">
											<div class="active" id="details1">
												<ul class="info_slides">
													<li class="active"><a href="#" class="styler_color"><i
															class="arr styler_color"></i>Tổng quan</a>
														<div class="text" style="display: block;">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['overview']; ?>
																		</div>
																</div>
															</div>
														</div></li>
													<li><a href="#" class="styler_color"><i
															class="arr styler_color"></i>Thông số kỹ thuật</a>
														<div class="text">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['specification']; ?>
																		</div>
																</div>
															</div>
														</div></li>
													<li><a href="#" class="styler_color"><i
															class="arr styler_color"></i>Đánh giá sản phẩm</a>
														<div class="text">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['reviews']; ?>
																		</div>
																</div>
															</div>
														</div></li>
													<li><a href="#" class="styler_color"><i
															class="arr styler_color"></i>Link tải phần mềm</a>
														<div class="text">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="left-tab-wrapper">
																			<?php
							
							echo $this->Html->link ( $products [$i] ['Product'] ['link_download'], $products [$i] ['Product'] ['link_download'] );
							?>
																		</div>
																</div>
															</div>
														</div></li>
													<li><a href="#" class="styler_color"><i
															class="arr styler_color"></i>Giấy chứng nhận</a>
														<div class="text">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['certificate']; ?>
																		</div>
																</div>
															</div>
														</div></li>
												</ul>
											</div>
											<!-- edit featured listings house #1 map tab info here -->
											<div class="tab-map">
												<!-- begin map -->
												<div class="map" data-coordinates="32.83823,-96.775347"
													data-title="5321 E Mockingbird Ln, Dallas, TX 75206"></div>
												<!-- /end map -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
				</div>
				<!-- /end featured listings block -->


				<!-- awards and associations logo block starts here -->
				<div class="row">
					<div class="awards-block">
						<div id="awards_marker"></div>
						<div class="row">
							<div class="col-sm-6 col-ms-6">
								<!-- edit logo #1 here -->
								<iframe width="420" height="315" src="https://www.youtube.com/embed/iKP-xC-rnGc" frameborder="0" allowfullscreen></iframe>
							</div>
							
							<div class="col-sm-6 col-ms-6">
								<!-- edit logo #3 here -->
								<iframe width="420" height="315" src="https://www.youtube.com/embed/tNUB4yLGO5E" frameborder="0" allowfullscreen></iframe>
							</div>
							
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
<input type="hidden" value="<?php echo $base_url;?>" id="appRoot" />
<input type="hidden" value="<?php echo $productIdArray;?>"
	id="productIdArray"></input>