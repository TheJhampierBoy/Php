    <?php
    function contar($numero, $mult){ 
        while($mult<$numero){
            $mult++;
            $resultado = $mult * $numero;
            if($mult %2==0){
                echo ($numero . " x " . $mult . " = " . $resultado . " Es par ");
            }else{
                echo ($numero . " x " . $mult . " = " . $resultado . " Es impar ");
            }
        }
    }
    contar(9, 0);
    ?>
