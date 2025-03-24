<?php
    include_once("Config.php");

    include __DIR__.("/Include/Header.html");
    include __DIR__.("/Include/Register.php");
    include __DIR__.("/Include/Footer.html");

    use \Model\Cake;

    $cake = new Cake();

    if(isset($_POST["cake"])){     
        if (!empty($_POST["id"])) {
            $cake->id = $_POST["id"];
        }
        $cake->name = $_POST["cake"];
        $cake->price = $_POST["cakePrice"];

        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $id = $_GET['id'];
            $cake = Cake::getCakeById($id);
            if ($cake) {
                $name = $cake->name;
                $price = $cake->price;
            }
        }
        
       switch ($_POST["op"]){
            case "register":
                $cake->create();
                break;
            case "edit":
                $cake->alter();
                break;
            case "exclude":
                $cake->exclude();
                break;
            default:
       }
    }
?>