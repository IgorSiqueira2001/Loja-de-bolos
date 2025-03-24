<?php
    namespace Model;

    use \Database\Database;
    use \PDO;

    class Cake {

        public $id;
        public $name;
        public $price;


        public function create(){
            $objDatabase = new Database('cake');
            $id = $objDatabase->insert([
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

        public static function getCakes($where = null, $order = null, $limit = null){
            return(new Database('cake'))->select($where, $order, $limit)
                ->fetchAll(PDO::FETCH_CLASS, self::class);
        }

        public static function getCakesByID($id){
            return(new Database('cake'))->select('id=' . $id)
                ->fetchObject(self::class);
        }

    }
?>