<?php

if (!empty($_POST)) {
    $name = $_POST['name'];
    $loan = $_POST['loan'];
    $numberOfYears = $_POST['numOfYear'];
    if($_POST['numOfYear']<=3){
        $interestRate=(10/100)*$_POST['loan']*$_POST['numOfYear'];
        $LoanAfterRate=$_POST['loan']+$interestRate;
        $Monthly=$LoanAfterRate/(12*$_POST['numOfYear']);
    }
    else{
        $interestRate=(15/100)*$_POST['loan']*$_POST['numOfYear'];
        $LoanAfterRate=$_POST['loan']+$interestRate;
        $Monthly=$LoanAfterRate/(12*$_POST['numOfYear']);

    };

    $Result = "
<table class='table'>
<thead>
    <tr>
        <th>User Name</th>
        <th>Interest rate</th>
        <th>Loan after rate</th>
        <th>Monthly</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>";
        $Result.= "{$name}
        </td>

        <td>";
        $Result.="{$interestRate}
        </td>

        <td>";
        $Result.="{$LoanAfterRate}
        </td>

        <td>";
        $Result.="{$Monthly}
        </td>
    </tr>
</tbody>
</table>

";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;color:blue;margin-top:100px;">Bank</h1>
    <h4 style="color: blue;margin-left:400px;width:500px">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">User name:</label>
                <input type="text" name="name" id="" value="<?= $_POST['name'] ?? "" ?>" class="form-control" placeholder="Enter your name" aria-describedby="helpId">
                <label for="">loan value:</label>
                <input type="text" name="loan" id="" value="<?= $_POST['loan'] ?? "" ?>" class="form-control" placeholder="Enter loan value" aria-describedby="helpId">
                <label for="">Number of years::</label>
                <input type="text" name="numOfYear" id="" value="<?= $_POST['numOfYear'] ?? "" ?>" class="form-control" placeholder="Enter number of years" aria-describedby="helpId"><br>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
        </form>

    </h4>
    <?= $Result ?? "" ?>

    <!-- <img style="margin-top:30px;width:100px;float:" src="https://tse4.mm.bing.net/th?id=OIP.PzpTHqE_SG12Q4ySfKSHoAHaE8&pid=Api&P=0" alt=""> -->

    </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>