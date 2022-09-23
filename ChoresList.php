<?php
    $chores = ["Laundry", "Dishes", "Vacuum", "Dinner"];
    
    $chorelist = "Do these chores:";
    $chorelist .= "<ol>";
    
    foreach($chores as $chore){

        $chorelist .= "<li>$chore</li>";

    }
    $chorelist .= "</ol>";

    echo $chorelist;
?>
