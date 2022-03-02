<?php
    /*
    1) PHP  ~Add ID to matches
    2) JS   Show only top 10 results
    3) PHP  Add load more button
    4) JS   Use Load More button to query next 10 match_id's
    */

    if( !function_exists('ceiling') )
    {
        function ceiling($number, $significance = 1)
        {
            return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
        }
    }

    $matchesfile = file_get_contents("https://d1fodqbtqsx6d3.cloudfront.net/matches.json");
    $matches = json_decode($matchesfile, true);

    $matchcount = 0;

    foreach ($matches['matches'] as &$value) {
        include 'modules/matches-table-data.php';
        $matchcount = $matchcount + 1;
    }
?>