<?php

		class Cirlce{
			
			const pi = 3.141;
			
			public function Area ($radius){
				
				return self::pi *($radius *$radius);
			}
			
		}
		$circle = new Cirlce;
		
		echo $circle->Area(100);
		
		



?>