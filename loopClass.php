
<?php

class Loop{
	
	private $inc = 0;


	public function setInc($i){
		$this->inc = $i;
	}	

	public function proses(){
		
		$inc = 100;
		$tmpCombine = 0;
		$tmpStop = 0;
		$varTiga = ' : Marlin <br>';
		$varLima = ' : Booking<br>';

		for($i=0; $i <= $this->inc; $i++){
			
			if($i > 0){
				
				if($i%3 == 0 && $i%5 == 0){
					
					echo $i.' : Marlin Booking <br>';
					$tmpCombine++;
					
					if($tmpCombine == 2){
						
						$varTiga = ' : Booking<br>';
						$varLima = ' : Marlin <br>';
						
					}
					
				}else{
					
					if($i%3 == 0){
						echo $i.$varTiga;
					}
					
					if($i%5 == 0){
						echo $i.$varLima;
					}
				
				}
				
			}
			
			if($tmpCombine >= 5) break;
		}

	}

}