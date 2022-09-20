<?php
    $appname2 = "Steps_list";
?>
    
<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?= $appname2 ?></title>          
</head>
<body>
    <h2><?= $appname2 ?></h2>
    <?php
    $step1= "Grab a glass";
    $step2= "Fill with water";
    $step3= "Drink the water";
    $step4= "Set glass down";
        echo "<ol/>";
        foreach (step as $step) {
        echo "<li>".$step['Step_number'] . "</li>";
        }
        echo "</ol>";

    ?>
    </body>
    </html>