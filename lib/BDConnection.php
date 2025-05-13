<?php

class BDConnection{
    public ?PDO $database = null;

    public function getConnection(){
        try {
            if($this->database == null){
                $this->database = new PDO('mysql:host=localhost;dbname=hobbies;charset=utf8', 'root', '');
            }
            return $this->database;

        } catch (\Throwable $th) {
           header("Location: index.php?action=error");
        }
    }

}