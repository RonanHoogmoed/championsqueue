<?php getData(); ?>

<div class="table-responsive">
    <table id="standings-table" class="table tablesorter">
        <thead>
            <tr>
                <th class="text-center">Rank</th>
                <th>Name</th>
                <th class="text-center">LP</th>
                <th class="text-center">GP</th>
                <th class="text-center">Wins</th>
                <th class="text-center">Losses</th>
                <th class="text-center">Win %</th>
            </tr>
        </thead>

        <?php $playercount = 0; ?>
        <tbody>
            <?php foreach ($leaderboards['leaderboards'][0]['lineup'] as &$value) { ?>
                <tr>
                    <?php
                    $player_name = $leaderboards['leaderboards'][0]['lineup'][$playercount]['name'];
                    include 'data/teamlist.php';
                    foreach ($teamlist as &$word) {
                        $word = '/\b' . preg_quote($word, '/') . '\b/';
                    }
                    $player_name = preg_replace($teamlist, '', $player_name);
                    ?>
                    <td class="text-center"><?php echo $leaderboards['leaderboards'][0]['lineup'][$playercount]['rank']; ?></td>
                    <td class="font-weight-bold"><a href="<?php echo 'playerpage.php?playerid=' . $playercount ?>"><?php echo $player_name; ?></a></td>
                    <td class="text-center"><?php echo $leaderboards['leaderboards'][0]['lineup'][$playercount]['lp']; ?></td>
                    <td class="text-center"><?php echo $gamesplayed = $leaderboards['leaderboards'][0]['lineup'][$playercount]['wins']+$leaderboards['leaderboards'][0]['lineup'][$playercount]['losses']; ?></td>
                    <td class="text-center"><?php echo $leaderboards['leaderboards'][0]['lineup'][$playercount]['wins']; ?></td>
                    <td class="text-center"><?php echo $leaderboards['leaderboards'][0]['lineup'][$playercount]['losses']; ?></td>

                    <?php $winrate = ceiling(100/$gamesplayed*$leaderboards['leaderboards'][0]['lineup'][$playercount]['wins'], 0.01); ?>
                    <?php if($winrate > 60) { ?>
                        <td class="text-center text-success"><?php echo $winrate . '%'; ?></td>
                    <?php } elseif($winrate < 45) { ?>
                        <td class="text-center text-danger"><?php echo $winrate . '%'; ?></td>
                    <?php } else { ?>
                        <td class="text-center"><?php echo $winrate . '%'; ?></td>
                    <?php } ?>

                    <?php $playercount = $playercount + 1; ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>