<?php

interface Color {
	function fillColor();
}

class Red implements Color {
	public function fillColor() {
		echo "to mau do";
	}
}

class Yelow implements Color {
	public function fillColor() {
		echo "to mau Vang";
	}
}

class Blue implements Color {
	public function fillColor() {
		echo "to mau xanh";
	}
}

/**
 * factory method
 */

class FillColorFactory {
	public function getColor($color){
		switch ($color) {
			case 'Red':
				return new Red();
				break;

			case 'Yelow':
				return new Yelow();
				break;

			case 'Blue':
				return new Blue();
				break;
			
			default:
				return null;
				break;
		}
		return null;
	}
}

