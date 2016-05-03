<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class RecruitsController extends AppController {
	
	public function get_recruitlist(){
		$this->view = false;
		$this->autoRender = false;
		
		$category = $_REQUEST['category_id'];

		$result = $this->Recruit->find('all', array(
				'conditions' => array(
						'Recruit.category_id' => $category
				)
		));

		return json_encode($result);
	}
	
	public function get_recruitinfo(){
		$this->view = false;
		$this->autoRender = false;
		
		$id = $_REQUEST['id'];
		
		$result = $this->Recruit->find('all', array(
				'conditions' => array(
						'Recruit.id' => $id
				)
		));
		
		return json_encode($result);
	}
	
	public function submitform(){
		$this->view = false;
		$this->autoRender = false;
		
		echo "Your submit successful<br>";
		debug($_REQUEST);
		debug($_FILES);
	}
}