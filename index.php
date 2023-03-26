<?php
    function ucgen (int $adet) {
        for ($i=1; $i <= $adet ; $i++) { 
            for ($j=1; $j <= $i; $j++) { 
                echo "0 ";
            }
            echo "<br>";
        }
    }
    ucgen(15);
?>