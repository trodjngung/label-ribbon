<?php
/**
 * GetShell file
 * @Function get feed from website with Xpath-DOM
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
const URL ="http://www.baodoi.com/tintuc/the-thao";
const DOMAIN="http://www.baodoi.com";
class GetShell extends AppShell {
	
	
	public function main(){
		$this->out('___START____');
		exit;
		//$this->get();
	}
	public function get(){
		//set_time_limit(0);
		$dom= new DOMDocument('1.0','utf-8');
		@$dom->loadHTMLFile(URL);
		$xpath = new DOMXPath($dom);
		$items = $xpath->query('.//*[@class="newsRow cfix"]');
		$data_array = array();
		$number=0;
		foreach ($items as $item){
			$this->out($number.': ').PHP_EOL;
			$data['title']=mb_convert_encoding($xpath->query('.//*[@class="newsRow cfix"]/div/h1/a')->item($number)->nodeValue,'ISO-8859-15','utf-8');
			$this->out('___GET_TITLE___: '.$data['title']);
			$data['short_content']= mb_convert_encoding($xpath->query('.//*[@class="newsRow cfix"]/div/div')->item($number)->nodeValue,'ISO-8859-15','utf-8');
			$this->out('___GET_SHORT_CONTENT___: '.$data['short_content']);
			$bodyUrl = DOMAIN . $xpath->query('.//*[@class="newsRow cfix"]/div/h1/a/@href')->item($number)->nodeValue;
			$this->out('___GET_BODY_URL___: '.$bodyUrl);
			$domUrl = new DOMDocument('1.0','utf-8');
			@$domUrl->loadHTMLFile($bodyUrl);
			$xpathUrl = new DOMXPath($domUrl);
			$content =$xpathUrl->query('.//*[@class="postbody"]')->item(0);
			$content_html=$domUrl->saveHTML($content);
			$data['body']=mb_convert_encoding($content_html,'ISO-8859-15','utf-8');
			$this->out('___GET_BODY___'.$data['body']);
			$data_array[]=$data;
			$number++;
		}
		exit;
		return ($data_array);
	}
	public function savedata(){
		$this->set('posts', $this->Post->find('all'));
		
		if ($this->request->is('post')) {
			$Post = $this->request->data ;
			$body = $Post['Post']['body'];
			$get_link = '#img src="(.*?)"#';
			preg_match($get_link, $body, $match);
			if($match==null){
				$Post['Post']['image']= '/files/360days.png';
			}
			else
			{
				$image = $match[1];
				$Post['Post']['image']=$image;
			}
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			$this->Post->create();
			if ($this->Post->save($Post)) {
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array (
						'action' => 'index',
		
				));
			}
				
			$this->Session->setFlash(__('Unable to add your post.'));
		}
		
	}
	
}