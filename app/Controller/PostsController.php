<?php
App::uses ( 'AppController', 'Controller' );
class PostsController extends AppController {
	public $uses = [ 
			'Post',
			'User' 
	];
	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';  

        $this->Auth->allow('');
    }
	
	/*
	 * public $helpers = array('Html', 'Form');
	 *
	 * //////User
	 *
	 * public function isAuthorized($user) {
	 * // All registered users can add posts
	 * if ($this->action === 'add') {
	 * return true;
	 * }
	 *
	 * // The owner of a post can edit and delete it
	 * if (in_array($this->action, array('edit', 'delete'))) {
	 * $PostId = (int) $this->request->params['pass'][0];
	 * if ($this->Post->isOwnedBy($PostId, $user['id'])) {
	 * return true;
	 * }
	 * }
	 *
	 * return parent::isAuthorized($user);
	 * }
	 *
	 */
	// Index
	public function index() {
/*
		$douong=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Đồ Uống')));
		$monngon=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Món Ngon')));
		$amthuc=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Ẩm Thực')));
		$nhahang=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Nhà Hàng')));
		$this->set('douong', $douong);
		$this->set('monngon', $monngon);
		$this->set('amthuc', $amthuc);
		$this->set('nhahang', $nhahang);
*/
		$this->paginate = array (
				'conditions' => array (
						'Post.title LIKE' => 'a%' 
				),
				'limit' => 10 
		);
		$data = $this->paginate ( 'Post' );
		$this->set ( compact ( 'data' ) );
		$this->set ( 'posts', $this->Post->find ( 'all' ) );
		$this->loadModel ( 'User' );
		$this->set ( 'auth', $this->Auth->user () );
		$this->set ( 'users', $this->User->find ( 'all' ) );
		
	}
	
	public function view($slug = null) {
		$this->set ( 'posts', $this->Post->find ( 'all', array (
				'order' => 'Post.id DESC' 
		) ) );
		$douong=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Đồ Uống')));
		$monngon=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Món Ngon')));
		$amthuc=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Ẩm Thực')));
		$nhahang=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Nhà Hàng')));
		$this->set('douong', $douong);
		$this->set('monngon', $monngon);
		$this->set('amthuc', $amthuc);
		$this->set('nhahang', $nhahang);
		if (! $slug) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		$post = $this->Post->findBySlug ( $slug );
		if (! $post) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		
		$this->set ( 'post', $post );
		$this->set ( 'title_for_layout', $post ['Post'] ['title'] );
	}
	
	// Add function
	public function add() {
		$this->set ( 'posts', $this->Post->find ( 'all' ) );
		
		if ($this->request->is ( 'post' )) {
			$Post = $this->request->data;
			// debug($Post);
			// exit;
			$body = $Post ['Post'] ['body'];
			$Post['Post']['slug'] = $this->to_slug($Post['Post']['title']);
			/*
			$get_link = '#img src="(.*?)"#';
			preg_match ( $get_link, $body, $match );
			$Post['Post']['slug'] = $this->to_slug($Post['Post']['title']);
			if ($match == null) {
				$Post ['Post'] ['image'] = '/files/360days.png';
			} else {
				$image = $match [1];
				$Post ['Post'] ['image'] = $image;
			}
			*/
			$this->request->data ['Post'] ['user_id'] = $this->Auth->user ( 'id' );
			$this->Post->create ();
			if ($this->Post->save ( $Post )) {
				$this->Session->setFlash ( __ ( 'Your post has been saved.' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				)
				 );
			}
			
			$this->Session->setFlash ( __ ( 'Unable to add your post.' ) );
		}
	}
	// Edit function
	public function edit($id = null) {
		$douong=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Đồ Uống')));
		$monngon=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Món Ngon')));
		$amthuc=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Ẩm Thực')));
		$nhahang=$this->Post->find('all',array('order'=>'Post.id DESC','conditions'=>array('Post.theloai'=>'Nhà Hàng')));
		$this->set('douong', $douong);
		$this->set('monngon', $monngon);
		$this->set('amthuc', $amthuc);
		$this->set('nhahang', $nhahang);
		if (! $id) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		
		$post = $this->Post->findById ( $id );
		if (! $post) {
			throw new NotFoundException ( __ ( 'Invalid post' ) );
		}
		if ($this->request->is ( array (
				'post',
				'put' 
		) )) {
			$this->Post->id = $id;
			$body = $post ['Post'] ['body'];
			preg_match ( '#img src="(.*?)"#', $body, $match );
			$image = $match [1];
			$post ['Post'] ['image'] = $image;
			// debug($image);
			if ($this->Post->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'Your post has been updated.' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'Unable to update your post.' ) );
		}
		
		if (! $this->request->data) {
			$this->request->data = $post;
		}
		$this->set ( 'Post', $post );
	}
	
	// Delete function
	public function delete($id) {
		if ($this->request->is ( 'get' )) {
			throw new MethodNotAllowedException ();
		}
		
		if ($this->Post->delete ( $id )) {
			$this->Session->setFlash ( __ ( 'The post with id: %s has been deleted.', h ( $id ) ) );
		} else {
			$this->Session->setFlash ( __ ( 'The post with id: %s could not be deleted.', h ( $id ) ) );
		}
		
		return $this->redirect ( array (
				'controller' => 'posts',
				'action' => 'index' 
		) );
	}
	private function to_slug($str) {
		$str = trim ( mb_strtolower ( $str ) );
		$str = preg_replace ( '/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str );
		$str = preg_replace ( '/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str );
		$str = preg_replace ( '/(ì|í|ị|ỉ|ĩ)/', 'i', $str );
		$str = preg_replace ( '/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str );
		$str = preg_replace ( '/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str );
		$str = preg_replace ( '/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str );
		$str = preg_replace ( '/(đ)/', 'd', $str );
		$str = preg_replace ( '/[^a-z0-9-\s]/', '', $str );
		$str = preg_replace ( '/([\s]+)/', '-', $str );
		return $str;
	}	
}

?>