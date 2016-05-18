<?php
/**
  * This file is …….
  * Developed by PHP language program, use Framework Cakephp.
  * Copyright (c) 2016 by  OREGON - VIET INVESTMENT DEVELOPMENT MEDIA TECHNOLOGY COMPANY LIMITED
  * Short name: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=eng 
  * Email: vietoregon.tech.com@gmail.com
  * Thanks and best regard !
  * —————————————————————————————————————
  * Đây là file dùng để ……. 
  * Phát triển bởi ngôn ngữ lập trình PHP, sử dụng Framework CakePHP
  * Quyền tác giả (c) 2016 CÔNG TY TNHH ĐẦU TƯ PHÁT TRIỂN CÔNG NGHỆ TRUYỀN THÔNG VIỆT-OREGON
  * Tên ngắn giao dịch: OREGON CO.,LTD
  * Website: http://vietoregon-tech.com/?lang=vn
  * Địa chỉ Email: vietoregon.tech.com@gmail.com
  * Cám ơn quý đối tác !
  **/

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');

class ProductsController extends AppController {

    public $uses = array('Product', 'ProductImage');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('layout_name', 'Sản phẩm');
        $this->Auth->allow('');
    }

    public function index() {
        // $this->isAdmin();
        $this->Product->recursive = 0;
        $this->set('products', $this->paginate());
    }
    public function add() {
        if ($this->request->is('post')) {
            $dsProduct = $this->Product->getDataSource();
            $dsProductImage = $this->ProductImage->getDataSource();
            
            $dsProduct->begin($this);
            $dsProductImage->begin($this);

            $this->Product->create();
            $this->ProductImage->create();

            $product_id_max = $this->Product->getListMax();
            $product_id = $product_id_max[0][0]["id"]+1;
            
            $saveFlag = $this->saveProduct($this->request->data, $product_id, 'add');

            if ($saveFlag) {
                $dsProduct->commit($this);
                $dsProductImage->commit($this);
                $this->Session->setFlash(
                    'Thêm sản phẩm thành công.',
                    'default',
                    array('class' => 'succes')
                );
                return $this->redirect(array('controller' => 'products', 'action' =>'view', $product_id));
            }
            $dsProduct->rollback($this);
            $dsProductImage->rollback($this);
            $this->Session->setFlash(
                'Thêm sản phẩm thất bại, vui lòng thử lại sau.',
                'default',
                array('class' => 'error')
            );
        }
    }
    public function view($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'products', 'action' =>'index'));
        }
        $this->set('product', $this->Product->read(null, $id));
        $this->set('layout_name', 'Sản phẩm');
        $this->set('productImg', $this->ProductImage->getProductImgByProductId($id));
    }
    public function edit($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
            return $this->redirect(array('controller' => 'products', 'action' =>'index'));
        }

        $this->Product->set($this->request->data);
        if ($this->Product->validates()) {
            if ($this->request->is('staff') || $this->request->is('put')) {
                $dsProduct = $this->Product->getDataSource();
                $dsProductImage = $this->ProductImage->getDataSource();
                
                $dsProduct->begin($this);
                $dsProductImage->begin($this);

                $saveFlag = $this->saveProduct($this->request->data, $id, 'edit');

                if ($saveFlag) {
                    $dsProduct->commit($this);
                    $dsProductImage->commit($this);
                    $this->Session->setFlash(
                        'Cập nhật sản phẩm thành công.',
                        'default',
                        array('class' => 'succes')
                    );
                    return $this->redirect(array('controller' => 'products', 'action' =>'view', $id));
                }
                $dsProduct->rollback($this);
                $dsProductImage->rollback($this);
                $this->Session->setFlash(
                    'Cập nhật sản phẩm thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        $product = $this->Product->read(null, $id);
        $productImgs = $this->ProductImage->getProductImgByProductId($id);
        $this->set('productImgs', $productImgs);
        $this->set('product', $product);
    }
    public function delete($id = null) {
        $this->request->allowMethod('post');
        $product = $this->Product->getProductById($id);
        if (count($product) == 0) {
            $this->Session->setFlash(
                'Sản phẩm không tồn tại.',
                'default',
                array('class' => 'error')
            );
        } else {
            $product['Product']['del_flag'] = 'Y';
            $product['Product']['modified'] = date("Y-m-d H:i:s",time());
            if ($this->Product->save($product)) {
                $this->Session->setFlash(
                    'Xóa sản phẩm thành công.',
                    'default',
                    array('class' => 'succes')
                );
            } else {
                $this->Session->setFlash(
                    'Xóa sản phẩm thất bại, vui lòng thử lại sau.',
                    'default',
                    array('class' => 'error')
                );
            }
        }
        return $this->redirect(array('controller' => 'products', 'action' =>'index'));
    }

    public function saveProduct($data, $product_id, $function)
    {
        $requestData['Product'] = $data['Product'];
        $saveFlag = $this->Product->save($requestData['Product']);

        if ($saveFlag) {
            $requestData['ProductImage'] = $data['ProductImage'];
            $productImageData = array();
            $folderName = date("mY",time());
            if (!file_exists(PRODUCT_IMG_FOLDER.DS.$folderName)) {
                $dir = new Folder(PRODUCT_IMG_FOLDER.DS.$folderName, true, 0777);
            }
            $tmpImage = array();
            if ($function == 'edit' && isset($requestData['ProductImage']["img_remove_id"])) {
                foreach ($requestData['ProductImage']["img_remove_id"] as $key => $value) {
                    $this->ProductImage->id = $value;
                    if (!$this->ProductImage->exists()) {
                        continue;
                    }
                    $oldProductImg = $this->ProductImage->findById($value);
                    
                    $saveFlag = $this->ProductImage->delete();
                    if (!$saveFlag) {
                        break;
                    } else {
                        $this->removeImg(PRODUCT_IMG_FOLDER.DS.$oldProductImg['ProductImage']['image_url']);
                    }
                }
            }
            if ($saveFlag && $requestData['ProductImage']['image'][0]['tmp_name'] != '') {
                foreach ($requestData['ProductImage']['image'] as $key => $value) {
                    $productImageData[$key]['ProductImage']['product_id'] = $product_id;
                    $productImageData[$key]['ProductImage']['image_url'] = $folderName . DS . $value['name'];
                    $tmpImage[$key]['name'] = $value['name'];
                    $tmpImage[$key]['tmp_name'] = $value['tmp_name'];
                }
                $saveFlag = $this->ProductImage->saveMany($productImageData);   

                if ($saveFlag) {
                    foreach ($tmpImage as $key => $value) {
                        move_uploaded_file(
                            $value['tmp_name'], 
                            PRODUCT_IMG_FOLDER.DS.$folderName . DS . $value['name']
                        );
                    }
                }
            }
        }
        return $saveFlag;
    }

    function my_json_encode($phparr)
    {
        return json_encode($phparr);
    }

    function removeImg($file_path = null) {
        unlink($file_path);
    }
}