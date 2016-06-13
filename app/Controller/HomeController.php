<?php
class HomeController extends AppController {
	public $uses = array (
			'Product',
			'ProductImage' 
	);
	public function beforeFilter() {
		parent::beforeFilter ();
		$this->layout = 'default';
		$this->Auth->allow ();
	}
	public function trangchu() {
		// $products = $this->Product->find ( 'all', array (
		// 'order' => 'Product.id DESC',
		// 'limit' => 3,
		// 'conditions' => array (
		// 'Product.category_name' => 'Tem nhãn'
		// )
		// ) );
		$this->set ( 'title_for_layout', __ ( 'TRANG CHỦ' ) );
		$products = $this->Product->getProductForHomePage ();
		
		$productIdArray = [ ];
		foreach ( $products as $value ) {
			$productIdArray [] = $value ["Product"] ["id"];
		}
		
		$this->set ( 'products', $products );
		$this->set ( 'productIdArray', implode ( ",", $productIdArray ) );
	}
	public function nhanthucpham() {
		$products = $this->Product->getAllProduct ();
		echo "<pre>";
		print_r('OK');
		exit;
		
$options['fields'] = array(
        'Product.*',
        'ProductImage.image_url',
    );
    $options['joins'] = array(
        array(
            'table' => 'product_images',
            'alias' => 'ProductImage',
            'type' => 'left',
            'conditions' => array(
                'ProductImage.product_id = Product.id',
            )
        )
    );
    $options['order'] = 'Product.id DESC';
    $options['group'] = 'Product.id';
    echo "<pre>";
    print_r($options);
    exit;

		$products = $this->Product->find ( 'all', array (
		'order' => 'Product.id DESC',
		'limit' => 3,
		'conditions' => array (
		'Product.category_name' => 'Tem nhãn'
		)
		) );
		echo "<pre>";
		//$products = $this->Product->getProductForHomePage ();
		print_r($products);
		exit ();
		$this->set ( 'title_for_layout', __ ( 'Nhãn Thực Phẩm' ) );
	}
	public function baogia() {
		$this->set ( 'title_for_layout', __ ( 'BÁO GIÁ' ) );
	}
	public function thietke() {
		$this->set ( 'title_for_layout', __ ( 'THIẾT KẾ' ) );
	}
	public function xaydung() {
		$this->set ( 'title_for_layout', __ ( 'XÂY DỰNG' ) );
	}
	public function getProductDetail($productId) {
		$productImages = $this->ProductImage->getProductImgByProductId ( $productId );
		$myjson = $this->my_json_encode ( $productImages );
		echo $myjson;
		exit ();
	}
	function my_json_encode($phparr) {
		return json_encode ( $phparr );
	}
}