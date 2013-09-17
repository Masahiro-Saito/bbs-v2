<?php

class Bbs Extends Model {
	public $name = 'Bbs';
/*
	public $hasMany = array(
			'Content' => array(
					'className' => 'Content',
					'foreignKey' => 'bbs_id',
					'conditions' => '',
					'order' => '',
					'limit' => 5,	// 1スレッド最大5件取得
					'dependent' => true,
					'exclusive' => false,
					'finderQuery' => ''
			)
	);
*/

	public function getBbsList() {
		// Bbsテーブル（1）とコメントテーブル（多）を関連付け
		$hasMany = array(
			'Content' => array(
					'className' => 'Content',
					'foreignKey' => 'bbs_id',
					'conditions' => '',
					'order' => '',
					'limit' => 5,	// 1スレッド最大5件取得
					'dependent' => true,
					'exclusive' => false,
					'finderQuery' => ''
			)
		);

		// データを取得
		$ret = $this->find('all');
		return $ret;
	}
}
