<?php

function drawTable(int $numberOfRows): string
{
  $table =
    "    
    <table class='table'>

  <thead>
    <tr>
      <th scope='col'>Product name</th>
      <th scope='col'>Price</th>
      <th scope='col'>Quantities</th>
    </tr>
  </thead>
  
  <tbody>";
  for ($i = 1; $i <= $_POST['numOfVaraieties']; $i++) {

    $table .= "<tr>
    <td scope='row'><input name='product{$i}name' type='text'></td>
    <td scope='row'><input name='product{$i}price' type='number'></td>
    <td scope='row'><input name='product{$i}quantity' type='text'></td>

  </tr>";
  };
  $table .= "</tbody></table><input name='view_invoice' type='submit' class='btn btn-primary btn-lg btn-block'>";
  return $table;
}
function viewInvoice(array $data): string
{
  $table = "
    <table class='table table-dark text-center'>
     <thead>
     <tr>
     <th>Product</th>
     <th >Price</th>
     <th >Quantity</th>
     <th >Subtotal</th>
    </tr>
     </thead>
    <tbody>

    
    
    
    
    
    
    
    
    
    
    
    
    </tbody>
    </table>
    ";
  //     "
  //         <table class='table'>
  //   <tbody>
  //     <tr>
  //       <th scope='row'>client name</th>
  //       <td>" . $_POST['name'];

  //   $table .= "</td>
  //     </tr>";


  //   $table .= "<tr>
  //     <th scope='row'>city</th>
  //     <td>" . $_POST['city'];
  //   $table .= "</td>
  //   </tr>";

  //   $table .= "<tr>
  //       <th scope='row'>total</th>
  //       <td>
  //       </td>
  //     </tr>";



  //   $table .= "<tr>
  //     <th scope='row'>Discount</th>
  //     <td></td>
  //   </tr>";

  //   $table .= "<tr>
  //   <th scope='row'>Total after discount</th>
  //   <td></td>
  // </tr>";

  //   $table .= "<tr>
  // <th scope='row'>Delivery</th>
  // <td></td>
  // </tr>";

  //   $table .= "<tr>
  // <th scope='row'>Net total</th>
  // <td></td>
  // </tr>";

  //   $table .= "</tbody></table>";
  return $table;
};

function delivery(string $city):float{
  if($city=='cairo'){
    $delivery = 0;
  }
  elseif ($city == 'Giza') {
    $delivery = 30;
  } elseif ($city == 'Alex') {
    $delivery = 50;
  } else {
    $delivery = 100;
  }
  return $delivery;
}

function discount(float $totalPrice): float{
    if ($totalPrice < 1000) {
      $discount = 0;
    } elseif ($totalPrice >= 1000 && $totalPrice < 3000) {
      $discount = 0.1;
    } elseif ($totalPrice >= 3000 && $totalPrice < 4500) {
      $discount = 0.15;
    } else {
      $discount = 0.2;
    }
    return $discount;
  }




?>




<!doctype html>
<html lang="en">
<head>
  <title>suber market</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <h1 style="text-align: center;color:blue;margin-top:100px;">Super market</h1>
  <h4 style="color: blue;margin-left:100px;width:400px">
    <form action="" method="POST">
      <div class="form-group">
        <label for="">User name:</label>
        <input type="text" name="name" id="" value="<?= $_POST['name'] ?? "" ?>" class="form-control" placeholder="Enter your name" aria-describedby="helpId">

        <label for="">City:</label>

        <select name="city" class="form-control selcls">
          <option <?= (isset($_POST['city']) && $_POST['city'] == 'choose' ? 'selected' : "") ?> value="choose">--- Choose a color ---</option>
          <option <?= (isset($_POST['city']) && $_POST['city'] == 'cairo' ? 'selected' : "") ?> value="cairo">cairo</option>
          <option <?= (isset($_POST['city']) && $_POST['city'] == 'giza' ? 'selected' : "") ?> value="giza">giza</option>
          <option <?= (isset($_POST['city']) && $_POST['city'] == 'alex' ? 'selected' : "") ?> value="alex">alex</option>
          <option <?= (isset($_POST['city']) && $_POST['city'] == 'others' ? 'selected' : "") ?> value="others">others</option>
        </select>

        <label for="">Number of varaieties:</label>
        <input type="number" name="numOfVaraieties" id="" value="<?= $_POST['numOfVaraieties'] ?? "" ?>" class="form-control" placeholder="Enter number of varaieties" aria-describedby="helpId"><br>
        <button type="submit" name="enter_products" class="btn btn-primary btn-lg btn-block">Enter Products</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
          if (isset($_POST['enter_products'])) {
            echo drawTable($_POST['numOfVaraieties']);
          }
          if (isset($_POST['view_invoice'])) {
            echo viewInvoice($_POST);
          }
        }
        
        ?>



    </form>

  </h4>

  <!-- <img style="margin-top:30px;width:100px;float:" src="https://tse4.mm.bing.net/th?id=OIP.PzpTHqE_SG12Q4ySfKSHoAHaE8&pid=Api&P=0" alt=""> -->

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>