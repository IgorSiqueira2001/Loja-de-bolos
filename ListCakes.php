<?php
    require_once("Config.php");
    use Model\Cake;

    function printCakes(){
        $cake = Cake::getCakes();
        $table = " ";

        foreach($cake as $c){
            $table .= "<tr>";
                $table .= "<td>" . $c->id . "</td>";
                $table .= "<td>" . $c->name . "</td>";
                $table .= "<td>" . $c->price . "</td>";
                $table .= "<td>" . "<a href='Register.php?op=1&id=$c->id' class='btn btn-primary'>" . "Editar" . "</a>". "</td>";
            $tabel .= "</tr>";
        }
        return $table;
    }
?>