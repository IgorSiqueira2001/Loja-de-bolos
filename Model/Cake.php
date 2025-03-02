<?php
    namespace Model;

    use \Database\Database;
    use \PDO;

    class Cake {

        public $id=0;
        public $name;
        public $price;


        public function create(){
            $objDatabase = new Database('cake');
            $id = $objDatabase->insert([
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price
            ]);
        }

        public function alter(){
           return (new Database('cake'))->update('id=' . $this->id, [
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price
            ]);
        }

        public function exclude(){
            return (new Database('cake'))->delete('id=' . $this->id);
        }
    }

    

?>