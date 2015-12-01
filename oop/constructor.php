<?php


	class example {
		
		public function __construct($something){
			
			$this->Saysomething($something);
		}
		public function Saysomething($something){
			
			echo $something;
		}
	}

	$example = new Example ('some one miss you');


?>