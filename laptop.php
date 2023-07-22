<?php
/* Use late static bininding to update a protected static attribute. */
class Laptop {
	protected static $laptopName = 'Laptop';

	public static function getLaptopName()
	{
		return static::$laptopName;
	}
}

class Lenovo extends Laptop {
	protected static $laptopName = 'Lenovo';
}

class Dell extends Laptop {
	protected static $laptopName = 'Dell';
}

class Acer extends Laptop {
	protected static $laptopName = 'Acer';
}

class Asus extends Laptop {
	protected static $laptopName = 'ASUS';
}

class Samsung extends Laptop {
	protected static $laptopName = 'Samsung';
}


echo Lenovo::getLaptopName(); // Lenovo
echo Dell::getLaptopName(); // Dell
echo Acer::getLaptopName(); // Acer
echo Asus::getLaptopName(); // ASUS
echo Samsung::getLaptopName(); // Samsung
echo Lenovo::getLaptopName(); // Lenovo
