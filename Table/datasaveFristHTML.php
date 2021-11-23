<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exercise Table</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    for($v=0;$v<12;$v++){
        ${"a".$v} = $_POST["container$v"];
    }
    // var_dump($s_POST);
  ?>

  <div class="container mt-3">
    <h2>Fruit Price Table</h2>
    <p></p>   
    <form action="datasave.php" method="post">
    <form action="datasaveIncludeForLoop.php" method="post">
      <!-- <input type="text" name="name" id="name"> -->
      <table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>QTY</th>
            <th>Total price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="text" name="container0" id="select1" value="<?php echo $a0; ?>">
            </td>
            <td><input type="number" class="input-area pr price" id="p1" name="container1" value="<?php echo $a1; ?>"></td>
            <td><input type="number" class="input-area pr qty" id="qyt1" name="container2" value="<?php echo $a2; ?>"></td>
            <td><input type="number" name="container3" class="input-area pr total_price" id="totalprice1" value="<?php echo $a3; ?>"></td>
          </tr>
          <tr>
            <td>
                <input type="text" name="container4" id="select2" value="<?php echo $a4; ?>">
            </td>
            <td><input type="number" class="input-area pr price" id="p2" name="container5" value="<?php echo $a5; ?>"></td>
            <td><input type="number" class="input-area pr qty" id="qyt2" name="container6" value="<?php echo $a6; ?>"></td>
            <td><input type="number" name="container7" class="input-area pr total_price" id="totalprice2" value="<?php echo $a7; ?>"></td>
          </tr>
          <tr>
            <td>
                <input type="text" name="container8" id="select3" value="<?php echo $a8; ?>">
            </td>
            <td><input type="number" class="input-area pr price" id="p3" name="container9" value="<?php echo $a9; ?>"></td>
            <td><input type="number" class="input-area pr qty" id="qyt3" name="container10" value="<?php echo $a10; ?>"></td>
            <td><input type="number" name="container11" class="input-area pr total_price" id="totalprice3" value="<?php echo $a11; ?>"></td>
          </tr>
          <!-- <tr>
            <td><h3>Total</h3></td>
            <td></td>
            <td><td><input type="number" name=""  class="input-area pr all_total_price" id="alltotalprice"></td></td>
          </tr> -->
        </tbody>        
      </table>
    </form>
    
  </div>
  

</body>
</html>