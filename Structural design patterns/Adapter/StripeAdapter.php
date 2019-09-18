<?php
require_once "Adapter.php";
require_once "StripeClassWrittenByStripe.php";
class StripeAdapter implements Adapter{

    private static $instance=null;
    private $stripe;
    private function __construct($stripe){
        $this->stripe=$stripe;
    }

    static function getInstance(StripeClassWrittenByStripe $stripe){
        if(is_null(self::$instance)){
            self::$instance=new self($stripe);
        }
        return self::$instance;
    }

    public function pay(){
        $this->stripe->payByStripe();
    }
}