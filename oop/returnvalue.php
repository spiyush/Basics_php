<?php 

	class BankAccount {                // BankAccount   is object
		public $balance =10.5;      // balance is property
	
		public function DisplayBalance(){   // displaybalance is method
		return 'Balance'.$this->balance;	// same result when return 'balance'.$this->balance;
			
		}
		
		public function withdrawn($amount){   // displaybalance is method
		 
		 if(($this->balance)<$amount){
			 
			 echo 'not enough money';       // HERE U CAN ALSO USE THROWING EXCEPTIONS
		 }else{
		 $this->balance=$this->balance - $amount;	// same result when return 'balance'.$this->balance;
		 }	
		}
	}		
	//new instance of class	
	$piyush = new BankAccount;
	
	//withdrawn
	
	$piyush->withdrawn(20);
	
	
	//displaying instance
	echo $piyush-> DisplayBalance();	//  echo $piyush-> DisplayBalance();

?>