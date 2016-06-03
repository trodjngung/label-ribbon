<?php echo $this->Html->script('view/home/home');?>
<div id="wrapper">
	<div class="fullwidthbanner-container" id="main_slider">
		<div class="fullwidthbanner tp-simpleresponsive" style="height: 731px;">
			<ul>
				<!-- slide 1 -->
				<li class="slide1" data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="300" style="visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
					<!-- slide 1 image -->
					<div class="slotholder">
						<img alt="" src="http://sieuthimasomavach.vn/view/at_Avery%20AP%202.4_1427691880.jpg" class="defaultimg" style="width: 1429px; height: 520px; position: absolute; left: -40px; opacity: 1;">
					</div>
					<!-- slide 1 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380" data-speed="2500" data-start="1000" data-easing="easeInBack" style="font-size: 28px; padding: 0px 0px 4px; margin: 0px 0px 20px; border: 0px; line-height: 30px; white-space: nowrap; opacity: 1; left: 204.5px; top: 380px; visibility: visible;">
						<!-- slide 1 caption 1 -->
						<p class="cap-1">Tem nhãn , Ruy băng mã vạch<br>
							<span class="price">Giá từ 10.000.000 - 20.000.000đ</span>
						</p>
					</div>
				</li>
				<!-- slide 2 -->
				<li class="slide2" data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="300" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
					<!-- slide 2 image -->
					<div class="slotholder">
						<img alt="" src="http://vietnamsino.com/resource/files/5-kinh-nghiem-mua-may-in-ma-v%E1%BA%A1ch-gia-si.jpg" class="defaultimg" style="width: 1511px; height: 520px; position: absolute; left: -81px; opacity: 0;">
					</div>
					<!-- slide 2 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380" data-speed="2500" data-start="1000" data-easing="easeInBack" style="font-size: 0px; padding: 0px; margin: 0px; border: 0px; line-height: 0px; white-space: nowrap; opacity: 0; left: 0px; top: 8805px; visibility: hidden;">
						<!-- slide 2 caption 1 -->
						<p class="cap-1">Máy in mã vạch-Máy đọc mã vạch<br>
							<span class="price">Giá từ 8.000.000 - 15.000.000đ</span>
						</p>
					</div>
				</li>
				<!-- slide 3 -->
				<li class="slide2" data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="300" style="visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
					<!-- slide 3 image -->
					<div class="slotholder">
						<img alt="" src="http://mavachbinhduong.cdn.vccloud.vn/wp-content/uploads/2015/10/Dau-in-Avery-AP-5_4-300-dpi.jpg" class="defaultimg" style="width: 1429px; height: 520px; position: absolute; left: -40px; opacity: 0;">
					</div>
					<!-- slide 3 caption 1 parameters -->
					<div class="caption sft start" data-x="10" data-y="380" data-speed="2500" data-start="1000" data-easing="easeInBack" style="visibility: hidden; font-size: 28px; padding: 0px 0px 4px; margin: 0px 0px 20px; border: 0px; line-height: 30px; white-space: nowrap; opacity: 0; left: 204.5px; top: 330px;">
						<!-- slide 3 caption 1 -->
						<p class="cap-1"> Đầu in mã vạch-Thẻ treo  <br>
							<span class="price">Giá từ 4.000.000 - 9.000.000đ</span>
						</p>
					</div>
				</li>
			</ul>
			<div class="tp-loader" style="display: none;">
			</div>
		</div>
		<div class="tp-bannershadow tp-shadowundefined" style="width: 1349px;">
		</div>
		<div style="visibility: visible; position: absolute; left: 0px; top: 260px;" class="tp-leftarrow tparrows round large">
		</div>
		<div style="visibility: visible; position: absolute; left: 1303px; top: 260px;" class="tp-rightarrow tparrows round large">
		</div>
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
								<h2 class="block-title styler_color">
								SẢN PHẨM 
								</h2>
							</div>
						</div>
						<div class="row">
							<?php if (isset($products)) { ?>
                          	<?php for ($i=0; $i < count($products); $i++) { ?>
								<div class="col-md-4 col-sm-4">
								<div class="featured-item">
									<img src="<?php echo $base_url . 'img/products/' . $products[$i]["ProductImage"]["image_url"];?>" alt="<?php echo $products[$i]['Product']['product_name']; ?>" style="height: 100%" />
									<div class="heading styler_bg_color">
										<?php echo $products[$i]['Product']['product_name']; ?>
										<input type="hidden" id="product_detail_<?php echo $products[$i]['Product']['id']; ?>" value="<?php echo $products[$i]['Product']['product_name']; ?>" />
									</div>
									<div class="content">
										<div class="item-info">
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="more">
														<a id="item<?php echo $products[$i]['Product']['id']; ?>" href="javascript:void(0)" class="styler_color property-link">Chi tiết sản phẩm</a>
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
						<div id="property-item<?php echo $products[$i]['Product']['id']; ?>" class="property-item">
							<div class="wide-divider">
								<a class="close-details" href="javascript:void(0)"></a>
							</div>
							<div class="inner-block">
								<div class="row">
									<div class="col-md-8 col-sm-8">
										<div class="">
											<div class="slider-block">
												<div id="rs_gallery<?php echo $products[$i]['Product']['id']; ?>" class="royalSlider rsDefault productDetailSlider">
													
												</div>
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
												<li class="active"><a class="styler_bg_color" href="#details1" data-toggle="tab">TỔNG QUAN SẢN PHẨM</a></li>
												<li><a class="styler_bg_color" href="#tab-map" data-toggle="tab">BẢN ĐỒ</a></li>
											</ul>
											<div class="tab-content tabs_blocks">
												<div class="active" id="details1">
													<ul class="info_slides">
														<li class="active">
															<a href="#" class="styler_color"><i class="arr styler_color"></i>Tổng quan</a>
															<div class="text" style="display: block;">
																<div class="row">
																	<div class="col-md-12 col-sm-12">
																		<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['overview']; ?>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li>
															<a href="#" class="styler_color"><i class="arr styler_color"></i>Thông số kỹ thuật</a>
															<div class="text">
																<div class="row">
																	<div class="col-md-12 col-sm-12">
																		<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['specification']; ?>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li>
															<a href="#" class="styler_color"><i class="arr styler_color"></i>Đánh giá sản phẩm</a>
															<div class="text">
																<div class="row">
																	<div class="col-md-12 col-sm-12">
																		<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['reviews']; ?>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li>
															<a href="#" class="styler_color"><i class="arr styler_color"></i>Link tải phần mềm</a>
															<div class="text">
																<div class="row">
																	<div class="col-md-12 col-sm-12">
																		<div class="left-tab-wrapper">
																			<?php echo $this->Html->link ( 
																				$products[$i]['Product']['link_download'],
																				$products[$i]['Product']['link_download']
																			); ?>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li>
															<a href="#" class="styler_color"><i class="arr styler_color"></i>Giấy chứng nhận</a>
															<div class="text">
																<div class="row">
																	<div class="col-md-12 col-sm-12">
																		<div class="left-tab-wrapper">
																			<?php echo $products[$i]['Product']['certificate']; ?>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<!-- edit featured listings house #1 map tab info here -->
												<div class="tab-map">
													<!-- begin map -->
													<div class="map" data-coordinates="32.83823,-96.775347" data-title="5321 E Mockingbird Ln, Dallas, TX 75206"></div>
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
				
				<!-- the about section starts here -->
				<div class="row">
					<div class="col-sm-12 col-ms-12">
						<div id="about-realtor_marker"></div>
						<div class="promo-block about-block">
							<!-- edit the about heading text here -->
							<h2 class="block-title styler_color">
							LỜI NHẮN NHỦ TỚI KHÁCH HÀNG
							</h2>
							<div class="block-separator clearfix"></div>
							<div class="col-sm-8 col-ms-8">
								<!-- edit the about text here -->
								<div class="promo-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh orci, commodo at mi non, ullamcorper elementum mauris. Fusce posuere sodales erat sed posuere. Integer sollicitudin, sem nec lobortis hendrerit, risus ante venenatis lacus, ut imperdiet ipsum ipsum ac arcu. Nunc sodales egestas tortor, id dapibus urna vulputate ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non odio sem. Proin id nunc cursus, tempus felis eu, accumsan felis. Donec commodo libero est, at lobortis ipsum congue ut.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh orci, commodo at mi non, ullamcorper elementum mauris. Fusce posuere sodales erat sed posuere. Integer sollicitudin, sem nec lobortis hendrerit, risus ante venenatis lacus, ut imperdiet ipsum ipsum.</p>
									<p>Nam non odio sem. Proin id nunc cursus, tempus felis eu, accumsan felis. Donec commodo libero est, at lobortis ipsum congue ut.</p>
								</div>
							</div>
							<!-- realtor about image area starts here -->
							<div class="col-sm-4 col-ms-4">
								<!-- edit edit the realtor about image here -->
								<img class="img-responsive" src="http://www.themeleaf.com/preview/realestatepro-v1.0/img/about_image.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- awards and associations logo block starts here -->
				<div class="wide-block">
					<div class="awards-block">
						<div id="awards_marker"></div>
						<div class="row">
							<div class="col-sm-3 col-ms-3">
								<!-- edit logo #1 here -->
								<img src="http://media.bizwebmedia.net/Sites/1554/Data/images/zebra_technologies.gif" width="200px" alt="">
							</div>
							<div class="col-sm-3 col-ms-3">
								<!-- edit logo #2 here -->
								<img src="http://media.bizwebmedia.net/Sites/1554/Data/images/Motorola_logo.jpg" width="200px" alt="">
							</div>
							<div class="col-sm-3 col-ms-3">
								<!-- edit logo #3 here -->
								<img src="http://media.bizwebmedia.net/Sites/1554/Data/images/avery_logo.jpg" width="200px" alt="">
							</div>
							<div class="col-sm-3 col-ms-3">
								<!-- edit logo #4 here -->
								<img src="http://media.bizwebmedia.net/Sites/1554/Data/images/zebra_technologies.gif" width="200px" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- begin resources -->
				<div class="resources clearfix">
					<div id="resources_marker"></div>
					<!-- edit the resources heading here -->
					<h2 class="block-title styler_color">
					ĐỊA CHỈ LIÊN HỆ 
					</h2>
					<div class="block-separator clearfix"></div>
					<div class="resources-wrapper">
						<div class="col-md-4 col-sm-4">
							<!-- edit the resources tabs here -->
							<ul class="nav nav-tabs">
								<li class="styler_parent_active active"><a class="styler_bg_color styler_active_color" href="#movers" data-toggle="tab">BAN GIÁM ĐỐC</a></li>
								<li class="styler_parent_active"><a class="styler_bg_color styler_active_color" href="#contractors" data-toggle="tab">VĂN PHÒNG</a></li>
								<li class="styler_parent_active"><a class="styler_bg_color styler_active_color" href="#utilities" data-toggle="tab">XƯỞNG </a></li>
								<li class="styler_parent_active"><a class="styler_bg_color styler_active_color" href="#lenders" data-toggle="tab">GOOGLE MAP</a></li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="tab-content">
								<!-- edit tab #1 (movers) content here -->
								<div class="tab-pane active" id="movers">
									<div class="top-sector">
										<div class="title">
											Giám Đốc : <b> Nguyễn Văn A </b>
										</div>
										<address>
											Số điện thoại: <b> 0988 888 768 </b> <br>
											Email: <b>nguyenvana@outlook.com</b><br>
											
										</address>
										<a class="lnk styler_color" href="#">www.dantri.com.vn</a>
									</div>
									<div class="bottom-sector">
										<div class="title">
											Giám Đốc : <b> Trần Quang B </b>
										</div>
										<address>
											Số điện thoại: <b> 0988 876 768 </b> <br>
											Email: <b>tranquangb@outlook.com</b><br>
											
										</address>
										<a class="lnk styler_color" href="#">www.vnexpress.net</a>
									</div>
								</div>
								<!-- edit tab #2 (contractors) content here -->
								<div class="tab-pane" id="contractors">
									<div class="top-sector">
										<div class="title">
											Văn phòng tại Hà Nội
										</div>
										<address>
											2002 tầng 22<br>
											Toà nhà Lotte Cầu Giấy<br>
											0433876521
										</address>
										
									</div>
									<div class="bottom-sector">
										<div class="title">
											Văn phòng tại Tp.Hồ Chí Minh
										</div>
										<address>
											1020 Diamon Plaza <br>
							
											08 28 28 28
										</address>
										
									</div>
								</div>
								<!-- edit tab #3 (utilities) content here -->
								<div class="tab-pane" id="utilities">
									<div class="top-sector">
										<div class="title">
											Địa chỉ Xưởng 
										</div>
										<address>
											222 Đồng Nai<br>
											
											06 456 456
										</address>
										
									</div>
									
								</div>
								<!-- edit tab #4 (lenders) content here -->
								<div class="tab-pane" id="lenders">
									<div class="top-sector">
										<div class="title">
											Prime Lending &amp; Associates
										</div>
										<address>
											9535 Preston Road<br>
											Suite 600<br>
											Dallas, TX 75252<br>
											(214)325-8866
										</address>
										<a class="lnk styler_color" href="#">www.primelending.com</a>
									</div>
									<div class="top-sector">
										<div class="title">
											Texas Lending, LLC.
										</div>
										<address>
											4400 Hillcreat Road<br>
											Dallas, TX 75245<br>
											(214)348-8888
										</address>
										<a class="lnk styler_color" href="#">www.texaslending.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /end resources -->
				<!-- begin contact form -->
				<!--
				<div id="contact_marker"></div>
				<h2 class="block-title styler_color">GỬI LỜI NHẮN CHO CHÚNG TÔI </h2>
				<div class="block-separator clearfix"></div>
				<div class="bottom-contact">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<form role="form" id="validForm">
								<div class="form-group">
									<input type="text" class="form-control" id="inputName" placeholder="Họ và tên">
								</div>
								
								<div class="form-group">
									<input type="email" class="form-control" id="inputEmail" placeholder="Địa chỉ Email">
								</div>
								<div class="form-group">
									<textarea id="textarea" class="form-control" rows="3"></textarea>
								</div>
								
								<div id="result"></div>
								<input type="submit" value="Gửi" class="btn btn-primary submit styler_bg_color">
							</form>
						</div>
						-->
						<!-- turn captcha on here by removing this comment
								<?php
									//require_once('config.php');
									//require_once('recaptchalib.php');
									if($use_recaptcha === true){
										//echo recaptcha_get_html($publickey);
									}
								?>
								-->
						<!--
						<div class="col-md-4 col-sm-4">
							<div class="address">
								<div class="title styler_color">Address, Phone &amp; Email</div>
								<div class="name styler_color">Anderson Realty, Inc.</div>
								<address class="styler_color">
									Mary L. Anderson<br>
									7800 East Mockingbird Lane<br>
									Suite 400<br>
									Dallas, TX 75235<br>
									<br>
									p. 214.985.9000<br>
									f. 214.985.9003<br>
									<a class="styler_color" href="mailto:e.hello@realestatepro.com">hello@realestatepro.com</a>
								</address>
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" value="<?php echo $base_url;?>" id="appRoot" />
<input type="hidden" value="<?php echo $productIdArray;?>" id="productIdArray"></input>
