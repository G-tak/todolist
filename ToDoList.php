<?php
  $appName="To Do List";
  include 'config.php';
  include 'queries/qry_items.php';
?>
<?php include 'includes/header.php';?>

<div class="container-fluid mt-3 ms-1">
    <h1><?= $appName ?></h1>
    <?php 
    echo "<ul/>";
    // loop through data  
    foreach ($items as $item) {
        // var_dump($item);
        echo "<li>".$item['Item_name'] . "</li>";
    }
    echo "</ul>";
    ?>
</div>
<?php include 'includes/footer.php';?>
