<?php
// PHP program to explain function
// overloading in PHP

// Creating a class of type shape
class shape {
	
	// __call is magic function which accepts
	// function name and arguments
	function __call($luasBidang, $ukuran) {
			
		// It will match the function name
		if($luasBidang == 'luas') {
			
			switch (count($ukuran)) {
					
				// If there is only one argument
				// area of circle
				case 1:
					return 3.14 * $ukuran[0];
						
				// IF two arguments then area is rectangle;
				case 2:
					return $ukuran[0]*$ukuran[1];
			}
		}
	}
}
	
// Declaring a shape type object
$s = new Shape;
	
// Function call
echo "luas lingkaran = ".($s->luas(2));
echo "<p></p>";
	
// calling area method for rectangle
echo "luas persegi = ".($s->luas(4, 2));
?>
