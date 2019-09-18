<?php
require_once "payByStripe.php";
require_once "payBySadadGateway.php";

class ShoppingCard{

    private static $instance=null;
    private $amount=0;

    private function __construct(){

    }

    static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance=new self();
        }
        return self::$instance;
    }

    public function setAmount($amount=0){
        $this->amount=1*$amount;
    }

    public function payAmount($currency='IRR') {
        if($currency=='IRR') {
            $payment = PayBySadadGateway::getInstance();
        }
        else {
            $payment = PayByStripe::getInstance();
        }
        $payment->pay($this->amount);
    }

}