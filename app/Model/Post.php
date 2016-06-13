<?php
class Post extends AppModel {
	public $validate = array (
			'title' => array (
					'required' => array (
							'rule' => array (
									'notEmpty' 
							),
							'message' => 'Title is required' 
					) 
			),
	
	);
	public function isOwnedBy($post, $user) {
		return $this->field ( 'id', array (
				'id' => $post,
				'user_id' => $user 
		) ) !== false;
	}
}