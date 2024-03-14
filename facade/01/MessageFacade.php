<?php
require_once "MessageService.php";
interface sendNotifInterface{
    public function send($user,$massage);
}
class MessageFacade implements sendNotifInterface {
    public function send($user, $massage)
    {
        $MessageService=new MessageService();
        $MessageService->setMessage($massage);
        $MessageService->setMobile($user);
        $MessageService->sendMessage();
    }
}
