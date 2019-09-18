<?php
class SingleToneClass{
    private static $instance=null;
    public $creationTime;
    private function __construct(){
        $this->creationTime=time();
        echo "New Class Created at:".$this->creationTime;
    }
    static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance=new self();
        }
        else{
            echo "it didnt create new class, Just existing object which was created at ".self::$instance->creationTime."  returned";
        }
        return self::$instance;
    }
}

