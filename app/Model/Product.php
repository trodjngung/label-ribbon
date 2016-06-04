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

// app/Model/Product.php
App::uses('AppModel', 'Model');

class Product extends AppModel {
  var $name = 'Product';

  function getAllProduct() {
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
    return $this->find('all', $options);
  }

  function getProductForHomePage() {
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
    $options['order'] = 'rand()';
    $options['group'] = 'Product.id';
    $options['limit'] = '9';
    return $this->find('all', $options);
  }

  function getListMax() {
    $options['fields'] = array(
        'max(cast(id as signed)) as id'
    );
    return $this->find('all', $options);
  }
}