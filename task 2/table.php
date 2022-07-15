<?php
// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
      
];

if(!empty($users))
//if(isset($user))
{

    $table= '<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>';
foreach($users[0] AS $columnName => $coloumnValue){
    $table.="<th>{$columnName} </th>";
};
    $table.='</tr>
        </thead>
    
        <tbody>'
;
foreach($users AS $user){      
    $table.="<tr>";
    foreach($user AS $property=>$value){
    $table.="<td>";
     if(gettype($value)=='array' ){
        foreach($value AS $arrOrobj=>$arrOrobjValue){
            $table.="{$arrOrobjValue} <br>";
        }
     }
     elseif(gettype($value)=='object'){
        foreach($value AS $arrOrobj=>$arrOrobjValue){
            if($property=='gender'){
                if($arrOrobjValue=='m'){
                $arrOrobjValue='male';
                }
                else{
                    $arrOrobjValue='female';
                }
            }
            $table.="{$arrOrobjValue} <br>";
            
     }
    }
     else{
     $table.=$value;
     }
    $table.="</td>";
    };
};
        $table.='</tr>
        </tbody>
    
    </table>';
}
else{
    $table="table is empty...";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="margin-left:30%;margin-top:10%;background-color:cadetblue">

  <?= $table ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>