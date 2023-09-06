
<!-- Create a class named BankAccount with properties balance and accountNumber. Implement
methods to deposit, withdraw, and get the current balance. Also, implement a constructor to
initialize the account number and balance. -->


<?php
class BankAccount {
    private $balance;
    private $accountNumber;

    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        // Add validation logic here if needed
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        // Add validation logic here if needed
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return "Cash withdrawl Successfull";
        } else {
            return "Sorry!! Failed because of insufficient balance"; // Insufficient balance
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Example usage:
$account = new BankAccount("12345", 1000);

$account->deposit(500);
echo "Current Balance: $" . $account->getBalance() . "\n";
echo "Withdraw - " . $account->withdraw(300) . "\n";
echo "Afetr withdrawl Current Balance is: " . $account->getBalance();


