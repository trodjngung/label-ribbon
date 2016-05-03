<?php // app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $components = array(
			'Auth' => array(
					'Session',
					'Auth' => array(
							'Form' => array(
									'userModel' => 'User',
									'fields' => array(
											'username' => 'username',
											'password' => 'password'
									)
							)
					),
					'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
					'logoutRedirect' => array('controller' => 'home', 'action' => 'trangchu'),
					'loginAction' => array('controller' => 'users', 'action' => 'login'),
					
			)
	);	
	
    public function beforeFilter() {
    	$this->Auth->allow('add');
        //parent::beforeFilter();
        //$this->Auth->allow('*');
    }
    

    public function login() {
    	if ($this->Auth->loggedIn()) {
    		return $this->redirect( $this->Auth->redirectUrl());
    	}
    	 
    	if ($this->request->is('post')) {
    		if ($this->Auth->login()) {
    			return $this->redirect(array('controller'=>'posts','action' => 'index'));
    		}
    		$this->Session->setFlash(__('Invalid username or password, try again'));
    	
    	}
    }
    
    public function logout() {
    	$this->Session->destroy();
    	return $this->redirect($this->Auth->logout());
    }
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        $this->set('auth', $this->Auth->user());
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' =>'login'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
    public function view($id = null) {
    	$this->User->id = $id;
    	if (!$this->User->exists()) {
    		throw new NotFoundException(__('Invalid user'));
    	}
    	$this->set('user', $this->User->read(null, $id));
    }
    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('staff') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

}