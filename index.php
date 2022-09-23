<!--- test commit --->

<?php
    $appname = "To do List";
    $items = ["milk", "bananas", "ice cream"];
    $items.= "item_name";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appname ?></title>
</head>
<body>
    <h1><?= $appname ?></h1>
    <?php
        echo "<ul/>";
        // loop through data  
        foreach ($items as $item) {
            $appname .=$items;
           echo  "<li>".$items["item_name"] . "</li>";
        }
        "</ul>";
        

    ?>

<!-- 
    Create a Input Form with HTML 
    Create a second table with data 
    display on a second page the seccond table.

-->


</body>
</html>

<!--- 

CRUD

Create Read Update and Delete

    -->