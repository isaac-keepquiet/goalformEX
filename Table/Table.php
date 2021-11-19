<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container mt-3">
    <h2>Fruit Price Table</h2>
    <p></p>   
    <form action="datasave.php" method="post">
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
              <select class="input-area" name="Select1" id="Select1">
                <option value="Apple">Apple</option>
                <option value="Watermelon">Watermelon</option>
                <option value="Orange">Orange</option>
              </select>
            </td>
            <td><input type="number" class="input-area pr price" id="p1" name="price1" onchange="add_to_total(this)" min="0" max="100"></td>
            <td><input type="number" class="input-area pr qty" id="qyt1" name="qyt1" onchange="add_to_total(this)" min="0" max="1000"></td>
            <td><input type="number" name="total1"  class="input-area pr total_price" id="totalprice1" oninput="add_all_total(this)"</td>
          </tr>
          <tr>
            <td>
              <select class="input-area" name="Select2" id="Select2">
                <option value="Apple">Apple</option>
                <option value="Watermelon">Watermelon</option>
                <option value="Orange">Orange</option>
              </select>
            </td>
            <td><input type="number" class="input-area pr price" id="p2" name="price2" onchange="add_to_total(this)" min="0" max="100"></td>
            <td><input type="number" class="input-area pr qty" id="qyt2" name="qyt2" onchange="add_to_total(this)" min="0" max="1000"></td>
            <td><input type="number" name="total2"  class="input-area pr total_price" id="totalprice2" oninput="add_all_total(this)"></td>
          </tr>
          <tr>
            <td>
              <select class="input-area" name="Select3" id="Select3">
                <option value="Apple">Apple</option>
                <option value="Watermelon">Watermelon</option>
                <option value="Orange">Orange</option>
              </select>
            </td>
            <td><input type="number" class="input-area pr price" id="p3" name="price3" onchange="add_to_total(this)" min="0" max="100"></td>
            <td><input type="number" class="input-area pr qty" id="qyt3" name="qyt3S" onchange="add_to_total(this)" min="0" max="1000"></td>
            <td><input type="number" name="total3"  class="input-area pr total_price" id="totalprice3" oninput="add_all_total(this)"></td>
          </tr>
          <tr>
            <td><h3>Total</h3></td>
            <td></td>
            <td><td><input type="number" name=""  class="input-area pr all_total_price" id="alltotalprice"></td></td>
          </tr>
        </tbody>
        
      </table>
      <div class="submit-button">
        <button class="btn btn-primary"><P>SUBMIT</P></button>
      </div>
      
    </form>
    
  </div>
  

</body>
<script src="script.js"></script>
</html>