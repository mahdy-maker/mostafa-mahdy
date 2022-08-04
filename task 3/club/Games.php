<?php
session_start();
if (!$_SERVER['REQUEST_METHOD'] == 'post' && $_POST) {
    echo "error....";
    die;
}
$_SESSION['subscriper']=$_POST['name'];

?>
<!doctype html>
<html lang="en">

<head>
    <title>games</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col 12 text-center text-danger mt-5">
        <h1>Games</h1>
    </div>
    <div class="container">
        <form action="result.php" method="POST">

            <div class="row">
                <?php
                for ($i = 1; $i <= $_POST['number']; $i++) { ?>
                    <div class="col-12">

                        <div class="form-group">
                            <label for="member-<?=$i?>">member <?= $i ?>:</label>
                            <input type="text" name="member<?=$i?>[name]" id="name" class="form-control" placeholder="Enter your name" aria-describedby="helpId">
                        </div>


                        <div class="form-group">
                            <label for="members">games</label>

                            <div class="form-check">
                                <input value="300" name="member<?=$i?>[games][football]" class="form-check-input" type="checkbox" id="member-<?= $i ?>-football">

                                <label class="form-check-label" for="member-<?= $i ?>-football">football </label>
                            </div>

                            <div class="form-check">
                                <input value="250" name="member<?=$i?>[games][swimming]" class="form-check-input" type="checkbox" id="member-<?= $i ?>-swimming" >
                                <label class="form-check-label" for="member-<?= $i ?>-swimming">swimming </label>
                            </div>

                            <div class="form-check">
                                <input value="150" name="member<?=$i?>[games][volleyball]" class="form-check-input" type="checkbox" id="member-<?= $i ?>-volleyball" >
                                <label class="form-check-label" for="member-<?= $i ?>-volleyball">volleyball </label>
                            </div>



                            <div class="form-check">
                                <input value="100" name="member<?=$i?>[games][others]" class="form-check-input" type="checkbox" id="member-<?= $i ?>-others" >
                                <label class="form-check-label" for="member-<?= $i ?>-others">others </label>
                            </div>
                        </div>


                    </div>
                <?php } ?>
                <div class="form-group">
                    <button class="btn btn-outline-danger btn-sm">subscribe</button>
                </div>
        </form>

    </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>