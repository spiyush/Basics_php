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
	 class SavingAccount extends BankAccount{  //through this extends savingAccount have all the properties of Bank Account
		}
	
	$piyush = new BankAccount;
	$piyush->Deposit(100);
	$piyush->Withdrawn(20);
	
	$piyush_saving = new SavingAccount;
	$piyush_saving->Deposit(300);
	
	echo $piyush->DisplayBalance().'<br>';
	echo $piyush_saving->DisplayBalance();
	
?> 