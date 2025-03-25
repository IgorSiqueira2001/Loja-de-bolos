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

        public function alter($codigo){
           echo('esse é o ID' . $codigo);
           return (new Database('cake'))->update('id=' . $codigo, [
                'name' => $this->name,
                'price' => $this->price
            ]);
        }

        public function exclude($codigo){
            return (new Database('cake'))->delete('id=' . $codigo);
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