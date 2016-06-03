<?php
class HomeController extends AppController{
    public $uses = array('Product', 'ProductImage');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'default';
        $this->Auth->allow();
    }

	public function trangchu(){
		$this->set ( 'title_for_layout', __ ( 'TRANG CHỦ' ) );
		$products = $this->Product->getProductForHomePage();
		$productIdArray = [];
		foreach ($products as $value) {
			$productIdArray[] = $value["Product"]["id"];
		}
		$this->set('products', $products);
		$this->set('productIdArray', implode(",",$productIdArray));
	}
	
	public function lienhe(){
		
		$this->set ( 'title_for_layout', __ ( 'LIÊN HỆ' ) );
	}

	public function baogia(){
		$this->set ( 'title_for_layout', __ ( 'BÁO GIÁ' ) );
	}
    
    public function thietke(){
		$this->set ( 'title_for_layout', __ ( 'THIẾT KẾ' ) );
	}
    
    public function xaydung(){
		$this->set ( 'title_for_layout', __ ( 'XÂY DỰNG' ) );
	}
	
	public function getProductDetail($productId) {
		$productImages = $this->ProductImage->getProductImgByProductId($productId);
		$myjson = $this->my_json_encode($productImages);
        echo $myjson;
        exit;
	}

	function my_json_encode($phparr) {
        return json_encode($phparr);
    }
}