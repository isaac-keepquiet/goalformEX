<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Datasave Include For Loop</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php
  // var_dump($_POST);
  // $select1 = $_POST['select1'];
  // var_dump($select1);

  // $a0 = $_POST['select1'];
  // $a1 = $_POST['price1'];
  // $a2 = $_POST['qyt1'];
  // $a3 = $_POST['total1'];
  // $a4 = $_POST['select2'];
  // $a5 = $_POST['price2'];
  // $a6 = $_POST['qyt2'];
  // $a7 = $_POST['total2'];
  // $a8 = $_POST['select3'];
  // $a9 = $_POST['price3'];
  // $a10 = $_POST['qyt3'];
  // $a11 = $_POST['total3'];

  // $x = 23;
  // echo $x;

  // $contain = $_POST;

  // var_dump($contain);

  for($v=0;$v<12;$v++){
      ${"a".$v} = $_POST["container$v"];
  }
        
  // echo $a0, "<br>", $a1, "<br>", $a2, "<br>", $a3, "<br>", $a4, "<br>", $a5, "<br>", $a6, "<br>", $a7, "<br>", $a8, "<br>", $a9, "<br>", $a10, "<br>", $a11;

  echo '<div class="container mt-3">';
  echo '<h2>Fruit Price Table</h2>';
  echo '<form action="">';
   echo '<table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">';
    echo '<tr>';
     echo '<th>Name</th>';
     echo '<th>Price</th>';
     echo '<th>QTY</th>';
     echo '<th>Total price</th>';
    echo '</tr>';

    // for($i=0; $i<12;$i++){
    //  if($i<4){
    //   foreach($contain as $value){
    //    echo $value[$i];
    //   }
    //  }elseif($i>=4 && $i<8){
    //    foreach($contain as $value){
    //     echo $value[$i];
    //    }
    //  }else($i>=8 && $i<12){
    //    foreach($contain as $value){
    //     echo $value[$i];
    //    }
    //  }
    // }

    for($i=0;$i<3;$i++){
     echo '<tr>';
     for($j=0;$j<4;$j++){
      // echo "$value<br>";
      // echo $value;
      // echo '<td class="input-area pr">'.(${"a".$i*4+$j}).'</td>';

      echo '<td class="input-area pr">';
      // echo '<input type="number" class="input-area pr price" id="p1" name="container1" value="$a1">';
      echo ${"a".$i*4+$j};
      echo '</td>';

     }
     echo '</tr>';
     }
   echo '</table>';
  echo '</form>';
  echo '</div>';
 ?>
</body>
</html>
