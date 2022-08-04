<?php
session_start();
if (!$_SERVER['REQUEST_METHOD'] == 'POST' && $_POST) {
    echo "error.....";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col 12 text-center text-danger mt-5">
        <h1>Invoice</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>subscriber</th>
                            <th colspan="10"><?= $_SESSION['subscriper'] ?? "" ?></th>



                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $totalGames = 0;
                        $footballclub = 0;
                        $volyballclub = 0;
                        $swimmingclub = 0;
                        $othersclub = 0;
                        foreach ($_POST as $key => $member) {
                        ?>
                            <tr>
                                <td><?= $member['name'] ?></td>
                                <?php
                                if (isset($member['games'])) {
                                    $totalGames += array_sum($member['games']);

                                    foreach ($member['games'] as $game => $price) {
                                        echo "<td>{$game}</td>";
                                        if ($game == 'football') {
                                            $footballclub = +$price;
                                        } elseif ($game == 'volyball') {
                                            $volyballclub += $price;
                                        } elseif ($game == 'simming') {
                                            $swimmingclub += $price;
                                        } else {
                                            $othersclub += $price;
                                        }
                                    }
                                    echo "<td>" . array_sum($member['games']) . "EGP</td>";
                                } else {
                                    echo "<td> 0 EGP</td>";
                                }

                                ?>
                            </tr>

                        <?php } ?>
                        <tr>
                            <td>Total price</td>

                            <td><?= $totalGames ?>EGP</td>
                        </tr>
                        <tr>
                            <td>football club</td>

                            <td><?= $footballclub ?>EGP</td>
                        </tr>
                        <tr>
                            <td>vollyball club</td>

                            <td><?= $volyballclub ?>EGP</td>
                        </tr>
                        <tr>
                            <td>swimming club</td>

                            <td><?= $swimmingclub ?>EGP</td>
                        </tr>
                        <tr>
                            <td>others club</td>

                            <td><?= $othersclub ?>EGP</td>
                        </tr>
                        <tr>
                            <td>club subscription</td>

                            <td><?= $clubsubs = 1000 + (2500 *  count($_POST)) ?>EGP</td>
                        </tr>
                        <tr>
                            <td>total price</td>

                            <td><?= $clubsubs + $totalGames ?>EGP</td>
                        </tr>
                    </tbody>
                </table>
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