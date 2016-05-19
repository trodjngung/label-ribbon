<?php
class HomeController extends AppController{

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'default';
    }

	public function trangchu(){
		$this->set ( 'title_for_layout', __ ( 'TRANG CHỦ' ) );
		//$this->loadModel('Post');
		//$this->set('posts', $this->Post->find('all',array('order'=>'Post.id DESC')));
		//	$this->set('post', $post);
		//$this->set ( 'auth', $this->Auth->user () );
		//debug($post['Post']['title']);
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
	
}