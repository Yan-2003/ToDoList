<?php
class add{
    private $text;
    private $db;
    private $array;
    private $id;
    public $message;


    public function __construct($text){
        $this->text = trim($text);
        $this->db = json_decode(file_get_contents("database/list.json"), true);
        $this->id = $this->getID();
        $this->array = array(
            'id'=>$this->id,
            'list'=>$this->text,
            'check'=>false
        );

        if($this->checkInput() == true){
            if($this->sendDATA() == true){
                $this->message = "Successfully add new list.";
            }else{
                $this->message = "Failed to add new list.";
            }
        }else{
            $this->message = "You enter a blank list.";
        }
    }

    private function checkInput(){
        if(empty($this->text)){
            return false;
        }
        return true;
    }

    private function sendDATA(){
        $this->db[] = $this->array;
        if(file_put_contents("database/list.json",json_encode($this->db, JSON_PRETTY_PRINT))){
            return true;
        }
        return false;
    }


    private function getID(){
        $id = 0;
        if($this->db == null){
            return 1;
        }else{
            foreach($this->db as $user){
                $id = $user['id'] + 1; 
            }
        }
        return $id;
    }
}