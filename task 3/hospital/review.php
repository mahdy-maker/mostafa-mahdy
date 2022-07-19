<?php
session_start();
if (!empty($_POST['firstQ']) && !empty($_POST['secondQ']) && !empty($_POST['thirdQ']) && !empty($_POST['fourthQ']) && !empty($_POST['fifthQ'])) {

    if ($_POST['firstQ'] == 'bad') {
        $_SESSION['q1'] = 'bad';
        $sum=0;
    } else if ($_POST['firstQ'] == 'good') {
        $_SESSION['q1'] = 'good';
        $sum=3;
    } else if ($_POST['firstQ'] == 'very good') {
        $_SESSION['q1'] = 'very good';
        $sum=5;
    } else if ($_POST['firstQ'] == 'exellent') {
        $_SESSION['q1'] = 'ecellent';
        $sum=10;
    }


    if ($_POST['secondQ'] == 'bad') {
        $_SESSION['q2'] = 'bad';
        $sum+=0;
    } else if ($_POST['secondQ'] == 'good') {
        $_SESSION['q2'] = 'good';
        $sum+=3;
    } else if ($_POST['secondQ'] == 'very good') {
        $_SESSION['q2'] = 'very good';
        $sum+=5;
    } else if ($_POST['secondQ'] == 'exellent') {
        $_SESSION['q2'] = 'exellent';
        $sum+=10;

    }


    if ($_POST['thirdQ'] == 'bad') {
        $_SESSION['q3'] = 'bad';
        $sum+=0;

    } else if ($_POST['thirdQ'] == 'good') {
        $_SESSION['q3'] = 'good';
        $sum+=3;

    } else if ($_POST['thirdQ'] == 'very good') {
        $_SESSION['q3'] = 'very good';
        $sum+=5;

    } else if ($_POST['thirdQ'] == 'exellent') {
        $_SESSION['q3'] = 'exellent';
        $sum+=10;

    }


    if ($_POST['fourthQ'] == 'bad') {
        $_SESSION['q4'] = 'bad';
        $sum+=0;

    } else if ($_POST['fourthQ'] == 'good') {
        $_SESSION['q4'] = 'good';
        $sum+=3;

    } else if ($_POST['fourthQ'] == 'very good') {
        $_SESSION['q4'] = 'very good';
        $sum+=5;

    } else if ($_POST['fourthQ'] == 'exellent') {
        $_SESSION['q4'] = 'exellent';
        $sum+=10;

    }

    if ($_POST['fifthQ'] == 'bad') {
        $_SESSION['q5'] = 'bad';
        $sum+=0;

    } else if ($_POST['fifthQ'] == 'good') {
        $_SESSION['q5'] = 'good';
        $sum+=3;

    } else if ($_POST['fifthQ'] == 'very good') {
        $_SESSION['q5'] = 'very good';
        $sum+=5;

    } else if ($_POST['fifthQ'] == 'exellent') {
        $_SESSION['q5'] = 'exellent';
        $sum+=10;

    }
    
    if($sum<25){
    $_SESSION['total-review']="We will call you later on this phone :".$_SESSION['number'];
    $_SESSION['status']="bad";
    }
    else if($sum>=25 && $sum<35){
        $_SESSION['status']="good";

    }
    else if($sum>=35 && $sum<45){
        $_SESSION['status']="very good";

    }    else if($sum>=45 && $sum<=50){
        $_SESSION['status']="exellent";

    }
    else{
        $_SESSION['total-review']="thank you";
    }
    header('location:result.php');
    die;
}

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
    <h1>Review</h1>
    <div class="container">
        <form name="f" action="" method="post">

            <table class="table">

                <thead>
                    <tr>
                        <th>Questions?</th>
                        <th>Bad</th>
                        <th>Good</th>
                        <th>Very good</th>
                        <th>Exellent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Are you satisfied with the level of cleanliness ?</td>
                        <td><input name="firstQ" type="radio" value="bad"></td>
                        <td><input name="firstQ" type="radio" value="good"></td>
                        <td><input name="firstQ" type="radio" value="very good"></td>
                        <td><input name="firstQ" type="radio" value="exellent"></td>

                    </tr>
                    <tr>
                        <td>Are you satisfied with the service prices ?</td>
                        <td><input name="secondQ" type="radio" value="bad"></td>
                        <td><input name="secondQ" type="radio" value="good"></td>
                        <td><input name="secondQ" type="radio" value="very good"></td>
                        <td><input name="secondQ" type="radio" value="exellent"></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service ?</td>
                        <td><input name="thirdQ" type="radio" value="bad"></td>
                        <td><input name="thirdQ" type="radio" value="good"></td>
                        <td><input name="thirdQ" type="radio" value="very good"></td>
                        <td><input name="thirdQ" type="radio" value="exellent"></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the level of the doctor ?</td>
                        <td><input name="fourthQ" type="radio" value="bad"></td>
                        <td><input name="fourthQ" type="radio" value="good"></td>
                        <td><input name="fourthQ" type="radio" value="very good"></td>
                        <td><input name="fourthQ" type="radio" value="exellent"></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the calmness in the hospital ?</td>
                        <td><input name="fifthQ" type="radio" value="bad"></td>
                        <td><input name="fifthQ" type="radio" value="good"></td>
                        <td><input name="fifthQ" type="radio" value="very good"></td>
                        <td><input name="fifthQ" type="radio" value="exellent"></td>
                    </tr>
                </tbody>
            </table>
            <?= $result1 ?? "" ?>
            <!-- <?= $result2 ?? "" ?> -->

            <button type="submit" class="btn btn-primary btn-lg btn-block">submit</button>

    </div>
    </form>



    <img style="margin-left: 400px;" src="https://tse2.mm.bing.net/th?id=OIP.ivFZXyzxNQB44h_M2rsFrAHaHK&pid=Api&P=0" alt="">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>