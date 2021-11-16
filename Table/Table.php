<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-3">
  <h2>Fruit Price Table</h2>
  <p></p>            
  <table class="table table-bordered table-striped">
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
        <td><p>Apple</p></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td></td>
      </tr>
      <tr>
        <td><p>Watermelon</p></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td></td>
      </tr>
      <tr>
        <td><p>Orenge</p></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td><input type="number" name="points" min="0" max="10"></td>
        <td></td>
      </tr>
      <tr>
        <td><h3>Total</h3></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="submit-button">
    <button class="btn btn-primary"><P>SUBMIT</P></button>
  </div>
</div>

</body>
</html>