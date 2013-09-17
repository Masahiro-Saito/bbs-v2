<?php
App::uses('AppController', 'Controller');

class BbsController extends AppController {
	public $name = 'Bbs';
	public $uses = array('Bbs', 'Comment');

	function index() {
		$this->autoLayout = false;

		// DBからデータを取得
		$data = $this->Bbs->getBbsList();
		// セッションにデータをセット
		$this->set('data', $data);
	}

}
