<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="my-5">
                <h1 class="mb-5 text-center">Matches</h1>
                <div class="text-center mb-5 loader">
                    <div class="spinner-border" role="status"></div>
                </div>

                <?php include 'matches-table.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>