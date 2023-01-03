<?php 


class check{
    private $id;
    private $data;
    private $array;

    public function __construct($id)
    {
        $this->id = $id;
        $this->data = json_decode(file_get_contents("database/list.json"), true);

        foreach($this->data as $list){
            if($this->id == $list['id']){
                $list['check'] = true;
            }
            $this->array[] = $list;
        }
        file_put_contents("database/list.json", json_encode($this->array, JSON_PRETTY_PRINT));
    }
}