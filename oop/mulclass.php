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
		
		public function Deposit($amount){
			$this->balance=$this->balance + $amount;
			
			
		}
		
	}		
	//new instance of class	
	$piyush = new BankAccount;
	$sneha = new BankAccount;
	//withdrawn
	
	$piyush->Deposit(20);
	$sneha->Deposit(500);
	
	$piyush->withdrawn(40);
	$sneha->withdrawn(50);
	
	//displaying instance
	echo $piyush-> DisplayBalance();	//  echo $piyush-> DisplayBalance();
	echo $sneha-> DisplayBalance();
	
?>