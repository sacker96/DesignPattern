<?php 

include ('factorymethod1.php');
include ('factorymethod2.php');

class FactoryProducer {
	public static function getFactory($choice)
	{
		$choice = strtolower($choice);
		if($choice == 'Shape' ){
			return new ShapeFactory;
		} elseif ($choice == 'Color') {
			return new FillColorFactory;
		}
		return null;
	}
}

// chon hinh
// khoi tao lop shapeFactory
$shapeFacetory = FactoryProducer::getFactory('Shape');
$shape = $shapeFacetory->getShape(Shape::TAMGIAC);
$shape->tinhChuVi();

//chon mau

$colorFactory = FactoryProducer::getFactory('Color');
$fill = $colorFactory->getColor('Red');
$fill->fillColor();

// abstracfatory quan ly nhieu factorymethod