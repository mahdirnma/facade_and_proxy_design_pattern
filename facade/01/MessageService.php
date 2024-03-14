<?php
class MessageService{
    public $mobile;
    public $message;

    public function setMobile($mobile){
        $this->mobile=$mobile;
    }
    public function setMessage($message){
        $this->message=$message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function sendMessage()
    {
        echo $this->getMessage()." - -the message has been sent - ".$this->getMobile()."<br>";
    }
}
