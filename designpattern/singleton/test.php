<?php

/**
 * singleton
 */
class DB
{
	static $abc;
	private function __construct()
	{
		# code..
	}
	static function getAbc() {
		if (!self::$abc) {
			self::$abc = new DB;
		}
		return self::$abc;
	}

}

$db = DB::getAbc();
var_dump($db);
$db2 = DB::getAbc();
var_dump($db2);
$db3 = DB::getAbc();
var_dump($db3);

// cho du chung ta co khoi tao ket noi DB bao nhieu lan thi cung chi tra ve duy nhat 1 object
// lam giam so luong ket noi ko can thiet toi database server
