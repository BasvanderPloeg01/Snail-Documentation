<?php

class ScriptsModel extends Model {
	public function __construct() {
		parent::__construct();
		
		$qb = new QueryBuilder();
	}
}