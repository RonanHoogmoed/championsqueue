<?php include '../header.php'; ?>

<?php
// Player data
$player_name = 'Ssumday';
$full_name = 'Kim Chan-ho (김찬호)';
$residency = 'South Korea';
$team = '100 Thieves';
$position = 'Top';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="my-5">
                <h1 class="text-center"><?php echo $player_name; ?></h1>
                <p class="text-center mb-5 text-uppercase font-weight-bold"><?php echo $full_name; ?> | <?php echo $residency; ?> | <a href="https://liquipedia.net/leagueoflegends/<?php echo $team; ?>" target="_blank"><?php echo $team; ?></a> | <?php echo $position; ?></p>
                <?php include '../playerpage.php'; ?>
            </div>
        </div>
    </div>
</div>


<?php include '../footer.php'; ?>