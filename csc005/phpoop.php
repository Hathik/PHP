<?php
    /*class Person{
        private $name;
        private $age;
        private $gender;

        public function __construct($n, $a, $g){
            $this->name = $n;
            $this->age = $a;
            $this->gender = $g;
        }

        public function setName($n){
            $this->name = $n;
        }
        public function getName(){
            return $this->name;
        }
    }

    $p1 = new Person("Jenny",20,"female");
    $p2 = new Person("Raj",23,"male");

    echo print_r($p1); echo "<br>";
    echo print_r($p2); echo "<br>";
    $p1->setName("Jenny");
    print($p1->getName()); echo "<br>";*/
    
?>

<?php
    class Account{
        private $customer;
        private $accountNo;
        private $balance;
        private static $annualInterestRate =10 ;

        public function __construct($c, $a, $b){
            $this->customer = $c;
            $this->accountNo = $a;
            $this->balance = $b;
        }
        public function setInitialBalance(){
            return $this->balance;
        }
        public function deposite($amount){
            $this->balance += $amount;
            return $this->balance;
        }
        public function withdraw($amount){
            $this->balance -= $amount;
            return $this->balance;
        }
        public function calcuateMonthlyInterest(){
           $monthlyIn = ($this->balance*(self::$annualInterestRate/100))/12;
           return $monthlyIn;
        }
    }


    $a1 = new Account("kumar",12345,50000);
    print_r($a1);
    print($a1->deposite(10000)); echo "<br>";
    print($a1->withdraw(5000)); echo "<br>";
    print($a1->calcuateMonthlyInterest()); echo "<br>";
    
?>