<h1>Condition</h1>

<?php
    $age = 17;
    if($age >= 18) {
        echo"Legak age";
    } else if ($age >= 0 && $age <= 10) {
        echo 'something';
    } else {
        echo "Minor";
    }

    $ageLabel = ($age >= 18) ? '18+' : '17-';
    echo $ageLabel;

    if($role == 'admin'){

    }

    if($role == 'instructor'){

    }

?>