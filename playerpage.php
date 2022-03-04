<?php
    getLeaderboardData();
    getMatchesData();

    $playerid = $_GET['playerid'];
    
    if( !function_exists('ceiling') )
    {
        function ceiling($number, $significance = 1)
        {
            return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
        }
    }
    
    include 'modules/playerfilter.php';
?>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="my-5">
                <h1 class="text-center mb-5"><?php echo $playername; ?></h1>
                <div class="mb-5">
                    <h3 class="text-center">General statistics</h3>
                    <div class="row mt-4">
                        <div class="col-12 col-md-6 col-lg-4 h-100 mb-3">
                            <div class="bg-light">
                                <div class="p-3 text-center">
                                    <h4>Wins</h4>
                                    <p><?php echo $leaderboards['leaderboards'][0]['lineup'][$playerid]['wins']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 h-100 mb-3">
                            <div class="bg-light">
                                <div class="p-3 text-center">
                                    <h4>Losses</h4>
                                    <p><?php echo $leaderboards['leaderboards'][0]['lineup'][$playerid]['losses']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 h-100 mb-3">
                            <div class="bg-light">
                                <div class="p-3 text-center">
                                    <h4>Win %</h4>
                                    <?php $gamesplayed = $leaderboards['leaderboards'][0]['lineup'][$playerid]['wins'] + $leaderboards['leaderboards'][0]['lineup'][$playerid]['losses']; ?>
                                    <?php $winrate = ceiling(100/$gamesplayed*$leaderboards['leaderboards'][0]['lineup'][$playerid]['wins'], 0.01); ?>
                                    <p><?php echo $winrate . '%'; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>