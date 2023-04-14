<?php
    for($i=0; $i<count($_POST); $i++) {
        echo "Nuevo precio de producto " . ($i+1) . ": $".
        ($_POST["product$i"] - ($_POST["product$i"] * 0.35)) .
        "<br>";
}