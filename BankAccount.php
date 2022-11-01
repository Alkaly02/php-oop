<?php

class BankAccount {

  private $account_number;
  private $balance = 0;
  private $last_money = 2000;

  public function __construct($account_number)
  {
    $this->account_number = $account_number;
  }

  public function deposit($sum){
    $this->balance = $this->balance + $sum;
  }

  public function get_balance(){
    return $this->balance;
  }

  public function get_account_number(){
    return $this->account_number;
  }

  public function withdrawal($sum){
    if($sum < 5000){
      throw new Exception("You can only withdraw from 2000");
    }
    if(($this->balance - $sum) <= $this->last_money){

      throw new Exception("You can't withdraw $sum.You at least have to leave $this->last_money in you bank account.<br> Your balance is = $this->balance");
    }

    $this->balance = $this->balance - $sum;
    return $sum;
  }


}

$alkaly_account = new BankAccount(25647);

$alkaly_account->balance = 658889;

$alkaly_account->deposit(20000);
$alkaly_account->deposit(5000);

try {
  echo $alkaly_account->withdrawal(5000). "<br>";
  echo $alkaly_account->withdrawal(100000);
} catch (Exception $e) {
  echo $e->getMessage();
}

?>