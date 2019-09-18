<?php
require_once "Adapter.php";
require_once "SadadClassWrittenBySadad.php";
class SadadAdapter implements Adapter{

    private static $instance=null;
    private $sadad;
    private function __construct($sadad){
        $this->sadad=$sadad;
    }

    static function getInstance(SadadClassWrittenBySadad $sadad){
        if(is_null(self::$instance)){
            self::$instance=new self($sadad);
        }
        return self::$instance;
    }

    public function pay(){
        $this->sadad->sadadPaymentMethod();
    }
}