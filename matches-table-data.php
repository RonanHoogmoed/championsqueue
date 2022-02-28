<div class="row g-0 mb-4 rounded-bottom">
    <div class="col-12 col-lg-6 p-0">
        <?php
            $playercount = 0;
            foreach ($matches['matches'][$matchcount]['teams'][0]['players'] as &$value) {
                echo '<table class="table mb-0">';
                    echo '<tr class="table-primary">';
                        $team1player = $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['name'];
                        include 'data/teamlist.php';
                        foreach ($teamlist as &$word) {
                            $word = '/\b' . preg_quote($word, '/') . '\b/';
                        }
                        $team1player = preg_replace($teamlist, '', $team1player);
                        
                        if(file_exists('player/' . $team1player . '.php')) {
                            echo '<td class="font-weight-bold" style="width: 30%;"><a href="player/' . $team1player . '.php">' . $team1player . '</a></td>';
                        } else {
                            echo '<td class="font-weight-bold" style="width: 30%;">' . $team1player . '</td>';
                        }
                        echo '<td style="width: 20%;">' . '<img src="http://ddragon.leagueoflegends.com/cdn/12.4.1/img/champion/' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['championIcon'] . '.png">';
                        echo '<td style="width: 18%;">' . '<img src="spells/spellicon-' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['spellIcon1'] . '.png">' . '<img src="spells/spellicon-' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['spellIcon2'] . '.png">' . '</td>';
                        echo '<td style="width: 20%;" class="text-center">' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['kills'] . '/' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['deaths'] . '/' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['assists'] . '</td>';
                        echo '<td class="text-right">' . $matches['matches'][$matchcount]['teams'][0]['players'][$playercount]['cs'] . '</td>';
                    echo '</tr>';
                echo '</table>';
                $playercount = $playercount + 1;
            }
        ?>
    </div>
    <div class="col-12 col-lg-6 p-0">
        <?php
            $playercount = 0;
            foreach ($matches['matches'][$matchcount]['teams'][1]['players'] as &$value) {
                echo '<table class="table mb-0">';
                    echo '<tr class="table-danger">';
                    $team1player = $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['name'];
                    include 'data/teamlist.php';
                    foreach ($teamlist as &$word) {
                        $word = '/\b' . preg_quote($word, '/') . '\b/';
                    }
                    $team1player = preg_replace($teamlist, '', $team1player);
                    echo '<td class="">' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['cs'] . '</td>';
                    echo '<td style="width: 20%;" class="text-center">' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['kills'] . '/' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['deaths'] . '/' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['assists'] . '</td>';
                    echo '<td style="width: 18%;">' . '<img src="spells/spellicon-' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['spellIcon1'] . '.png">' . '<img src="spells/spellicon-' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['spellIcon2'] . '.png">' . '</td>';
                    echo '<td style="width: 20%;">' . '<img src="http://ddragon.leagueoflegends.com/cdn/12.4.1/img/champion/' . $matches['matches'][$matchcount]['teams'][1]['players'][$playercount]['championIcon'] . '.png">';
                    if(file_exists('player/' . $team1player . '.php')) {
                        echo '<td class="font-weight-bold text-right" style="width: 30%;"><a href="player/' . $team1player . '.php">' . $team1player . '</a></td>';
                    } else {
                        echo '<td class="font-weight-bold text-right" style="width: 30%;">' . $team1player . '</td>';
                    }
                    echo '</tr>';
                echo '</table>';
                $playercount = $playercount + 1;
            }
        ?>
    </div>
</div>
