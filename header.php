<?php $home_url = 'http://127.0.0.1/championsqueue/'; ?>

<?php include 'functions.php'; ?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Ronan's Champions Queue Data</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-brand"><img style="max-width: 28px" src="https://ronanhoogmoed.com//img/logo-purple.png" alt=""></div>
                <a class="navbar-brand" href="<?php echo $home_url; ?>">Champions Queue</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $home_url; ?>">Standings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $home_url; ?>matches.php">Matches</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>