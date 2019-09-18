<?php
require_once ("GatewayIntrface.php");
class PayByStripe implements GatewayIntrface{

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

    public function pay($amount){
       echo "$amount Dollars payed by STRIPE";
    }
}