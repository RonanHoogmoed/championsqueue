<?php
    include 'database.php';

    $matchcount = 0;

    foreach ($matches['matches'] as &$value) {
        include 'modules/matches-table-data.php';
        $matchcount = $matchcount + 1;
    }
?>