<?php
    /*
    1) PHP  ~Add ID to matches
    2) JS   Show only top 10 results
    3) PHP  Add load more button
    4) JS   Use Load More button to query next 10 match_id's
    */

    getMatchesData();

    $matchcount = 0;

    foreach ($matches['matches'] as &$value) {
        include 'modules/matches-table-data.php';
        $matchcount = $matchcount + 1;
    }
?>