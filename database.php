<?php
// Leaderboard
$leaderboardfile = file_get_contents("https://d1fodqbtqsx6d3.cloudfront.net/leaderboards.json");
$leaderboards = json_decode($leaderboardfile, true);

// Games
$matchesfile = file_get_contents("https://d1fodqbtqsx6d3.cloudfront.net/matches.json");
$matches = json_decode($matchesfile, true);
?>