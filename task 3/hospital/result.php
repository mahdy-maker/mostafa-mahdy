
<?php
session_start();





?>
<!doctype html>
<html lang="en">

<head>
    <title>review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1 {
            color: blue;
            margin-top: 100px;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
    </style>
</head>

<body>
    <h1>result</h1>
    <div class="container">
        <form action="" method="post">

            <table class="table">

                <thead>
                    <tr>
                        <th>Questions?</th>
                        <th>reviews</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Are you satisfied with the level of cleanliness ?</td>
                        <td><?php echo $_SESSION['q1']?></td>


                    </tr>
                    <tr>
                        <td>Are you satisfied with the service prices ?</td>
                        <td><?php echo $_SESSION['q2']?></td>

                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service ?</td>
                        <td><?php echo $_SESSION['q3']?></td>

                    </tr>
                    <tr>
                        <td>Are you satisfied with the level of the doctor ?</td>
                        <td><?php echo $_SESSION['q4']?></td>

                    </tr>
                    <tr>
                        <td>Are you satisfied with the calmness in the hospital ?</td>
                        <td><?php echo $_SESSION['q5']?></td>

                    </tr>
                    <tr>
                        <td style="background-color: black;color:aliceblue"><h5>Total review:<?= $_SESSION['status']?></h5></td></tr>
                </tbody>
            </table>
            <h4><?= $_SESSION['total-review']??""?></h4>



    </div>

    </form>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>