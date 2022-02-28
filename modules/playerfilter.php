<?php
    if(is_file('playerpage.php')) {
    $playername = $leaderboards['leaderboards'][0]['lineup'][$playerid]['name'];
    include 'data/teamlist.php';
    foreach ($teamlist as &$word) {
        $word = '/\b' . preg_quote($word, '/') . '\b/';
    }
    $playername = preg_replace($teamlist, '', $playername);
    }
?>