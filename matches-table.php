<?php
    $matchesfile = file_get_contents("https://d1fodqbtqsx6d3.cloudfront.net/matches.json");
    $matches = json_decode($matchesfile, true);

    if( !function_exists('ceiling') )
    {
        function ceiling($number, $significance = 1)
        {
            return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
        }
    }
?>

<?php $matchcount = 0; ?>

<?php foreach ($matches['matches'] as &$value) { ?>
    <?php include 'modules/matches-table-data.php'; ?>
    <?php $matchcount = $matchcount + 1; ?>
<?php } ?>