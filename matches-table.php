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
        <div class="row p-0 bg-dark text-white p-2 rounded-top">
            <div class="col-12 p-0 text-center">
                <h5 class="my-1"><?php if($matches['matches'][$matchcount]['teams'][0]['winner']) { echo '1-0'; } else { echo '0-1'; } ?></h5>
            </div>
        </div>
        <?php include 'modules/matches-table-data.php'; ?>
    </table>
    <?php $matchcount = $matchcount + 1; ?>
<?php } ?>