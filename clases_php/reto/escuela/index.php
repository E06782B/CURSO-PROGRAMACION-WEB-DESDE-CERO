<?php
    function ageValidation($age)
    {
        if($age < 5) {
            return "la parte inferior de la bodega.";
        } elseif ($age >= 5 && $age <= 7) {
            return "la parte media de la bodega.";
        } elseif ($age > 7){
            return "la parte alta de la bodega.";
        } elseif($age == ' ') {
            return "la bodega de al lado.";
        }
    }
    $studentAge = $_POST["age"];
    echo "El estudiante con $studentAge años, tendrá sus juguetes en " . ageValidation($studentAge);
?>