<?php
interface Shape {
	const TRON = 1;
	const VUONG = 2;
	const TAMGIAC = 3;
	function tinhChuVi();
}

class Tron implements Shape {
	public function tinhChuVi() {
		echo "chu vi cua hinh Tron la: ";
	}
}

class Vuong implements Shape {
	public function tinhChuVi() {
		echo "chu vi hinh vuong la: ";
	}
}

class Tamgiac implements Shape {
	public function tinhChuVi() {
		echo "chu vi hinh tam giac la: ";
	}
}

/**
 * Factory Method
 */
class ShapeFactory
{
	public function getShape($hinh) {
		switch ($hinh) {
			case Shape::TRON:
				return new Tron;
				break;
			
			case Shape::VUONG:
				return new Vuong;
				break;

			case Shape::TAMGIAC:
				return new Tamgiac;
				break;

			default:
				return null;
				break;
		}
		return null;
	}
}


// factory method la chung ta chi can yeu cau tu factory, nhiem vu con lai la factory se phai cung cap chinh xac cong viec ma ta muon ma chung ta ko can quan tam trong do thuc hien nhu the nao.
