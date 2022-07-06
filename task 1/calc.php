<?php  
if($_POST){
  $x=$_POST['num1'];
  $y=$_POST['num2'];
  $t=$_POST['operator'];
if($t=='add'){
$message=$x+$y;
}
elseif($t=='sub'){
  $message=$x-$y;

}
elseif($t=='multi'){
  $message=$x*$y;

}
elseif($t=='div'){
  $message=$x/$y;

}
elseif($t=='reminder'){
  $message=$x%$y;

}}
//may done by switch
   


?>
<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger h1 mt-5">
                 Calculate two number
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                      <label for=""><strong> First num</strong></label>
                      <input type="number" name="num1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                      <label for=""><strong>Second num</strong></label>
                      <input type="number" name="num2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                        <input type="submit" name="operator" value="add">
                        <input type="submit" name="operator" value="sub">
                        <input type="submit" name="operator" value="div">
                        <input type="submit" name="operator" value="multi">
                        <input type="submit" name="operator" value="reminder">
                        
                </form>
                <?php echo $message ?? ""; ?>
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
