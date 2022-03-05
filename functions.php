<?php
// Load database
// Removes player's team tags in front of their name
function playerFilter() {
    if(is_file('playerpage.php')) {
        $playername = $leaderboards['leaderboards'][0]['lineup'][$playerid]['name'];
        include 'data/teamlist.php';
        foreach ($teamlist as &$word) {
            $word = '/\b' . preg_quote($word, '/') . '\b/';
        }
        $playername = preg_replace($teamlist, '', $playername);
    }
}
// Rounds up number
function ceiling($number, $significance = 1)
{
    return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
}
?>